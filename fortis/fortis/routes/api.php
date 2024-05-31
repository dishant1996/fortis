<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\DocumentController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//user
// Route::post('/register', [UserController::class, 'register']);
// Route::post('/login', [UserController::class, 'logins']);
// Route::post('/forgotPassword', [UserController::class, 'forgotPassword']);
// Route::post('/resetPassword', [UserController::class, 'resetPassword']);

//modules
Route::get('/upload/document', [DocumentController::class, 'showUploadDocumentForm']);
Route::get('getSubcategoriesz', [DocumentController::class, 'getSubcategoriesz']);
// Route::post('/addModule', [ModuleController::class, 'addModule']);;
Route::post('/addSubcategory', [ModuleController::class, 'addSubcategoriesz']);
Route::post('/editModule', [ModuleController::class, 'editModule']);
// Route::post('/getAllModules', [ModuleController::class, 'getAllModules']);
// Route::post('/fetchModule', [ModuleController::class, 'fetchModules']);
// Route::post('/fetchModule', [ModuleController::class, 'fetchModules']);
Route::post('/deleteModule', [ModuleController::class, 'deleteModule']);
// Route::post('/uploadDocument', [DocumentController::class, 'uploadDocument']);
// Route::middleware('auth:sanctum')->post('/uploadDocument', [DocumentController::class, 'uploadDocument']);
// Route::middleware('auth:sanctum')->post('/deleteDocument', [DocumentController::class, 'deleteDocument']);
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();

Route::middleware('auth:sanctum')->group(function () {

    // Route::post('/uploadDocument', [DocumentController::class, 'uploadDocument']);
    // Route::post('/deleteDocument', [DocumentController::class, 'deleteDocument']);
    });
