<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\BookingController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Models\Ruangan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');
Route::middleware('only_guest')->group(function () {

    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'authenticating']);
    Route::get('register', [AuthController::class, 'register']);
    Route::post('register', [AuthController::class, 'registerproses']);
});
Route::middleware('auth')->group(function () {
    Route::get('logout', [AuthController::class, 'logout']);
    Route::get('dashboard', [DashboardController::class, 'index'])->middleware(['only_admin']);
    Route::get('profile', [UserController::class, 'profile'])->middleware('only_client');
    Route::get('room', [RoomController::class, 'index']);
    Route::get('user-add', [UserController::class, 'add']);
    Route::get('categories', [CategoryController::class, 'index']);
    Route::get('users', [UserController::class, 'index']);
    Route::get('form', [FormController::class, 'index']);
    Route::post('user-add', [UserController::class, 'store']);
    Route::get('ruangan', [RuanganController::class, 'index']);
    Route::get('booking', [BookingController::class, 'index']);
    Route::get('tambahruangan', [RuanganController::class, 'tambahruangan']);
    Route::post('insertruangan', [RuanganController::class, 'insertruangan']);
    Route::post('insertbooking', [BookingController::class, 'insertbooking']);
    Route::get('tambahbooking', [BookingController::class, 'tambahbooking']);
    Route::get('/user-edit/{id}', [UserController::class, 'edit']);

    Route::put('/user/{id}', [UserController::class, 'update']);
    Route::get('booking-edit/{id}', [BookingController::class, 'edit']);
    Route::put('/booking/{id}', [BookingController::class, 'update']);
    Route::get('ruangan-edit/{id}', [RuanganController::class, 'edit']);
    Route::put('/ruangan/{id}', [RuanganController::class, 'update']);
    Route::get('/hilang/{id}', [UserController::class, 'hilang']);
    Route::get('/hapus/{id}', [BookingController::class, 'hapus']);
    Route::get('/delete/{id}', [RuanganController::class, 'delete']);
    Route::post('captcha', [AuthController::class, 'captcha']);
});
