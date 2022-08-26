<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\HostalRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if ($user->role == 'student') {
            $hostalRoom = HostalRoom::class::where('student_id', $user->id)->get()[0];
            return view('student.dashboard', ['hostalRoom' => $hostalRoom, 'student' => $user]);
        } else {
            abort(403);
        }
    }
}
