<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Imports\StudentsImport;
use App\Models\Hostal;
use App\Models\HostalRoom;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class DashboardController extends Controller
{
    public function index_hostal()
    {
        $user = Auth::user();
        if ($user->role == "admin") {
            $hostals = Hostal::latest()
                ->filter(request(["search"]))
                ->paginate(10);
            return view("warden.hostal.dashboard", ["hostals" => $hostals]);
        } else {
            abort(403);
        }
    }

    public function index_student()
    {
        $hostalRooms = HostalRoom::latest()
            ->filter(request(["search"]))
            ->paginate(10);
        $hostals = Hostal::latest()
            ->filter(request(["search"]))
            ->paginate(10);
        return view("warden.student.dashboard", [
            "hostals" => $hostals,
            "hostalRooms" => $hostalRooms,
        ]);
    }

    public function index_addStudent()
    {
        $students = Student::all();
        return view("admin.addStudent.dashboard", compact("students"));
    }

    public function importStudents(Request $request)
    {
        Excel::import(new StudentsImport(), $request->file("student_file"));
        return back();
    }
}
