<?php

namespace App\Http\Controllers;

use App\Models\Hostal;
use App\Models\HostalRoom;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if ($user->role == 'student') {
            $hostalRoom = HostalRoom::class::where('student_id', $user->id)->get()[0];
            return view('dashboard', ['hostalRoom' => $hostalRoom, 'student' => $user]);
        } else {
            $hostals = Hostal::all();
            return view('dashboard', ['hostals' => $hostals]);
        }
    }
}
