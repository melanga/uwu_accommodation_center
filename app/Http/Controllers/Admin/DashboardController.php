<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Imports\StudentsImport;
use App\Models\Hostal;
use App\Models\HostalRoom;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
        $students = Student::latest()->paginate(10);
        return view("admin.addStudent.dashboard", compact("students"));
    }

    public function importStudents(Request $request)
    {
        Excel::import(new StudentsImport(), $request->file("student_file"));
        return back();
    }

    public function index_addHostal()
    {
        // $hostals = Hostal::latest()->paginate(10);
        return view("admin.addHostel.dashboard");
    }

    public function store_hostal(Request $request)
    {
        // return "success";
        $request->validate([
            "type" => "required",
            "no_room" => "required",
            "room_capacity" => "required",
            "address" => "required",
            "level" => "required",
        ]);

        $hostal = Hostal::create([
            "name" => $request->hostel_name,
            "room_count" => $request->no_room,
            "room_capacity" => $request->room_capacity,
            "address" => $request->address,
            "type" => $request->type,
            "level" => $request->level,
        ]);

        //        $query = DB::table("hostals")->insert([
        //            "name" => $request->input("hostel_name"),
        //            "room_count" => $request->input("no_room"),
        //            "room_capacity" => $request->input("room_capacity"),
        //            "address" => $request->input("address"),
        //            "type" => $request->input("type"),
        //            "level" => $request->input("level"),
        //        ]);

        if ($hostal) {
            return back()->with("success", "Hostel details succesfully added");
        } else {
            return back()->with("fail", "Something went wrong");
        }
    }
}
