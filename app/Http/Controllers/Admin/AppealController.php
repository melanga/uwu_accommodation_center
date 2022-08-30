<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appeal;
use App\Models\HostalRoom;
use Illuminate\Http\Request;

class AppealController extends Controller
{
    public function index()
    {
        $appeals = Appeal::where("approved", false)->get();
        return view("admin.appeal", ["appeals" => $appeals]);
    }

    public function approve(Request $request)
    {
        $appeal = Appeal::find($request->id);
        // take first free unassigned room
        $hostalRoom = HostalRoom::where("hostal_id", $appeal->hostal_id)
            ->where("student_id", null)
            ->first();
        if ($hostalRoom) {
            $hostalRoom->student_id = $appeal->student_id;
            $hostalRoom->save();
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
}
