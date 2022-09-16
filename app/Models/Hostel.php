<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Hostel extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function scopeFilter($query, $filters)
    {
        if ($filters["search"] ?? false) {
            $query
                ->where("name", "ilike", "%" . $filters["search"] . "%")
                ->orWhere("address", "ilike", "%" . $filters["search"] . "%")
                ->orWhere("type", "ilike", $filters["search"]);
        }
    }

    public function getHostelOccupantCount()
    {
        return DB::table("hostel_rooms")
            ->where("hostel_id", $this->attributes["id"])
            ->where("student_email", "not like", "unassigned")
            ->count();
    }

    // relationships
    public function hostelRooms()
    {
        return $this->hasMany(HostelRoom::class, "hostel_id");
    }

    public function appeals()
    {
        return $this->hasMany(Appeal::class, "hostel_id");
    }
}
