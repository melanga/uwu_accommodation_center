<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HostalRoom extends Model
{
    use HasFactory;

    public function hostal()
    {
        return $this->belongsTo(Hostal::class, 'hostal_id');
    }

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }
}
