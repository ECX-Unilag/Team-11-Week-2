<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});

Auth::routes();

// Has authorisation present already
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'HomeController@adminindex')->middleware('is_admin')->name('admin');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


// User Authorisation
Route::middleware(['is_admin'])->group(function() {
	Route::resource('course', 'courseController');
	Route::resource('department', 'DepartmentController');
	Route::resource('sessions', 'SessionController');
	Route::resource('admitted', 'AdmittedController');
	Route::resource('pending', 'PendingController');
	Route::resource('rejected', 'RejectedController');
	Route::resource('faculty', 'FacultyController');
	Route::resource('applicants', 'ApplicantsController');
	Route::get('applicantionbyyear', ['as' => 'applicantionbyyear', 'uses' => 'ApplicantsController@search_applicant_by_year']);
	Route::get('applicant/{applicant_id}', 'ApplicantController@indexes');
});

// User Authorisation
Route::middleware(['auth'])->group(function() {
	Route::resource('/create-profile', 'ApplicantController');
	Route::resource('/view-profile', 'ProfileAuthController');
	Route::get('profile/{applicant_id}', 'ProfileController@index');
});
