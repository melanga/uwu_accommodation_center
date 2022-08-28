<?php

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

Route::group(["middleware" => ["auth", "verified"]], function () {
    // student's routes
    Route::group(
        [
            "prefix" => "student",
            "middleware" => "is_student",
            "as" => "student.",
        ],
        function () {
            Route::get("dashboard", [
                \App\Http\Controllers\Student\DashboardController::class,
                "index",
            ])->name("dashboard");
        }
    );

    // warden's routes
    Route::group(
        [
            "prefix" => "warden",
            "middleware" => "is_warden",
            "as" => "warden.",
        ],
        function () {
            Route::get("dashboard", [
                \App\Http\Controllers\Warden\DashboardController::class,
                "index_hostal",
            ])->name("dashboard");
            Route::get("dashboard/student", [
                \App\Http\Controllers\Warden\DashboardController::class,
                "index_student",
            ])->name("dashboard.student");
        }
    );

    // admin's routes
    Route::group(
        [
            "prefix" => "admin",
            "middleware" => "is_admin",
            "as" => "admin.",
        ],
        function () {
            Route::get("dashboard", [
                \App\Http\Controllers\Admin\DashboardController::class,
                "index",
            ])->name("dashboard");
        }
    );
});

// redirect dashboard to dashboard of user role
Route::get("/dashboard", function () {
    if (Auth::user()->role == "student") {
        return to_route("student.dashboard");
    } elseif (Auth::user()->role == "warden") {
        return to_route("warden.dashboard");
    } elseif (Auth::user()->role == "admin") {
        return to_route("admin.dashboard");
    } else {
        abort(403);
    }
})
    ->middleware(["auth"])
    ->name("dashboard");

require __DIR__ . "/auth.php";
