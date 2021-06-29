<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\NurseController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\Product_tableController;
use App\Http\Controllers\InvoiceController;
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

Route::get('/', [UsersController::class,'login' ]) ->name('ingresar');

Route::get('menu', [AdministratorController::class,'menu' ]) ->name('menu');

Route::get('menunurse', [NurseController::class,'menunurse' ]) ->name('menunurse');

Route::get('register/create', [UsersController::class,'register' ])->name('registro');

Route::get('forgotpassword', [UsersController::class,'forgot' ]) ->name('forgot');

Route::get('saveregister', [UsersController::class,'registrar' ]) ->name('registrar');

Route::get('alreadyacount', [UsersController::class,'already' ]) ->name('already');

Route::get('resetaccount', [UsersController::class,'reset' ]) ->name('reset');

Route::get('showpatient', [UsersController::class,'showpatient' ]) ->name('showpatient');

Route::get('loginNurse', [NurseController::class,'loginNurse' ]) ->name('loginNurse');

Route::get('reservation', [ReservationController::class,'reservation' ]) ->name('reservation');

Route::get('catalogo', [ServiceController::class,'catalogo' ]) ->name('catalogo');

Route::get('reservarClient', [ReservationController::class,'reservarClient' ]) ->name('reservarClient');

Route::get('volverLogin', [UsersController::class,'volverLogin' ]) ->name('volverLogin');

Route::get('patientList', [PatientController::class,'patientList' ]) ->name('patientList');

Route::get('nurseList', [NurseController::class,'nurseList' ]) ->name('nurseList');

Route::get('inicioPersonal', [UsersController::class,'inicioPersonal' ]) ->name('inicioPersonal');

Route::post('saveReserv', [ReservationController::class,'saveReserv' ]) ->name('saveReserv');

Route::get('showReserv', [ReservationController::class,'showReserv' ]) ->name('showReserv');

Route::get('saveinsumo', [Product_tableController::class,'saveinsumo' ]) ->name('saveinsumo');

Route::post('saveproduct', [Product_tableController::class,'saveproduct' ]) ->name('saveproduct');

Route::post('savenurse', [NurseController::class,'savenurse' ]) ->name('savenurse');

Route::get('seenurse', [NurseController::class,'seenurse' ]) ->name('seenurse');

Route::get('seeproduct', [Product_tableController::class,'seeproduct' ]) ->name('seeproduct');

Route::post('deletereserv/{id}', [ReservationController::class,'deletereserv' ]) ->name('deletereserv');

Route::get('factura', [InvoiceController::class,'factura' ]) ->name('factura');

