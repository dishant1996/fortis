<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PasswordResetToken;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;
use App\Models\OauthAccessToken;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Facade;

class UserController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register');
    }
    public function register(Request $request)
    {
        // Validation logic
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users|max:255',
            'password' => 'required|string|min:8',
            'usertype' => 'nullable'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 400);
        } else {
            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')),
                'usertype' => $request->input('usertype'),
            ]);

            $redirectUrl = route('modules.index');
            $token = $user->createToken('authToken')->plainTextToken;

            return response()->json([
                'status code' => 200,
                'status message' => 'User registered successfully',
                // 'token' => $token,
                'redirect_url' => $redirectUrl
            ]);
        }
    }


    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 400);
        }


        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'status_code' => 401, // Unauthorized status code
                'status_message' => 'Unauthorized',
            ], 401); // Return 401 status code for unauthorized
        }   

        $user = Auth::user();


        $accessToken = $user->createToken('authToken')->plainTextToken;
        // $accessToken = $user->createToken('authToken');
        return response()->json([
            'status code' => 200,
            'status message' => 'User logged in successfully',
            'token' => $accessToken,
            // 'redirect' => 'http://127.0.0.1:8000/upload/document'
        ]);
    }

    public function showforgotPassword()
    {

        return view('email');
    }
    public function forgotPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        $token = str::random(length: 64);
        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        Mail::send('forgotmail', ['token' => $token], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject("Reset Password");
        });

        return redirect()->to(route(name: "showforget"))->with("success", "We have send an email to reset password.");
    }

    public function resetPassword($token)
    {
        return view("resetpassword", compact('token'));
    }

    public function resetPasswordchange(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|exists:users',
            'password' => 'required|string|confirmed',
            'password_confirmation' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 400);
        }
        $updatePassword = DB::table('password_resets')->where([
            'email' => $request->email,
            'token' => $request->token,
        ])->first();
        if(!$updatePassword){
            return redirect()->to(route('password.reset'))->with("error","invalid");
        }
        User::where('email',$request->email)->update(['password'=> Hash::make($request->password)]);

        DB::table('password_resets')->where([
            'email' => $request->email,
        ])->delete();

        return redirect()->to(route('login'))->with("success","Password reset successfull");
    }

    public function logout()
    {
        if (Auth::check()) {

            Auth::logout();

            return response()->json(['message' => 'Logout successful']);
        }

        return response()->json(['message' => 'User is not logged in']);
    }

}
