<?php

use Illuminate\Support\Facades\Route;

//Front Controller/Home Controller
Route::get('/','FrontController@index')->name('index');


//About Controller
Route::get('/drProfile/{id}','AboutController@drProfile')->name('drProfile');
Route::get('/team','AboutController@team')->name('team');
Route::get('/gallery','AboutController@gallery')->name('gallery');

//Gallery Controller
Route::get('/createGallery','GalleryController@createGallery')->name('createGallery');
Route::post('/insertGallery','GalleryController@insertGallery')->name('insertGallery');
Route::get('/deletegallaries/{id}','GalleryController@deletegallaries')->name('deletegallaries');


//Service Controller
Route::get('/allServices','ServiceController@allServices')->name('allServices');
Route::get('serviceDetails/{id}','ServiceController@serviceDetails')->name('serviceDetails');


Route::post('/service','ServiceController@store')->name('service.store');
Route::get('/service','ServiceController@index')->name('service.index');
Route::get('service/{id}','ServiceController@distroy')->name('service.distroy');


//Patient Controller
Route::get('/doctorSchedules','PatientController@doctorSchedules')->name('doctorSchedules');
Route::get('/schedules','PatientController@schedules')->name('schedules');


//Blog Controller
Route::get('/blogs','BlogController@blogs')->name('blogs');
Route::get('blogDetails/{id}','BlogController@blogDetails')->name('blogDetails');
Route::get('/blog','BlogController@index')->name('blog.index');
Route::post('/blog/store','BlogController@store')->name('blog.store');
Route::get('blog/{id}','BlogController@distroy')->name('blog.distroy');


//Contact Controller
Route::get('/contact','ContactController@contact')->name('contact');


//Appointment Controller

Route::post('/insertAppointment','AppointmentController@insertAppointment')->name('insertAppointment');
Route::get('/appointmentList','AppointmentController@appointmentList')->name('appointmentList');
Route::get('/deleteAppointment/{id}','AppointmentController@deleteAppointment')->name('deleteAppointment');
Route::get('/appointmentStatus/{id}','AppointmentController@appointmentStatus')->name('appointmentStatus');

//Comment Controller
Route::post('/insertComment','CommentController@insertComment')->name('insertComment');
Route::get('/viewComment','CommentController@viewComment')->name('viewComment');
Route::get('/commentStatus/{id}','CommentController@commentStatus')->name('commentStatus');
Route::get('deletecomment/{id}','CommentController@deletecomment')->name('deletecomment');



// Admin-Dashboard
Route::get('/dashboard','DashboardController@index')->name('dashboard');
Route::get('/slider','DashboardController@slider')->name('slider');
Route::resource('/slider','sliderController');
Route::resource('/doctorinfo','DoctorInfoController');
