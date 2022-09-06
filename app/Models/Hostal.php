<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Hostal extends Model
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

    public function getHostalOccupantCount()
    {
        return DB::table("hostal_rooms")
            ->where("hostal_id", $this->attributes["id"])
            ->where("student_email", "not like", "unassigned")
            ->count();
    }

    // relationships
    public function hostalRooms()
    {
        return $this->hasMany(HostalRoom::class, "hostal_id");
    }

    public function appeals()
    {
        return $this->hasMany(Appeal::class, "hostal_id");
    }
}
