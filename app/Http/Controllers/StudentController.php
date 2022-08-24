<?php

namespace App\Http\Controllers;

use App\Models\HostalRoom;
use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $student = User::class::find(5);
        $hostalRoom = HostalRoom::class::where('student_id', $student->id)->get()[0];
        return view('student.studentDashboard', ['hostalRoom' => $hostalRoom, 'student' => $student]);
    }
}
