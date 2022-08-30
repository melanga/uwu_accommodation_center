<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hostal extends Model
{
    use HasFactory;

    public function scopeFilter($query, $filters)
    {
        if ($filters["search"] ?? false) {
            $query
                ->where("name", "ilike", "%" . $filters["search"] . "%")
                ->orWhere("address", "ilike", "%" . $filters["search"] . "%")
                ->orWhere("type", "ilike", $filters["search"]);
        }
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
