<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DocChanelController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\SMSController;
use App\Http\Controllers\CatergoryController;


// --------------------------------------------------------------------------------------------------
// landing page
Route::get('/',[HomePageController::class,'viewHomePage']);
// landing page appointment view
Route::get('/viewAppoinment',[HomePageController::class,'viewAppoinment']);

// landing page userPrescription view
Route::get('/viewUserPrescription',[HomePageController::class,'viewUserPrescription']);
Route::post('/addPrescription',[HomePageController::class,'addPrescription']);

// landung page docto view
Route::get('/viewDoctor',[HomePageController::class,'viewDoctor']);

// landingPage doctorSearch
Route::get('/searchDoc',[HomePageController::class,'searchDoc']);

// landingPge Contact
Route::get('/contact',[HomePageController::class,'contact']);

// landingPage catergory
Route::get('/viewCatergoryHome',[HomePageController::class,'viewCatergoryHome']);

// landingPage fetch product by catergory
Route::get('/viewCatergory{slug}',[HomePageController::class,'viewCatergory']);


// --------------------------------------------------------------------------------------------------
// new user Register
Route::post('newUserReg',[UserController::class,'newUserReg']);
// delete user
Route::get('/deleteUser{id}',[UserController::class,'deleteUser']);
Route::get('/deleteStaff{id}',[UserController::class,'deleteStaff']);
Route::get('/deleteDoctor{id}',[UserController::class,'deleteDoctor']);
Route::get('/deleteDealer{id}',[UserController::class,'deleteDealer']);


// --------------------------------------------------------------------------------------------------
// auth route for all users
Route::group(['middleware'=>['auth','verified']],function(){
    Route::get('/dashboard','App\Http\Controllers\DashboardController@dashboard')->name('dashboard');
});

require __DIR__.'/auth.php';


// --------------------------------------------------------------------------------------------------
// route for users layout
Route::get('/admin',[UserController::class,'viewAdminLayout']);

// --------------------------------------------------------------------------------------------------
// route for users dashboard
Route::get('/adminDashboard',[UserController::class,'viewAdminDashboard']);

// --------------------------------------------------------------------------------------------------
// route for admin

// user view
Route::get('/viewAdmin',[UserController::class,'viewAdmin']);
Route::get('/viewAdminCustomer',[UserController::class,'viewAdminCustomer']);
Route::get('/viewAdminStaff',[UserController::class,'viewAdminStaff']);
Route::get('/viewAdminDealers',[UserController::class,'viewAdminDealers']);
Route::get('/viewAdminDoctors',[UserController::class,'viewAdminDoctors']);

// Product
Route::get('/productViewByAdmin',[ProductController::class,'productViewByAdmin']);
Route::post('/addNewProduct',[ProductController::class,'addNewProduct']);
Route::get('/editProduct{id}',[ProductController::class,'editProduct']);
Route::put('/updateProduct{id}',[ProductController::class,'updateProduct']);

// catergory
Route::get('/viewCatergoryByAdmin',[CatergoryController::class,'viewCatergoryByAdmin']);
Route::get('/viewCatergoryByAdmin',[CatergoryController::class,'viewCatergoryByAdmin']);
Route::post('/addNewCatergoryByAdmin',[CatergoryController::class,'addNewCatergoryByAdmin']);
Route::get('/editCatergory{id}',[CatergoryController::class,'editCatergory']);
Route::put('/updateCatergoryByAdmin{id}',[CatergoryController::class,'updateCatergoryByAdmin']);

Route::get('test',[CatergoryController::class,'test']);


// stock
Route::get('/viewStock',[ProductController::class,'viewStock']);

// E-Chaenlling
Route::get('/docChanellViewByAdmin',[DocChanelController::class,'viewDocByAdmin']);
Route::post('/createNewChanel',[DocChanelController::class,'createNewChanel']);

// Appointment
Route::get('/viewAppointment',[DocChanelController::class,'viewAppointment']);
Route::post('/makeAppointment',[DocChanelController::class,'makeAppointment']);

// POS
Route::get('/viewPOS',[ProductController::class,'viewPOS']);

// CART
Route::get('/viewCart',[ProductController::class,'viewCart']);

// Prescription
Route::get('/viewPrescription',[UserController::class,'viewPrescription']);
Route::get('/preViewPrescription{id}',[UserController::class,'preViewPrescription']);




// doctorDetails
Route::get('/viewDocDetailForm{id}',[UserController::class,'viewDocDetailForm']);
Route::post('/addDoctorDetail',[UserController::class,'addDoctorDetail']);
Route::get('/viewDoctorDetailsTable',[UserController::class,'viewDoctorDetailsTable']);
Route::get('/editDoctorDetail{id}',[UserController::class,'editDoctorDetail']);
Route::put('/updateDoctorDetails/{id}',[UserController::class,'updateDoctorDetails']);
Route::get('/deleteDoctorDetail{id}',[UserController::class,'deleteDoctorDetail']);

// --------------------------------------------------------------------------------------------------
// send SMS
Route::get('sendSMS',[SMSController::class,'send']);


// --------------------------------------------------------------------------------------------------
// route for doctor
// view Apointment
Route::get('/viewAppointmentByDoc',[DocChanelController::class,'viewAppointmentByDoc']);