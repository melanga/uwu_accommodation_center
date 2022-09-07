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
})->name("welcome");

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
            Route::get("appeal", [
                \App\Http\Controllers\Student\AppealController::class,
                "index",
            ])->name("appeal");
            Route::post("appeal", [
                \App\Http\Controllers\Student\AppealController::class,
                "store",
            ])->name("appeal.store");
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
            // hostel Dashboard view
            Route::get("dashboard", [
                \App\Http\Controllers\Admin\DashboardController::class,
                "index_hostal",
            ])->name("dashboard");
            // student Dashboard view
            Route::get("dashboard/student", [
                \App\Http\Controllers\Admin\DashboardController::class,
                "index_student",
            ])->name("dashboard.student");
            // importing students from the csv
            Route::post("dashboard/importStudents", [
                \App\Http\Controllers\Admin\DashboardController::class,
                "importStudents",
            ])->name("dashboard.import");
            Route::get("dashboard/addHostal", [
                \App\Http\Controllers\Admin\DashboardController::class,
                "index_addHostal",
            ])->name("dashboard.addHostal");
            Route::post("dashboard/addHostal", [
                \App\Http\Controllers\Admin\DashboardController::class,
                "store_hostal",
            ])->name("dashboard.addHostal.store");
            // return assign Hostels view
            Route::get("dashboard/assignHostal", [
                \App\Http\Controllers\Admin\DashboardController::class,
                "index_assignHostels",
            ])->name("dashboard.assignHostels");
            // assign imported students to hostels
            Route::post("dashboard/assignHostal/assign", [
                \App\Http\Controllers\Admin\AssignHostelsController::class,
                "store",
            ])->name("dashboard.assignHostels.assign");
            // delete imported students
            Route::post("dashboard/assignHostal", [
                \App\Http\Controllers\Admin\DashboardController::class,
                "deleteStudents",
            ])->name("dashboard.assignHostels.deleteStudents");
            // clear assigned hostels
            Route::post("dashboard/assignHostal/clear", [
                \App\Http\Controllers\Admin\AssignHostelsController::class,
                "destroy",
            ])->name("dashboard.assignHostels.clear");
            // appeal routes
            Route::get("dashboard/appeal", [
                \App\Http\Controllers\Admin\AppealController::class,
                "index",
            ])->name("dashboard.appeal");
            Route::post("dashboard/appeal", [
                \App\Http\Controllers\Admin\AppealController::class,
                "approve",
            ])->name("dashboard.appeal");
            Route::post("dashboard/appeal/reject", [
                \App\Http\Controllers\Admin\AppealController::class,
                "reject",
            ])->name("dashboard.appeal.reject");
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
