<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HostalRoom;
use App\Models\Student;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AssignHostelsController extends Controller
{
    public static function store()
    {
        $importedStudents = DB::table("students")
            ->select("email", "year", "gender")
            ->get();
        // create array of numbers 1 to length of imported students
        $numbers = range(1, count($importedStudents));
        // shuffle the array
        shuffle($numbers);

        for ($i = 0; $i < $importedStudents->count(); $i++) {
            $year = $importedStudents[$i]->year;
            $gender = strtolower($importedStudents[$i]->gender);
            // check if email is already assigned to a hostel
            $isAssigned = HostalRoom::where(
                "student_email",
                $importedStudents[$i]->email
            )->exists();
            // if not assigned
            if (!$isAssigned) {
                $firstEmptyHostelRoom = HostalRoom::whereHas(
                    "hostal",
                    function ($query) use ($year, $gender) {
                        $query
                            ->where("type", "like", $gender)
                            ->where("level", "like", $year);
                    }
                )
                    ->where("student_email", "like", "unassigned")
                    ->first();
                // assign hostel room to student
                try {
                    $firstEmptyHostelRoom->update([
                        "student_email" => $importedStudents[$i]->email,
                    ]);
                } catch (\Exception $e) {
                    return back()->with("fail", "Something went wrong");
                }
            }
        }
        return back()->with("success", "Hostels assigned successfully");
    }

    public function destroy()
    {
        HostalRoom::where("student_email", "not like", "unassigned")->update([
            "student_email" => "unassigned",
        ]);
        return back()->with("success", "Hostels unassigned successfully");
    }
}
