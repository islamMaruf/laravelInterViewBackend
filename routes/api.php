<?php

use App\Http\Controllers\InstitutionController;
use App\Http\Controllers\StudentAttributeController;
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('students', StudentController::class);
Route::resource('institutions', InstitutionController::class);
Route::resource('student-attributes', StudentAttributeController::class);
