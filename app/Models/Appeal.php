<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appeal extends Model
{
    use HasFactory;

    protected $fillable = ["message", "approved", "student_id", "hostel_id"];

    public function student()
    {
        return $this->belongsTo(User::class, "student_id");
    }

    public function hostel()
    {
        return $this->belongsTo(Hostel::class, "hostel_id");
    }
}
