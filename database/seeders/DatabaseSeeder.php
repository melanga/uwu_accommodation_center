<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Hostal;
use App\Models\HostalRoom;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        $hostal = Hostal::create([
            'name' => 'Silver Tips',
            'address' => 'Uva Wellassa University',
            'type' => 'male',
            'room_count' => 39,
            'room_capacity' => 2
        ]);
        $user = User::all()[4];
        HostalRoom::create([
            'hostal_id' => $hostal->id,
            'room_no' => 30,
            'bed_no' => 2,
            'student_id' => $user->id
        ]);
    }
}
