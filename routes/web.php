<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
// use App\Mail\TestEmail;
use App\Http\Controllers\MailController;


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

Route::get('/', [MainController::class, 'index']);
Route::post('/', [MainController::class, 'store']);

Route::get('sendMail/{email}', [MailController::class, 'sendMail']);