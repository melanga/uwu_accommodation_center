<?php

namespace App\Http\Controllers\Warden;

use App\Http\Controllers\Controller;
use App\Models\Hostal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if ($user->role == "warden") {
            $hostals = Hostal::all();
            return view("dashboard", ["hostals" => $hostals]);
        } else {
            abort(403);
        }
    }
}
