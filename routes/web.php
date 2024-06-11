<?php

use App\Http\Controllers\AllController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\UserController;
use App\Models\Date;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('index');
})->name('welcome');


Route::middleware('auth')->group(function () {

    Route::get('/indexUser', function () {
        if( Auth::user()->state == 0 ) {
            
            return view('user.Instructions');
        }else {

            $state =  Auth::user()->state ;
            $datess  =  Date::orderBy('date', 'asc')->get() ;
            $dates =$datess->where('place_id', Auth::User()->state);
            $users = User::all() ;

            return view('doctor.donation_dates' , compact( 'dates' , 'users'));
        }
    })->name('indexUser');



});


Route::middleware('auth')->group(function () {

    Route::post('/AddDate' , [AllController::class ,'AddDate'])->name('AddDate');
    Route::post('/deleteDate/{id}' , [AllController::class ,'deleteDate'])->name('deleteDate');

    Route::post('/addWarehouse/{id}' , [AllController::class ,'addWarehouse'])->name('addWarehouse');
    Route::post('/deleteWarehouse' , [AllController::class ,'deleteWarehouse'])->name('deleteWarehouse');

    Route::get('/deleteDate2/{id}' , [AllController::class ,'deleteDate2'])->name('deleteDate2');

    Route::get('/changepw' , [UserController::class ,'changepw'])->name('changepw');
    Route::post('/change_pass',  [AllController::class, 'change_pass'])->name('change_pass');

    Route::post('/newmessage/{id}',  [AllController::class, 'newmessage'])->name('newmessage');

    Route::post('/add_place',  [AllController::class, 'add_place'])->name('add_place');

    Route::get('/deleteUser/{id}',  [AllController::class, 'deleteUser'])->name('user_delete');

    
    
        // for doctor
    Route::get('/donation_dates',       [DoctorController::class, 'donation_dates'])->name('donation_dates');
    Route::get('/date_detailes/{id}',       [DoctorController::class, 'date_detailes'])->name('date_detailes');

    Route::get('/add_blood_request',  [DoctorController::class, 'add_blood_request'])->name('add_blood_request');
    Route::get('/add_blood/{id}',  [DoctorController::class, 'add_blood'])->name('add_blood');


    Route::get('/doctor_messages',  [DoctorController::class, 'messages'])->name('messages');
    Route::get('/doctor_message/{id}',  [DoctorController::class, 'message'])->name('message');

    Route::get('/doctorProfile',  [DoctorController::class, 'doctorProfile'])->name('doctorProfile');

    Route::get('/doctor_report',  [DoctorController::class, 'doctor_report'])->name('doctor_report');

    Route::get('/add_place',  [DoctorController::class, 'add_place'])->name('add_place');


    // for user
    Route::get('/userProfile',       [UserController::class, 'userProfile'])->name('userProfile');
    Route::get('/donation_date',       [UserController::class, 'donation_date'])->name('donation_date');
    Route::get('/Instructions',       [UserController::class, 'Instructions'])->name('Instructions');

    Route::get('/my_date',       [UserController::class, 'my_date'])->name('my_date');
    Route::get('/place_detailes2/{id}',       [UserController::class, 'place_detailes'])->name('place_detailes2');

    Route::get('/user_messages',  [UserController::class, 'messages'])->name('user_messages');
    Route::get('/user_message/{id}',  [UserController::class, 'message'])->name('user_message');


        


    Route::get('/404',  [AllController::class, 'error'])->name('error');
});



require __DIR__.'/auth.php';
