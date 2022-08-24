<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Hostal;
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
        Hostal::create([
            'name' => 'Silver Tips',
            'address' => 'Uva Wellassa University',
            'type' => 'male',
            'room_count' => 39,
            'room_capacity' => 2
        ]);
    }
}
