<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;


Route::get('/guest_invitation/{id}', [userController::class, 'invitation']);
Route::get('/guest_registration', [userController::class, 'registration']);
Route::get('/dashboard-admin', [adminController::class, 'dashboard']);


// User
Route::post('/registrasi', [userController::class, 'registrasi']);
Route::post('/konfirmasi', [userController::class, 'konfirmasi']);


// Admin
Route::post('/add-guest', [adminController::class, 'addGuest']);
Route::post('/update-guest', [adminController::class, 'updateGuest']);
Route::post('/delete-guest', [adminController::class, 'deleteGuest']);
