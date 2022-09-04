<?php

namespace App\Http\Controllers\Warden;

use App\Http\Controllers\Controller;
use App\Models\Hostal;
use App\Models\HostalRoom;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index_hostal()
    {
        $user = Auth::user();
        if ($user->role == "warden") {
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
        $user = Auth::user();
        if ($user->role == "warden") {
            $hostalRooms = HostalRoom::latest()
                ->where("student_email", "not like", "unassigned")
                ->filter(request(["search"]))
                ->paginate(10);
            $hostals = Hostal::latest()
                ->filter(request(["search"]))
                ->paginate(10);
            return view("warden.student.dashboard", [
                "hostals" => $hostals,
                "hostalRooms" => $hostalRooms,
            ]);
        } else {
            abort(403);
        }
    }
}
