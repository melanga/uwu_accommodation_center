<?php

namespace App\Http\Controllers\Warden;

use App\Http\Controllers\Controller;
use App\Models\Hostel;
use App\Models\HostelRoom;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index_hostel()
    {
        $user = Auth::user();
        if ($user->role == "warden") {
            $hostels = Hostel::latest()
                ->filter(request(["search"]))
                ->paginate(10);
            return view("warden.hostel.dashboard", ["hostels" => $hostels]);
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
        $hostels = Hostel::latest()
            ->filter(request(["search"]))
            ->paginate(10);
        return view("warden.student.dashboard", [
            "hostels" => $hostels,
            "hostelRooms" => $hostelRooms,
        ]);
    }
}
