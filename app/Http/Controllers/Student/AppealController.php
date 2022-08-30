<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Appeal;
use App\Models\Hostal;
use Illuminate\Http\Request;

class AppealController extends Controller
{
    public function index()
    {
        return view("student.appeal");
    }

    public function store(Request $request)
    {
        $request->validate([
            'message' => ['required', 'string', 'max:255'],
            'hostal' => ['required', 'string', 'max:255'],
        ]);
        // get hostal from hostal name
        $hostal = Hostal::where('name', $request->hostal)->first();
        // create appeal
        $appeal = Appeal::create([
            'message' => $request->message,
            'hostal_id' => $hostal->id,
            'student_id' => auth()->user()->id,
        ]);
        // redirect to dashboard
        return redirect()->route('student.dashboard');
    }
}
