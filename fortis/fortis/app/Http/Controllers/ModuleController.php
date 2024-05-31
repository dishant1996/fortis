<?php

namespace App\Http\Controllers;

use App\Models\documents;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Modules;
use App\Models\Modules_new;
use App\Models\Subcategories;
use App\Models\Subcategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class ModuleController extends Controller
{
    public function addModule(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'modname' => 'required|string|max:255',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'statusCode' => 422,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }
        $existingModule = Modules_new::where('modname', $request->modname)->first();
        if ($existingModule) {
            return response()->json([
                'statusCode' => 400,
                'message' => 'Module already exists'
            ]);
        }
        $originalParam = $request->modname;

        if ($originalParam !== null) {
            $transformedParam = str_replace('_', '-', strtolower($originalParam));
            $transformedParam = preg_replace('/\s+/', '-', $transformedParam);
        }
        $module = Modules_new::create([
            'modname' => $request->input('modname'),
            'slug' => $transformedParam,
            'isActive' => "1",

        ]);

        if ($module) {
            return response()->json([
                'statusCode' => 200,
                'message' => 'Module added successfully',
                'module' => $module
            ]);
        } else {
            return response()->json([
                'statusCode' => 500,
                'message' => 'Something went wrong while adding the module',
            ], 500);
        }
    }

    public function addSubcategory(Request $request)
    {
        $validatedData = $request->validate([
            'modname' => 'required',
            'subcategory' => 'required'
        ]);

        $mod = Modules_new::where('modname', $request->modname)->first();

        $existingSubcategory = Subcategories::where('sub_name', $request->subcategory)->first();
        if ($existingSubcategory) {
            return response()->json([
                'statusCode' => 400,
                'message' => 'Subcategory already exists'
            ]);
        }

        if ($mod) {
            $moduleName = $mod->slug;
            $mod_id = $mod->mod_id;
            $slug = $mod->slug;

            $originalParam = $request->subcategory;

            if ($originalParam !== null) {
                $transformedParam = str_replace('_', '-', strtolower($originalParam));
                $transformedParam = preg_replace('/\s+/', '-', $transformedParam);

                $subcategories = Subcategories::create([
                    'mod_name' => $moduleName, //module - used
                    'mod_id' => $mod_id, // module - table
                    'sub_name' => $request->subcategory,
                    'DocName' => $transformedParam,
                    'isActive' => "1",
                ]);
            }

            if ($subcategories) {
                Modules_new::where('modname', $request->modname)->update(['subcategories' => 'yes']);
                return response()->json([
                    'status code' => 200,
                    'message' => 'Subcategories Added Successfully',

                ]);
            }
        } else {
            return response()->json([
                'statusCode' => 500,
                'message' => 'Failed to create subcategory',
                // Additional error data if needed
            ]);
        }
    }

    public function editModule(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'mod_id' => 'required|exists:modules,mod_id',
            'modname' => 'required|string',
            'subcategories' => 'nullable',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status code' => 400,
                'status_message' => $validator->errors()->all(),
            ]);
        }

        $module = Modules::findOrFail($request->mod_id);
        $module->modname = $request->modname;

        if ($request->has('subcategories')) {
            $module->subcategories = json_encode($request->input('subcategories'));
        }

        $module->save();

        return response()->json([
            'status code' => 400,
            'status_message' => 'Module updated successfully',
            'module' => $module
        ]);
    }

    // for all users
    public function dashboard()
    {
        $modules = Modules::select('modname', 'subcategories')->where('isActive', '1')->get();
        return view('home', [
            'modules' => $modules
        ]);
    }

    // for admin
    public function edit()
    {
        $modules = Modules_new::select('modname', 'subcategories')->where('isActive', '1')->get();
        return view('trial', compact('modules'));
    }
    public function index()
    {
        $modules = Modules::select('modname', 'subcategories')->where('isActive', '1')->get();
        return view('home', compact('modules'));
    }
    public function getSubcategory(Request $request)
    {
        // Retrieve selected module from request
        $selectedModule = $request->input('module');
        $name = $selectedModule->subcategories;
        // Fetch the module from the database
        $module = Modules::where('modname', $selectedModule)->first();

        // Check if the module exists
        if ($module) {
            // Decode the JSON string of subcategories into an array
            $subcategories = json_decode($module->subcategories, true);
            return response()->json(['subcategories' => $subcategories]);
        } else {
            // Module not found
            return response()->json(['error' => 'Module not found'], 404);
        }
    }
    public function getAllModules()
    {
        $modules = Modules::select('modname', 'subcategories')->where('isActive', '1')->get();

        if ($modules->isEmpty()) {
            return response()->json([
                'status code' => 404,
                'message' => 'No modules found',
            ]);
        }

        return response()->json([
            'status code' => 200,
            'message' => 'Modules fetched successfully',
            'modules' => $modules //main

        ]);
    }

    public function deleteModule(Request $request)
    {
        $validator = Validator::make($request->all(), [
            // 'mod_id' => 'required',
            'modname' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status code' => 400,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ]);
        }

        // $module = Modules_new::find($request->input('modname'));
        $module = Modules_new::where('slug', $request->input('modname'))->first();

        if (!$module) {
            return response()->json([
                'status code' => 404,
                'message' => 'Module not found',
            ]);
        }

        $module->isActive = '0';
        if ($module->save()) {
            return response()->json([
                'status code' => 200,
                'message' => 'Module de-activated successfully',
                'module' => $module
            ]);
        } else {
            return response()->json([
                'status code' => 500,
                'message' => 'Something went wrong',
            ]);
        }
    }
    public function reactivateModule(Request $request)
    {
        $validator = Validator::make($request->all(), [
            // 'mod_id' => 'required',
            'modname' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status code' => 400,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ]);
        }

        // $module = Modules_new::find($request->input('modname'));
        $module = Modules_new::where('slug', $request->input('modname'))->first();

        if (!$module) {
            return response()->json([
                'status code' => 404,
                'message' => 'Module not found',
            ]);
        }

        $module->isActive = '1';
        if ($module->save()) {
            return response()->json([
                'status code' => 200,
                'message' => 'Module activated successfully',
                'module' => $module
            ]);
        } else {
            return response()->json([
                'status code' => 500,
                'message' => 'Something went wrong',
            ]);
        }
    }

    // public function fetchModule($slug)
    // {
    //     // Fetch the module by slug
    //     $module = Modules::where('slug', $slug)->first();
    //     $modname = $module->modname;

    //     if (!$module) {
    //         abort(404, 'Module not found');
    //     }
    //     $documents = documents::where('mod_name', $modname)->where('isActive', '1')->get();
    //     // $docName = $documents->DocName;
    //     // $links = $documents->links;
    //     $DocArray = [];

    //     foreach ($documents as $document) {
    //         $DocArray[$document->DocName] = $document->links;
    //     }
    //     // Return the module view
    //     return view('InvestorsRelations', compact('slug','DocArray'));
    // }

    // public function fetchModule($slug, $subcategory)
    public function fetchModule($slug, $subcategory = null)
    {

        $modules = Modules_new::select('modname', 'slug')->where('isActive', '1')->get();

        foreach ($modules as $module) {
            $subcategories = Subcategories::where('mod_name', $module['slug'])->where('isActive', '1')->select('sub_name', 'DocName')->get()->toArray();
            $module->subcategories = $subcategories;
        }
        if (!$slug) {
            abort(404, 'Module not found');
        }
        if ($subcategory) {
            $documents = documents::where('slug', $subcategory)->where('isActive', '1')->get();
        } else {
            $documents = documents::where('slug', $slug)->where('isActive', '1')->get();
        }
        //document block creation  
        $DocArray = [];

        foreach ($documents as $document) {
            $DocArray[$document->DocName] = $document->links;
        }

        return view('admin2', compact('slug', 'DocArray', 'modules'));
    }

    public function investors($slug)
    {
        // $modules = Modules::select('modname', 'subcategories', 'slug')->where('isActive', '1')->get();
        // // $slug = $modules->slug;
        $module = Modules::where('slug', $slug)->first();
        $modname = $module->modname;
        $documents = documents::where('mod_name', $modname)->where('isActive', '1')->get();
        // $docName = $documents->DocName;
        // $links = $documents->links;
        $DocArray = [];

        foreach ($documents as $document) {
            $DocArray[$document->DocName] = $document->links;
        }

        return view('InvestorsRelations', [
            'slug' => $modname,
            'document' => $DocArray,
            // 'links' => $links,
        ]);
    }
    public function serviceNom($slug)
    {
        // Fetch the module by slug
        $modules = Modules_new::select('modname', 'slug')->where('isActive', '1')->get();

        foreach ($modules as $module) {
            $subcategories = Subcategories::where('mod_name', $module['slug'])->where('isActive', '1')->select('sub_name', 'DocName')
                ->get()->toArray();
            $module->subcategories = $subcategories;
        }
        // Return the module view
        return view('home2', compact('slug', 'modules'));
    }
    public function serviceNomAdmin($slug)
    {
        // Fetch the module by slug
        $modules = Modules_new::select('modname', 'slug')->where('isActive', '1')->get();

        foreach ($modules as $module) {
            $subcategories = Subcategories::where('mod_name', $module['slug'])->where('isActive', '1')->select('sub_name', 'DocName')
                ->get()->toArray();
            $module->subcategories = $subcategories;
        }
        // Return the module view
        return view('investors_admin', compact('slug', 'modules'));
    }
    public function boardmem($slug)
    {
        // Fetch the module by slug
        // $mod = Modules::where('slug', $slug)->first();
        // $modname = $mod->modname;
        // $module = Modules::where('modname', $modname)->first();
        // Return the module view
        $modules = Modules_new::select('modname', 'slug')->where('isActive', '1')->get();

        foreach ($modules as $module) {
            $subcategories = Subcategories::where('mod_name', $module['slug'])->where('isActive', '1')->select('sub_name', 'DocName')
                ->get()->toArray();
            $module->subcategories = $subcategories;
        }
        return view('static', compact('slug', 'modules'));
    }

    public function boardmemAdmin($slug)
    {
        // Fetch the module by slug
        // $mod = Modules::where('slug', $slug)->first();
        // $modname = $mod->modname;
        // $module = Modules::where('modname', $modname)->first();
        // Return the module view
        $modules = Modules_new::select('modname', 'slug')->where('isActive', '1')->get();

        foreach ($modules as $module) {
            $subcategories = Subcategories::where('mod_name', $module['slug'])->where('isActive', '1')->select('sub_name', 'DocName')
                ->get()->toArray();
            $module->subcategories = $subcategories;
        }
        return view('boardAdmin', compact('slug', 'modules'));
    }
    //admin new
    public function adminSetup()
    {

        $modules = Modules_new::select('modname', 'slug')->where('isActive', '1')->get(); // important for module undefined

        foreach ($modules as $module) {
            $subcategories = Subcategories::where('mod_name', $module->slug)->where('isActive', '1')->select('sub_name', 'DocName')->get()->toArray();
            $module->subcategories = $subcategories;
        }
        return view('admin', compact('modules'));
    }

    public function adminSetup2()
    {
        $modules = Modules_new::select('modname', 'slug')->where('isActive', '1')->get();

        foreach ($modules as $module) {
            $subcategories = Subcategories::where('mod_name', $module['slug'])->where('isActive', '1')->select('sub_name', 'DocName')
                ->get()->toArray();
            $module->subcategories = $subcategories;
        }

        return view('two', compact('modules'));
    }
    public function change()
    {
        $modules = Modules_new::select('modname', 'slug')->where('isActive', '1')->get();

        foreach ($modules as $module) {
            $subcategories = Subcategories::where('mod_name', $module['slug'])->where('isActive', '1')->select('sub_name', 'DocName')
                ->get()->toArray();
            $module->subcategories = $subcategories;
        }

        return view('modify', compact('modules'));
    }
    public function deactivateSubcategory(Request $request)
{
    $validator = Validator::make($request->all(), [
        'DocName' => 'required',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'status_code' => 400,
            'message' => 'Validation failed',
            'errors' => $validator->errors()
        ]);
    }

    $subcategory = Subcategories::where('DocName', $request->DocName)->first();

    if (!$subcategory) {
        return response()->json([
            'status_code' => 404,
            'message' => 'Subcategory not found',
        ]);
    }

    $subcategory->isActive = '0'; // Deactivate
    $subcategory->save();

    return response()->json([
        'status_code' => 200,
        'message' => 'Subcategory deactivated successfully',
        'subcategory' => $subcategory
    ]);
}

public function reactivateSubcategory(Request $request)
{
    $validator = Validator::make($request->all(), [
        'DocName' => 'required',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'status_code' => 400,
            'message' => 'Validation failed',
            'errors' => $validator->errors()
        ]);
    }

    $subcategory = Subcategories::where('DocName', $request->DocName)->first();

    if (!$subcategory) {
        return response()->json([
            'status_code' => 404,
            'message' => 'Subcategory not found',
        ]);
    }

    $subcategory->isActive = '1'; // Reactivate
    $subcategory->save();

    return response()->json([
        'status_code' => 200,
        'message' => 'Subcategory reactivated successfully',
        'subcategory' => $subcategory
    ]);
}
}
