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

    public static function getHostelName()
    {
        $records = DB::table("hostals")->select("name");
        return $records;
    }

    public static function getRoomCapacity($hostel)
    {
        $records = DB::table("hostals")
            ->select("room_count")
            ->where("name", "=", $hostel)
            ->value("room_count");
        return $records;
    }

    public static function getBedCapacity($hostel)
    {
        $records = DB::table("hostals")
            ->select("room_capacity")
            ->where("name", "=", $hostel)
            ->value("room_capacity");
        return $records;
    }

    public static function getHostelCount($gender, $year)
    {
        $records = DB::table("hostals")
            ->select("name")
            ->where("type", "=", strtolower($gender))
            ->where("level", "=", $year)
            ->get()
            ->count();
        return $records;
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
