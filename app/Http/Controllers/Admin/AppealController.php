<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appeal;
use App\Models\HostelRoom;
use Illuminate\Http\Request;

class AppealController extends Controller
{
    public function index()
    {
        $appeals = Appeal::orderBy("approved", "asc")->paginate(10);
        return view("admin.appeals.dashboard", ["appeals" => $appeals]);
    }

    public function approve(Request $request)
    {
        $appeal = Appeal::find($request->id);
        // take first free unassigned room
        $hostelRoom = HostelRoom::where("hostel_id", $appeal->hostel_id)
            ->where("student_email", "unassigned")
            ->orderBy("room_no", "asc")
            ->first();
        // take current existing room
        $currentHostelRoom = HostelRoom::where(
            "student_email",
            $appeal->student->email
        )->first();

        if ($hostelRoom) {
            // unassigned current room
            $currentHostelRoom->student_email = "unassigned";
            $currentHostelRoom->save();
            // add student to the room
            $hostelRoom->student_email = $appeal->student->email;
            $hostelRoom->save();
            // set appeal to approved
            $appeal->approved = true;
            $appeal->save();
            return redirect()
                ->back()
                ->with("success", "Appeal approved");
        } else {
            return redirect()
                ->back()
                ->with("error", "No free rooms");
        }
    }

    public function reject(Request $request)
    {
        $appeal = Appeal::find($request->id);
        $appeal->delete();
        return redirect()
            ->back()
            ->with("success", "Appeal deleted");
    }
}
