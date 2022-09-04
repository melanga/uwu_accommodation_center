<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HostalRoom extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function setStudent($email)
    {
        $this->attributes['student_email'] = $email;
        $this->save();
    }

    public function hostal()
    {
        return $this->belongsTo(Hostal::class, "hostal_id");
    }

    public function student()
    {
        return $this->belongsTo(User::class, "student_id");
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
                });
        }
    }
}
