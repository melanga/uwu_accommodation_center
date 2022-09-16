<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Hostel;
use App\Models\HostelRoom;
use App\Models\Student;

class DashboardController extends Controller
{
    public function index()
    {
        $assignedHostelRoom = HostelRoom::where(
            "student_email",
            auth()->user()->email
        )->first();
        $student = Student::where(
            "email",
            "ilike",
            "%" . auth()->user()->email . "%"
        )->first();
        if ($student) {
            $hostel = Hostel::where(
                "name",
                "like",
                "%" . $student->hostel . "%"
            )->first();
        } else {
            $hostel = null;
        }
        // $hostelRoom = HostelRoom::class::where('student_id', auth()->user()->id)->get()[0];
        return view("student.dashboard", [
            "hostelRoom" => $assignedHostelRoom,
            "hostel" => $hostel,
        ]);
    }
}
