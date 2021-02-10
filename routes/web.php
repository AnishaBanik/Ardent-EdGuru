<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\WebsiteController;

Route::get('/', [WebsiteController::class, "home"]);

Route::get('/teacher_register', [WebsiteController::class, "teacher_register"]);

Route::get('/student_register', [WebsiteController::class, "student_register"]);

Route::get('/terms', [WebsiteController::class, "terms"]);

Route::get('/privacy_policy', [WebsiteController::class, "privacy_policy"]);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
