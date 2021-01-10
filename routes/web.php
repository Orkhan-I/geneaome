<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
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
//    return view('front.homepage');
// });




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');




//admin
Route::get('/admin', 'App\Http\Controllers\adminController@dashboard')->name('admin')->middleware(['role:admin']);
Route::get('admin/test', 'App\Http\Controllers\adminController@test');
Route::get('logout', 'App\Http\Controllers\adminController@logout');

Route::get('admin/mail', 'App\Http\Controllers\adminController@messages')->name('messages');
Route::get('admin/show','App\Http\Controllers\adminController@showMessage')->name('showMessage');
Route::get('admin/mail/delete', 'App\Http\Controllers\adminController@deleteMessages')->name('deleteMessage');



//users
Route::get('admin/users', 'App\Http\Controllers\adminController@users')->name('users');
Route::get('admin/users/createUser', 'App\Http\Controllers\adminController@createUser')->name('admin.users.createUser')->middleware('role:admin');
Route::post('admin/users/createUser', 'App\Http\Controllers\adminController@createUserPost')->name('admin.users.createUserPost');
Route::get('admin/users/{id}', 'App\Http\Controllers\adminController@updateUsers')->name('updateUsers')->middleware('role:admin');
Route::post('admin/users/{id}', 'App\Http\Controllers\adminController@updateUsersPost')->name('updateUsersPost');
Route::get('admin/users/delete/{id}', 'App\Http\Controllers\adminController@deleteUsers')->name('deleteUsers')->middleware('role:admin');

//roles
Route::get('admin/roles', 'App\Http\Controllers\roleController@roles')->name('roles');
Route::get('admin/roles/create', 'App\Http\Controllers\roleController@createRoles')->name('createRoles')->middleware('role:admin');
Route::post('admin/roles/create', 'App\Http\Controllers\roleController@createRolesPost')->name('createRolesPost');
Route::get('admin/roles/delete/{id}', 'App\Http\Controllers\roleController@deleteRoles')->name('deleteRoles')->middleware('role:admin');
Route::get('admin/roles/userRoles/{id}', 'App\Http\Controllers\roleController@userRoles')->name('userRoles')->middleware('role:admin');
Route::post('admin/roles/userRoles/{id}', 'App\Http\Controllers\roleController@editRoles')->name('editRoles');
Route::get('admin/roles/remove', 'App\Http\Controllers\roleController@removeRoles')->name('removeRole');

//lang

//tags

Route::get('admin/tags', 'App\Http\Controllers\tagController@tags')->name('tags');
Route::get('admin/tagtest', 'App\Http\Controllers\tagController@tagtest')->name('tagtest');



Route::get('admin/createTags', 'App\Http\Controllers\tagController@index')->name('createTags');
Route::post('admin/createTags', 'App\Http\Controllers\tagController@tagPost')->name('tagPost');

Route::get('admin/tags/{id}', 'App\Http\Controllers\tagController@editTags')->name('editTags');
Route::post('admin/tags/{id}', 'App\Http\Controllers\tagController@editTagsPost')->name('editTagsPost');
Route::get('admin/tag/{id}', 'App\Http\Controllers\tagController@deleteTags')->name('deleteTags');


//lang

Route::get('admin/lang', 'App\Http\Controllers\langController@langs')->name('language');
Route::get('admin/createlang', 'App\Http\Controllers\langController@createLangs')->name('createLangs');
Route::post('admin/createlang', 'App\Http\Controllers\langController@createLangsPost')->name('createLangsPost');

Route::get('admin/lang/{id}', 'App\Http\Controllers\langController@editLangs')->name('editLangs');
Route::post('admin/lang/{id}', 'App\Http\Controllers\langController@editLangsPost')->name('editLangsPost');

Route::get('admin/lang/delete/{id}', 'App\Http\Controllers\langController@deleteLangs')->name('deleteLangs');

//categories


Route::get('admin/category', 'App\Http\Controllers\categoryController@categories')->name('categories');
Route::get('admin/category/Create','App\Http\Controllers\categoryController@createCategory')->name('createCategory');
Route::post('admin/category/create','App\Http\Controllers\categoryController@createCategoryPost')->name('createCategoryPost');
Route::get('admin/category/delete/{id}','App\Http\Controllers\categoryController@deleteCategory')->name('deleteCategory');

Route::get('admin/category/{id}', 'App\Http\Controllers\categoryController@editCategory')->name('editCategory');
Route::post('admin//category/{id}', 'App\Http\Controllers\categoryController@editCategoryPost')->name('editCategoryPost');

// article  

Route::get('admin/articles', 'App\Http\Controllers\articleController@index')->name('articles');
Route::get('admin/articles/create','App\Http\Controllers\articleController@createArticle')->name('createArticle');
Route::post('admin/articles/create','App\Http\Controllers\articleController@createArticlePost')->name('createArticlePost');




Route::get('admin/articles/{id}', 'App\Http\Controllers\articleController@editArticle')->name('editArticle');
Route::post('admin/articles/{id}', 'App\Http\Controllers\articleController@editArticlePost')->name('editArticlePost');
Route::get('admin/articles/delete/{id}','App\Http\Controllers\articleController@deleteArticle')->name('deleteArticle');



// Page

Route::get('admin/pages', 'App\Http\Controllers\pageController@pages')->name('pages');
Route::get('admin/pages/Create','App\Http\Controllers\pageController@createPage')->name('createPage');
Route::post('admin/pages/create','App\Http\Controllers\pageController@createPagePost')->name('createPagePost');

Route::get('admin/pages/{id}', 'App\Http\Controllers\pageController@editPage')->name('editPage');
Route::post('admin/pages/{id}', 'App\Http\Controllers\pageController@editPagePost')->name('editPagePost');
Route::get('admin/pages/delete/{id}','App\Http\Controllers\pageController@deletePage')->name('deletePage');

// slider

Route::get('admin/sliders','App\Http\Controllers\sliderController@slider')->name('slider');
Route::get('admin/slider/create','App\Http\Controllers\sliderController@createSlider')->name('createSlider');
Route::post('admin/slider/create','App\Http\Controllers\sliderController@createSliderPost')->name('createSliderPost');

Route::get('admin/slider/{id}', 'App\Http\Controllers\sliderController@editSlider')->name('editSlider');
Route::post('admin/slider/{id}', 'App\Http\Controllers\sliderController@editSliderPost')->name('editSliderPost');
Route::get('admin/slider/delete/{id}','App\Http\Controllers\sliderController@deleteSlider')->name('deleteSlider');
  

//auhtors

Route::get('admin/author','App\Http\Controllers\authController@authors')->name('author');
Route::get('admin/author/create','App\Http\Controllers\authController@createAuthor')->name('createAuthor');
Route::post('admin/author/create','App\Http\Controllers\authController@createAuthorPost')->name('createAuthorPost');

Route::get('admin/author/{id}', 'App\Http\Controllers\authController@editAuthor')->name('editAuthor');
Route::post('admin/author/{id}', 'App\Http\Controllers\authController@editAuthorPost')->name('editAuthorPost');
Route::get('admin/author/delete/{id}','App\Http\Controllers\authController@deleteAuthor')->name('deleteAuthor');
 
// translation files

Route::get('admin/translate/file', 'App\Http\Controllers\translatesController@index')->name('admin.translations');
Route::post('admin/translate/file', 'App\Http\Controllers\translatesController@update');
Route::post('admin/translate/create', 'App\Http\Controllers\translatesController@create_files')->name('admin.translate_create');




 //   FRONT 
Route::get('/','App\Http\Controllers\front\homepage@locale')->middleware(['auth','verified']);

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify');
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


Route::get('lang/{locale}', 'App\Http\Controllers\front\homepage@lang')->name('lang');
Route::prefix('{locale}')->name('front.')->group(function(){
    Route::get('/','App\Http\Controllers\front\homepage@show')->name('home')->middleware(['auth']);
    Route::get('/search','App\Http\Controllers\front\homepage@search')->name('search');
    Route::get('/contact', 'App\Http\Controllers\front\homepage@contact')->name('contact');
    Route::post('/contact', 'App\Http\Controllers\front\homepage@contactPost')->name('contactPost');
    Route::get('/about', 'App\Http\Controllers\front\homepage@about')->name('about');
    Route::get('/page', 'App\Http\Controllers\front\homepage@page')->name('page');
    Route::get('/style-guide', 'App\Http\Controllers\front\homepage@style')->name('style');
    Route::get('/like','App\Http\Controllers\front\homepage@like')->name('like');
    Route::get('/{category}','App\Http\Controllers\front\homepage@categoryPage')->name('category');
    Route::get('/{category}/{slug}','App\Http\Controllers\front\homepage@singlePage')->name('single')->middleware(['auth']);
    Route::post('/{category}/{slug}','App\Http\Controllers\front\homepage@comment')->name('comment')->middleware(['auth']);

});      

//Auth::routes(['verify' => true]);























/* admin*/  Route::get('admin/lang/{lang}', 'App\Http\Controllers\adminController@show')->name('admin.lang');
