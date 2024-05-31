<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// })->name('password.reset');


Route::get('/fortis', function () {
    return view('fortis');
});
// user
Route::get('/show-forgot-Password', [UserController::class, 'showforgotPassword'])->name('showforget');
Route::post('/forgot-password', [UserController::class, 'forgotPassword'])->name('forgot.password');
Route::get('/reset-password/{token}', [UserController::class, 'resetPassword'])->name('password.reset');
Route::post('/reset-password-change', [UserController::class, 'resetPasswordchange'])->name('password.post');

//static
Route::get('/adminHome', [ModuleController::class, 'dashboard'])->name('home');
//investors service and nominations page
Route::get('/investor_services_nomination/{slug}', [ModuleController::class, 'serviceNom'])->name('homew');
Route::get('/investor-services-nomination-admin/{slug}', [ModuleController::class, 'serviceNomAdmin'])->name('investor_admin'); //adminPage
//board of directors page
Route::get('/board/{slug}', [ModuleController::class, 'boardmem'])->name('staticw');
Route::get('/board-admin/{slug}', [ModuleController::class, 'boardmemAdmin'])->name('Board.admin');

//static main
Route::get('/main', [ModuleController::class, 'index'])->name('modules.index');
//trail blade
Route::get('/edit', [ModuleController::class, 'edit'])->name('mod.edit');
//Main home dynamic
Route::get('/', [ModuleController::class, 'adminSetup'])->name('workable');
//append modules
Route::get('/adminInvestors', [ModuleController::class, 'adminSetup2'])->name('two');
//staic modules
Route::get('/investors', [ModuleController::class, 'investors'])->name('InvestorsRelations'); 
///working modules fetch with subcategories;
Route::get('/investor-relations/investorcatdetails/{slug}/{subcategory?}', [ModuleController::class, 'fetchModule'])->name('fetchModule');

Route::post('/getAllModules', [ModuleController::class, 'getAllModules'])->name('getAllModules');
//login form page
Route::get('/admin', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/admin', [UserController::class, 'login']);
Route::post('/logout',[UserController::class,'logout'])->name('logout');

//admin modification
Route::get('/admin-utility', [ModuleController::class, 'change'])->name('modify'); 
Route::get('/module/show', [AdminController::class, 'show'])->name('show.module');
// Route::get('/upload/document', [AdminController::class, 'showUploadDocumentForm'])->name('show.upload.document.form');
// Route::get('/get-subcategories/{modname}', [AdminController::class, 'getSubcategories']);
Route::get('/subcategories/show', [AdminController::class, 'showsubcategories'])->name('show.subcategories');
Route::get('/delete/document', [AdminController::class, 'deleteDoc'])->name('delete.doc');
Route::get('/admin-documents/delete-documents/{slug}/{subcategory?}', [AdminController::class, 'fetchModuleDel'])->name('fetchModuledel'); //alt req
Route::get('/admin-investors-relations/edit-investors-details/{slug}/{subcategory?}', [AdminController::class, 'adminfetchModule'])->name('fetch.admin');

Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [UserController::class, 'register'])->name('registered');

Route::post('/addModule', [ModuleController::class, 'addModule'])->name('add.module');
Route::post('/delete/module', [ModuleController::class, 'deleteModule'])->name('delete.module');
Route::post('/re-activate/module', [ModuleController::class, 'reactivateModule'])->name('reactivate.module');
Route::post('/addSubcategory', [ModuleController::class, 'addSubcategory'])->name('add.subcategory');
Route::post('/deactivate-subcategory', [ModuleController::class, 'deactivateSubcategory'])->name('deactivate.subcategory');
Route::post('/reactivate-subcategory', [ModuleController::class, 'reactivateSubcategory'])->name('reactivate.subcategory');
// Route to handle document upload
Route::post('/file/upload/document/{slug}/{subcategory?}', [DocumentController::class, 'uploadDocument'])->name('upload.document');
Route::post('/delete-document/{docName}', [DocumentController::class,'deleteDocument'])->name('delete.document');
//active - deactive of documents
Route::post('/toggle-document', [DocumentController::class, 'toggleDocument']);