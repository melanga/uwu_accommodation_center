<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Hostal;
use App\Models\Student;

class DashboardController extends Controller
{
    public function index()
    {
        $student = Student::where(
            "email",
            "ilike",
            "%" . auth()->user()->email . "%"
        )->first();
        if ($student) {
            $hostal = Hostal::where(
                "name",
                "like",
                "%" . $student->hostel . "%"
            )->first();
        } else {
            $hostal = null;
        }
        // $hostalRoom = HostalRoom::class::where('student_id', auth()->user()->id)->get()[0];
        return view("student.dashboard", [
            "hostalRoom" => $student,
            "hostal" => $hostal,
        ]);
    }
}
