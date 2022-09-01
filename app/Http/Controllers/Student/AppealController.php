<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Appeal;
use App\Models\Hostal;
use Illuminate\Http\Request;

class AppealController extends Controller
{
    public function index(Request $request)
    {

        $hostals = Hostal::all();

        return view("student.appeal", [
            "hostals" => $hostals,

        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            "message" => ["required", "string", "max:255"],
            "hostal" => ["required", "integer"],
        ]);
        // create appeal
        $appeal = Appeal::create([
            "message" => $request->message,
            "hostal_id" => $request->hostal,
            "student_id" => auth()->user()->id,
        ]);
        // redirect to dashboard
        return redirect()->route("student.dashboard");
    }
}
