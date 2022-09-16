<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HostelRoom extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function hostel()
    {
        return $this->belongsTo(Hostel::class, "hostel_id");
    }

    public function student()
    {
        return $this->belongsTo(User::class, "student_email", "email");
    }

    public function getStudent()
    {
        return User::where(
            "email",
            $this->attributes["student_email"]
        )->first();
    }

    public function scopeFilter($query, $filters)
    {
        if ($filters["search"] ?? false) {
            $query
                ->whereHas("student", function ($query) use ($filters) {
                    $query->where(
                        "email",
                        "ilike",
                        "%" . $filters["search"] . "%"
                    );
                })
                ->orWhereHas("student", function ($query) use ($filters) {
                    $query->where(
                        "first_name",
                        "ilike",
                        "%" . $filters["search"] . "%"
                    );
                })
                ->orWhereHas("student", function ($query) use ($filters) {
                    $query->where(
                        "last_name",
                        "ilike",
                        "%" . $filters["search"] . "%"
                    );
                })
                ->orWhere(
                    "student_email",
                    "ilike",
                    "%" . $filters["search"] . "%"
                );
        }
    }
}
