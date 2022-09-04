<?php

namespace App\Imports;

use App\Models\Hostal;
use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class StudentsImport implements ToModel, WithHeadingRow, WithValidation
{
    public function randomhostel($gender, $year)
    {
        if (strtolower($gender) == "male") {
            $hostelName = [];

            foreach (
                Hostal::all()
                    ->where("level", "=", $year)
                    ->where("type", "=", "male")
                as $hostel
            ) {
                array_push($hostelName, $hostel->name);
            }
            $count = Hostal::getHostelCount($gender, strval($year));
            $bRandVal = rand(0, $count - 1);
            return $hostelName[$bRandVal];
        } elseif (strtolower($gender) == "female") {
            $girlsHostelName = [];
            foreach (
                Hostal::all()
                    ->where("level", "=", $year)
                    ->where("type", "=", "female")
                as $hostel
            ) {
                array_push($girlsHostelName, $hostel->name);
            }
            $count = Hostal::getHostelCount($gender, strval($year));
            $gRandVal = rand(0, $count - 1);
            return $girlsHostelName[$gRandVal];
        }
    }

    public function room_no($hostel)
    {
        // Hostels::where('hostel',$hostel);
        $totalRoom = Hostal::getRoomCapacity($hostel);
        return rand(1, $totalRoom);
    }

    public function bed_no($hostel)
    {
        // Hostels::where('hostel',$hostel);
        $totalBed = Hostal::getBedCapacity($hostel);
        return rand(1, $totalBed);
    }

    public function model(array $row)
    {
        $hostel = StudentsImport::randomhostel($row["gender"], $row["year"]);
        $room_no = StudentsImport::room_no($hostel);
        $bed_no = StudentsImport::bed_no($hostel);
        // generate email from student reg no
        $email =
            strtolower(
                str_replace("UWU", "", str_replace("/", "", $row["reg_no"]))
            ) . "@std.uwu.ac.lk";
        return new Student([
            "reg_no" => $row["reg_no"],
            "first_name" => $row["first_name"],
            "last_name" => $row["last_name"],
            "year" => $row["year"],
            "email" => $email,
            "hostel" => $hostel,
            "room_no" => $room_no,
            "bed_no" => $bed_no,
            "gender" => $row["gender"],
        ]);
    }

    public function rules(): array
    {
        return [
            "reg_no" => "required|unique:students,reg_no",
            "first_name" => "required",
            "last_name" => "required",
            "year" => "required",
            "email" => "required|unique:students,reg_no",
            "hostel" => "required",
            "gender" => "required",
        ];
    }
}
