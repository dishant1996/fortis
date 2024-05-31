<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Modules;
use App\Models\documents;
use App\Models\Modules_new;
use App\Models\Subcategories;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class DocumentController extends Controller
{

    //to get subcategories
    public function getSubcategoriesz(Request $request)
    { {
            $subcategoties = Modules::select('subcategories')->where('isActive', '1')->get();

            return view('trial', compact('subcategories'));
        }
    }
    /*
    public function uploadDocument(Request $request, $slug, $subcategory = null)
    {
        $modules = Modules_new::all();

        //route-breaker
        // $parameter = $slug . "/" . $subcategory;
        // $slugSegments = explode('/', $parameter);
        // $mainSlug = end($slugSegments);

        // if (!Auth::check()) {
        //     return response()->json([
        //         'status code' => 401,
        //         'message' => 'Unauthorized'
        //     ]);
        // }
        // $user = Auth::user();
        // if ($user->usertype == 'guest') {
        //     return response()->json([
        //         'status code' => 403,
        //         'status_message' => 'Forbidden. Only admins can upload documents.'
        //     ]);
        // }

        $validator = Validator::make($request->all(), [
            'file.*' => 'required|file|mimes:pdf',
            // 'mod_name' => 'nullable|exists:modules_new,modname',
            'subcategory' => 'nullable',
            'slug' => 'nullable',
        ]);

        $parameter = $slug . "/" . $subcategory;
        $slugSegments = explode('/', $parameter);
        $mainSlug = end($slugSegments);

        if ($validator->fails()) {
            return response()->json([
                'status code' => 400,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ]);
        }

        $key = '';
        if ($mainSlug) {
            $moduleActual = Subcategories::where('DocName', $mainSlug)->first();
            if ($moduleActual) {
                $updatedSlug = $moduleActual->DocName;
                $forName = Modules_new::where('slug', $slug)->first();
                $moduleName = $forName->modname;
                $key = 'yes';
            } else {
                $moduleActual = Modules_new::where('slug', $mainSlug)->firstOrFail();
                $updatedSlug = $moduleActual->slug;
                $moduleName = $moduleActual->modname;
            }
        } else {
            $moduleActual = Modules_new::where('slug', $slug)->firstOrFail();
            $updatedSlug = $moduleActual->slug;
            $moduleName = $moduleActual->modname;
        }

        $documents = [];
        foreach ($request->file('file') as $file) {
            $fileName = $file->getClientOriginalName();
            // $filePath = $file->store('documents');
            $Name = pathinfo($fileName, PATHINFO_FILENAME); //without.pdf
            $filePath = $file->storeAs('documents', $fileName, 'public');

            $existingDocument = documents::where('DocName', $fileName)->first();
            if ($existingDocument) {
                return response()->json([
                    'status code' => 400,
                    'message' => 'File already uploaded: ' . $fileName,
                ]);
            }

            if ($filePath) {
                $document = new documents([
                    'DocName' => $fileName,
                    'mod_id' => $moduleActual->mod_id,
                    'mod_name' => $moduleName, //check
                    'slug' => $updatedSlug, //slug
                    'links' => Storage::url($filePath),
                ]);
                $document->save();
                $documents[] = $document;
            } else {
                return response()->json([
                    'status code' => 500,
                    'message' => 'Failed to upload document: ' . $fileName,
                ]);
            }
        }

        return response()->json([
            'statusCode' => 200,
            'message' => 'Documents uploaded successfully',
            'documents' => $documents
        ]);
    }
    */

    public function uploadDocument(Request $request, $slug, $subcategory = null)
    {
        $modules = Modules_new::all();
        //route-breaker
        // $parameter = $slug . "/" . $subcategory;
        // $slugSegments = explode('/', $parameter);
        // $mainSlug = end($slugSegments);
        // if (!Auth::check()) {
        //     return response()->json([
        //         'status code' => 401,
        //         'message' => 'Unauthorized'
        //     ]);
        // }
        // $user = Auth::user();
        // if ($user->usertype == 'guest') {
        //     return response()->json([
        //         'status code' => 403,
        //         'status_message' => 'Forbidden. Only admins can upload documents.'
        //     ]);
        // }

        $validator = Validator::make($request->all(), [
            'file.*' => 'required|file|mimes:pdf',
            // 'mod_name' => 'nullable|exists:modules_new,modname',
            'subcategory' => 'nullable',
            'slug' => 'nullable',
        ]);

        $parameter = $slug . "/" . $subcategory;
        $slugSegments = explode('/', $parameter);
        $mainSlug = end($slugSegments);

        if ($validator->fails()) {
            return response()->json([
                'status code' => 400,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ]);
        }

        $key = '';
        if ($mainSlug) {
            $moduleActual = Subcategories::where('DocName', $mainSlug)->first();
            if ($moduleActual) {
                $updatedSlug = $moduleActual->DocName;
                $forName = Modules_new::where('slug', $slug)->first();
                $moduleName = $forName->modname;
                $key = 'yes';
            } else {
                $moduleActual = Modules_new::where('slug', $mainSlug)->firstOrFail();
                $updatedSlug = $moduleActual->slug;
                $moduleName = $moduleActual->modname;
            }
        } else {
            $moduleActual = Modules_new::where('slug', $slug)->firstOrFail();
            $updatedSlug = $moduleActual->slug;
            $moduleName = $moduleActual->modname;
        }

        $documents = [];
        foreach ($request->file('file') as $file) {
            $fileName = $file->getClientOriginalName();
            // $filePath = $file->store('documents');
            $Name = pathinfo($fileName, PATHINFO_FILENAME); //without.pdf
            $filePath = $file->storeAs('documents', $fileName, 'public');

            $existingDocument = documents::where('DocName', $fileName)->first();
            if ($existingDocument) {
                return response()->json([
                    'status code' => 400,
                    'message' => 'File already uploaded: ' . $fileName,
                ]);
            }

            if ($filePath) {
                try {
                    $document = new documents([
                        'DocName' => $fileName,
                        'mod_id' => $moduleActual->mod_id,
                        'mod_name' => $moduleName,
                        'slug' => $updatedSlug,
                        'links' => Storage::url($filePath),
                    ]);
                    $document->save();
                    $documents[] = $document;
                } catch (\Exception $e) {
                    // Log the error
                    Log::error('Error saving document: ' . $e->getMessage());
    
                    return response()->json([
                        'statusCode' => 500,
                        'message' => 'Failed to save document: ' . $fileName,
                        'error' => $e->getMessage(),
                    ]);
                }
            } else {
                // Log the error if filePath is false
                Log::error('Failed to store document: ' . $fileName);
    
                return response()->json([
                    'statusCode' => 500,
                    'message' => 'Failed to upload document: ' . $fileName,
                ]);
            }
        }
    
        return response()->json([
            'statusCode' => 200,
            'message' => 'Documents uploaded successfully and check',
            'documents' => $documents
        ]);
    }

    public function deleteDocument(Request $request, $docName)
    {

        $docNames = $docName;
        $document = documents::where('DocName', $docName)->first();
        if (!$document) {
            return response()->json([
                'status code' => 404,
                'message' => 'Document not found'
            ]);
        }

        $document->isActive = '0';
        // $document->links = '';
        $document->save();

        return response()->json([
            'status code' => 200,
            'message' => 'Document deleted successfully',
        ]);
    }

    //for active and de-active functionality of documents
    public function toggleDocument(Request $request)
    {
        $docName = $request->input('docName');
        $isActive = $request->input('isActive');

        $document = documents::where('DocName', $docName)->first();

        if (!$document) {
            return response()->json([
                'status code' => 404,
                'message' => 'Document not found'
            ]);
        }
        $document->isActive = $isActive;
        $document->save();
       
        return response()->json([
            'status code' => 200,
            'message' => 'Document ' . ($isActive == '1' ? 'activated' : 'deactivated') . ' successfully',
        ]);
        // return view('admin_fetch', compact('slug', 'DocArray', 'modules','isActive'));
    }
}
