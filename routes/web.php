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
Auth::routes();

Route::get('/login/admin', [
    'uses'=>'Auth\LoginController@showAdminLoginForm',
    'as'=>'admin.login'
]);
Route::get('/login/doctor',[
    'uses'=>'Auth\LoginController@showDoctorLoginForm',
    'as'=>'doctor.login'
]);
Route::get('/register/admin', [
    'uses'=>'Auth\RegisterController@showAdminRegisterForm',
    'as'=>'register.admin'
]);
Route::get('/register/doctor', [
    'uses'=>'Auth\RegisterController@showDoctorRegisterForm',
    'as'=>'register.doctor'
]);

Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/doctor', 'Auth\LoginController@doctorLogin');

Route::post('/register/admin', [
    'uses'=>'Auth\RegisterController@createAdmin',
    'as'=>'register.admin'
]);
Route::post('/register/doctor', [
    'uses'=>'Auth\RegisterController@createDoctor',
    'as'=>'register.doctor'
]);
Route::get('/admin/home',[
    'uses'=>'PsychologistController@index',
    'as'  =>'admin.home'
]);

Route::get('/add-profile',[
    'uses'=>'adminProfileController@index',
    'as'  =>'add-profile'
]);
Route::post('/update-profile',[
    'uses'=>'adminProfileController@updateProfile',
    'as'  =>'update-profile'
]);
Route::get('/view-profile',[
    'uses'=>'adminProfileController@viewProfile',
    'as'  =>'view-profile'
]);
Route::get('/doctor/list',[
    'uses'=>'PsychologistController@doctorList',
    'as'  =>'list-doctor'
]);

Route::get('/blog/list',[
    'uses'=>'PsychologistController@blogList',
    'as'  =>'list-blog'
]);

Route::get('/doctor/request',[
    'uses'=>'PsychologistController@requests',
    'as'  =>'request-doctor'
]);
Route::get('/blog/request',[
    'uses'=>'PsychologistController@requestsBlog',
    'as'  =>'request-blog'
]);
Route::get('/doctor/update/{id}',[
    'uses'=>'PsychologistController@approveDoctor',
    'as'  =>'approve-doctor'
]);
Route::get('/blog/update/{id}',[
    'uses'=>'PsychologistController@approveBlog',
    'as'  =>'approve-blog'
]);

Route::get('/doctor',[
    'uses'=>'DoctorController@index',
    'as'  =>'doctor-home'
]);

Route::get('/doctor/education/create',[
    'uses'=>'DoctorEducationController@create',
    'as'  =>'new-education'
]);
Route::get('/doctor/education',[
    'uses'=>'DoctorEducationController@index',
    'as'  =>'education'
]);
Route::post('/doctor/education/create',[
    'uses'=>'DoctorEducationController@store',
    'as'  =>'education.store'
]);
Route::get('/doctor/education/{id}/edit',[
    'uses'=>'DoctorEducationController@edit',
    'as'  =>'edit-education'
]);
Route::put('/doctor/education/{id}/edit',[
    'uses'=>'DoctorEducationController@update',
    'as'  =>'update-education'
]);
Route::delete('/doctor/education/destroy/{id}',[
    'uses'=>'DoctorEducationController@destroy',
    'as'  =>'destroy-education'
]);

Route::resource('doctorExperience','DoctorExperienceController');
Route::resource('doctorSchedule','DoctorScheduleController');
Route::resource('blogInformation','BlogInformationController');
Route::resource('prescription','PrescriptionController');



Route::get('doctor/profile','DoctorController@profile')->name('doctor.profile');
Route::get('doctor/edit','DoctorController@edit')->name('doctor.edit');
Route::put('doctor/edit','DoctorController@update')->name('doctor.update');

Route::get('/',[
    'uses'=>'HomeController@index',
    'as'  =>'/'
]);

Route::get('/success',[
    'uses'=>'HomeController@success',
    'as'  =>'success'
]);

Route::post('new/appointment','AppointmentController@newAppointment')->name('new.appointment');

//Route::get('/doctor',[
//    'uses'=>'DoctorController@index',
//    'as'=>'/doctor'
//]);

Route::get('/blog','BlogController@blogView')->name('blog');
Route::get('/therapy','TherapyController@therapyView')->name('therapy');
Route::get('/tutorial','TutorialController@tutorialView')->name('tutorial');
Route::get('/ourDoctor','OurDoctorController@ourDoctorView')->name('ourDoctor');
Route::get('/prescription_view/{id}','PrescriptionController@view')->name('prescription.view');



