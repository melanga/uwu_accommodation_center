<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Imports\StudentsImport;
use App\Models\Hostel;
use App\Models\HostelRoom;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class DashboardController extends Controller
{
    public function index_hostel()
    {
        $user = Auth::user();
        if ($user->role == "admin") {
            $hostels = Hostel::latest()
                ->filter(request(["search"]))
                ->paginate(10);
            return view("admin.hostel.dashboard", ["hostels" => $hostels]);
        } else {
            abort(403);
        }
    }

    public function index_student()
    {
        $hostelRooms = HostelRoom::latest()
            ->where("student_email", "not like", "unassigned")
            ->filter(request(["search"]))
            ->paginate(10);
        return view("admin.student.dashboard", [
            "hostelRooms" => $hostelRooms,
        ]);
    }

    //    public function index_addStudent()
    //    {
    //        $students = Student::latest()->paginate(10);
    //        return view("admin.addStudent.dashboard", compact("students"));
    //    }

    public function importStudents(Request $request)
    {
        Excel::import(new StudentsImport(), $request->file("student_file"));
        return back();
    }

    public function deleteStudents()
    {
        Student::truncate();
        return back();
    }

    public function index_assignHostels()
    {
        $importedStudents = DB::table("students")->paginate(10);
        return view("admin.assignHostels.dashboard", [
            "students" => $importedStudents,
        ]);
    }

    public function index_addHostel()
    {
        return view("admin.addHostel.dashboard");
    }

    public function store_hostel(Request $request)
    {
        // return "success";
        $request->validate([
            "type" => "required",
            "no_room" => "required",
            "room_capacity" => "required",
            "address" => "required",
            "level" => "required",
        ]);

        $hostel = Hostel::create([
            "name" => $request->hostel_name,
            "room_count" => $request->no_room,
            "room_capacity" => $request->room_capacity,
            "address" => $request->address,
            "type" => $request->type,
            "level" => $request->level,
        ]);

        if ($hostel) {
            for ($i = 1; $i <= $request->no_room; $i++) {
                for ($j = 1; $j <= $request->room_capacity; $j++) {
                    HostelRoom::create([
                        "hostel_id" => $hostel->id,
                        "room_no" => $i,
                        "bed_no" => $j,
                        "student_email" => "unassigned",
                    ]);
                }
            }
            return back()->with("success", "Hostel details successfully added");
        } else {
            return back()->with("fail", "Something went wrong");
        }
    }
}
