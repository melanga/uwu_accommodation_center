<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use App\Models\Hostal;
use App\Models\HostalRoom;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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

Route::get("/", function () {
    return view("welcome");
});

Route::get("/dashboard", [DashboardController::class, "index"])
    ->middleware(["auth"])
    ->name("dashboard");

Route::get("/dashboard/student", [StudentController::class, "index"])
    ->middleware(["auth"])
    ->name("student-dashboard");
require __DIR__ . "/auth.php";
