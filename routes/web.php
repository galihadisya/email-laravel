<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;
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

Route::get('/', [EmailController::class, 'index']);

Route::get('/mail-data', [EmailController::class, 'dataEmail']);

Route::get('/send-mail', [EmailController::class, 'send']);

Route::get('/send-product-mail/{id}', [EmailController::class, 'sendProductEmail']);
