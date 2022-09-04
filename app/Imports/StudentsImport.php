<?php

namespace App\Imports;

use App\Models\Hostal;
use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class StudentsImport implements ToModel, WithHeadingRow, WithValidation
{
    public function model(array $row)
    {
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
            "gender" => "required",
        ];
    }
}
