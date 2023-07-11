<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookingController;
use App\Http\Controllers\TreatmentController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\AuthController;


/*
|---------------------------s-----------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
});

*/

/* Room Booking Route */
Route::get('/', [BookingController::class, 'RoomBooking'])->name('RoomBooking');

/* TreatmentController Route */
Route::get('/treatment-form', [TreatmentController::class, 'TreatmentForm'])->name('TreatmentForm');

/* Auth Registration Controller Route */
Route::get('/registration-form', [RegistrationController::class, 'RegistrationForm'])->name('RegistrationForm');

/* Auth Login Route */
Route::get('/login', [AuthController::class, 'LoginUser'])->name('LoginUser');