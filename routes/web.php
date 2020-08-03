<?php

use Illuminate\Support\Facades\Route;

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
// Route::get('/welcome', function () {
//    return view('welcome');
// });

Route::get('/admin', function () {
   return view('admin.dashboard');
});
Route::get('/admin/calender', function () {
   return view('admin.calender');
});
Route::get('/admin/mail/inbox', function () {
   return view('admin.mail.inbox');
});
Route::get('/admin/mail/compose', function () {
   return view('admin.mail.compose');
});
Route::get('/admin/mail/read', function () {
   return view('admin.mail.read');
});
Route::get('/admin/profile', function () {
   return view('admin.profile');
});
Route::get('/admin/auth/login', function () {
   return view('admin.auth.login');
});
Route::get('/admin/auth/register', function () {
   return view('admin.auth.register');
});
Route::get('/admin/auth/recover-password', function () {
   return view('admin.auth.recover-password');
});
Route::get('/admin/auth/forgot-password', function () {
   return view('admin.auth.forgot-password');
});
Route::get('/admin/lockscreen', function () {
   return view('admin.lockscreen');
});
Route::get('/admin/contact', function () {
   return view('admin.contact');
});

//AdminForm
Route::get('/admin/post','AdminFormController@adminPost');
Route::get('/admin/form/create','AdminFormController@adminCreate');
Route::post('/admins','AdminFormController@adminStore')->name('adminStore');
Route::get('/admin/form/edit_delete','AdminFormController@adminEditDelete');
Route::get('/admin/form/edit_post/{admin}','AdminFormController@adminEditPost');
Route::patch('/admins/{admin}','AdminFormController@adminUpdatePost')->name('adminUpdate');
Route::delete('/admins/{admin}','AdminFormController@adminDeletePost')->name('adminDelete');

//AdminGallery. The store method is in the api
Route::get('/admin/gallery', 'AdminGalleryController@adminGallery');
Route::delete('/images/{gallery}', 'AdminGalleryController@adminGalleryDelete');

//Pages
Route::get('/', 'PagesController@index')->name('index');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/blogs', 'PagesController@blog');
Route::get('/collection', 'PagesController@collection')->name('collection');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::get('/services', 'PagesController@services')->name('services');

//Blogs
Route::resource('blogs', 'BlogsController');

//Contact
Route::post('contacts', 'ContactController@store')->name('contactus');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
