<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Appeal;
use App\Models\Hostel;
use Illuminate\Http\Request;

class AppealController extends Controller
{
    public function index(Request $request)
    {
        if ($request->male_selected == "on" and !$request->female_selected) {
            $hostels = Hostel::where("type", "male")->get();
            $male_selected = true;
            $female_selected = false;
        } elseif (
            $request->female_selected == "on" and
            !$request->male_selected
        ) {
            $hostels = Hostel::where("type", "female")->get();
            $male_selected = false;
            $female_selected = true;
        } else {
            $hostels = Hostel::all();
            $male_selected = false;
            $female_selected = false;
        }

        return view("student.appeal", [
            "hostels" => $hostels,
            "male_selected" => $male_selected,
            "female_selected" => $female_selected,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            "message" => ["required", "string", "max:255"],
            "hostel" => ["required", "integer"],
        ]);
        // create appeal
        $appeal = Appeal::create([
            "message" => $request->message,
            "hostel_id" => $request->hostel,
            "student_id" => auth()->user()->id,
        ]);
        // redirect to dashboard
        return redirect()->route("student.dashboard");
    }
}
