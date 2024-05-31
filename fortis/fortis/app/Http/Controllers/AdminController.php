<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\documents;
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

class AdminController extends Controller
{   
    //alt req modules
    public function show()
    {
        $modules = Modules_new::select('modname', 'slug')->where('isActive', '1')->get();

        foreach ($modules as $module) {
            $subcategories = Subcategories::where('mod_name', $module['slug'])->where('isActive', '1')->select('sub_name', 'DocName')
                ->get()->toArray();
            $module->subcategories = $subcategories;
        }

        return view('addModule', compact('modules'));
    }
    public function showUploadDocumentForm()
    {

        $modules = Modules_new::select('modname', 'slug')->where('isActive', '1')->get();

        foreach ($modules as $module) {
            $subcategories = Subcategories::select('sub_name')->where('isActive', '1')->get();
        }

        return view('addDocument', compact('modules', 'subcategories'));
    }

    // public function getSubcategories($slug)
    // {
    //     $modules = Modules_new::select('modname', 'slug')->where('isActive', '1')->get();
    //     $subcategories = Subcategories::where('mod_name', $slug)->get(['sub_name']);
    //     // return response()->json(['subcategories' => $subcategories]);
    //     return view('addDocument', compact('modules', 'subcategories'));
    // }
    //alt req subcategories
    public function showsubcategories()
    {

        $modules = Modules_new::select('modname', 'slug')->where('isActive', '1')->get();

        foreach ($modules as $module) {
            $subcategories = Subcategories::select('sub_name')->where('isActive', '1')->get();
        }

        return view('addSubcategory', compact('modules', 'subcategories'));
    }
    //alt req delete
    public function deleteDoc()
    {
        $modules = Modules_new::select('modname', 'slug')->where('isActive', '1')->get();

        foreach ($modules as $module) {
            $subcategories = Subcategories::where('mod_name', $module['slug'])->where('isActive', '1')->select('sub_name', 'DocName')
                ->get()->toArray();
            $module->subcategories = $subcategories;
        }

        return view('delete_document', compact('modules', 'subcategories'));
    }
    //alt req delete
    public function fetchModuleDel($slug, $subcategory = null)
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

        return view('delete_document', compact('slug', 'DocArray', 'modules'));
    }
    //admin fetch 

    public function adminfetchModule($slug, $subcategory = null)
    {

        $modules = Modules_new::select('modname', 'slug','isActive')->get();

        foreach ($modules as $module) {
            $subcategories = Subcategories::where('mod_name', $module['slug'])->select('sub_name', 'DocName','isActive')->get()->toArray();
            $module->subcategories = $subcategories;
        }
        if (!$slug) {
            abort(404, 'Module not found');
        }
        if ($subcategory) {
            $documents = documents::where('slug', $subcategory)->get();
        } else {
            $documents = documents::where('slug', $slug)->get();
        }
        //document block creation  
        $DocArray = [];

        foreach ($documents as $document) {
            $DocArray[$document->DocName] = [
                'link' => $document->links,
                'isActive' => $document->isActive,
            ];
        }

        return view('admin_fetch', compact('slug', 'DocArray', 'modules'));
    }
}
