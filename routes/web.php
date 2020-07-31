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

Auth::routes();
Route::get('/applicant/application-status', 'ApplicantsController@application_status')->name('application-status')->middleware('auth');
Route::get('/applicant/apply-position', 'ApplicantsController@apply_position')->name('apply-position')->middleware('auth');
Route::post('/applicant/apply-position/process', 'ApplicantsController@process_application')->name('process-application')->middleware('auth');
Route::get('/applicant/upload-cv', 'ApplicantsController@upload_cv')->name('upload-cv')->middleware('auth');
Route::post('/applicant/upload-cv/process', 'ApplicantsController@process_upload_cv')->name('process-upload-cv')->middleware('auth');
Route::post('/applicant/new-message/process', 'ApplicantsController@process_new_message')->name('process-new-message')->middleware('auth');
Route::post('/applicant/reply-message/process/{id}', 'ApplicantsController@process_reply_message')->name('process-reply-message')->middleware('auth');
Route::get('/applicant/contact-us', 'ApplicantsController@contact_us')->name('contact-us')->middleware('auth');
Route::get('/applicant/edit_information', 'ApplicantsController@edit_information')->name('edit-information')->middleware('auth');
Route::post('/applicant/edit_passport', 'ApplicantsController@edit_passport')->name('edit-passport')->middleware('auth');
Route::post('/applicant/update_profile', 'ApplicantsController@update_profile')->name('update-profile')->middleware('auth');

// employers routes
Route::get('/employer/account-info', 'EmployerController@account_info')->name('account-info')->middleware('auth');
Route::get('/employer/request-staff', 'EmployerController@request_staff')->name('request-staff')->middleware('auth');
Route::post('/employer/request-staff-process', 'EmployerController@request_staff_process')->name('request-staff-process')->middleware('auth');
Route::get('/employer/payment-info', 'EmployerController@payment_info')->name('employer-payment-info')->middleware('auth');
Route::get('/employer/contact-us', 'EmployerController@contact_us')->name('employer-contact-us')->middleware('auth');
Route::post('/employer/process-new-message/{id}', 'EmployerController@process_new_message')->name('process-new-message')->middleware('auth');
Route::get('/employer/edit-information', 'EmployerController@edit_info')->name('edit-info')->middleware('auth');

Route::post('/employer/edit-information/process', 'EmployerController@update_profile')->name('update_profile')->middleware('auth');

// admin starts now

Route::get('/admin/account-info', 'AdminController@account_info')->name('account-info')->middleware('auth');
Route::get('/admin/registered-companies', 'AdminController@registered_companies')->name('registered_companies')->middleware('auth');
Route::get('/admin/registered-applicants', 'AdminController@registered_applicants')->name('registered_applicants')->middleware('auth');
Route::get('/admin/all_users', 'AdminController@all_users')->name('all-users')->middleware('auth');
Route::get('/admin/payment-info', 'AdminController@payment_info')->name('payment-info')->middleware('auth');
Route::get('/admin/contact-us', 'AdminController@contact_us')->name('contact-us')->middleware('auth');
Route::get('/admin/edit-information', 'AdminController@edit_info')->name('edit_info')->middleware('auth');
Route::get('/admin/vacancies', 'AdminController@vacancies')->name('vacancies')->middleware('auth');
Route::get('/admin/incident-reports', 'AdminController@incident_reports')->name('admin-incident-reports')->middleware('auth');
Route::get('/admin/establishment-reviews', 'AdminController@establishment_reviews')->name('admin-establishment-reviews')->middleware('auth');

// landing and other pages goes here
Route::get('/about-us', 'LandingController@about_us')->name('about-us');
Route::get('/services', 'LandingController@services')->name('services');
Route::get('/contact-us', 'LandingController@contact_us')->name('contact-us');

Route::get('/hayche-review', 'LandingController@hayche_review')->name('hayche-review');
Route::get('/hayche-review/incident-report', 'LandingController@hayche_review_create')->name('hayche-review-create')->middleware('auth');
Route::post('/hayche-review/incident-report/process', 'ReviewsController@hayche_review_create_process')->name('hayche-review-create-process');
Route::get('/hayche-review/establishment', 'LandingController@hayche_review_establishment')->name('hayche-review-establishment');
Route::post('/hayche-review/establishment/process', 'ReviewsController@hayche_review_establishment_process')->name('hayche-review-establishment-process');
Route::get('/hotel-operations', 'LandingController@hotel_operations')->name('hotel-operations');
Route::get('/human-resources', 'LandingController@human_resources')->name('human-resources');
Route::get('/sales-marketing', 'LandingController@sales')->name('sales');
Route::get('/quality-control', 'LandingController@quality_control')->name('quality-control');
Route::get('/', 'LandingController@index')->name('index');

Route::get('/company/register', 'Auth\CompanyController@index')->name('company-register');
Route::post('/company/register/process', 'Auth\CompanyController@create')->name('company-register-process');
Route::get('/dashboard', 'HomeController@index')->name('dashboard')->middleware('auth');
