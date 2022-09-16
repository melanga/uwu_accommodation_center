<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Hostal;
use App\Models\HostelRoom;
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

        $customHostels = [
            [
                "name" => "Silver Tips",
                "address" => "Uva Wellassa University",
                "type" => "male",
                "level" => "100",
                "room_count" => 39,
                "room_capacity" => 2,
            ],
            [
                "name" => "Corel Beauty",
                "address" => "Uva Wellassa University",
                "type" => "male",
                "level" => "100",
                "room_count" => 58,
                "room_capacity" => 2,
            ],
            [
                "name" => "Blue Sapphire",
                "address" => "Uva Wellassa University",
                "type" => "female",
                "level" => "100",
                "room_count" => 63,
                "room_capacity" => 2,
            ],
            [
                "name" => "Cattleya",
                "address" => "Uva Wellassa University",
                "type" => "female",
                "room_count" => 63,
                "level" => "100",
                "room_capacity" => 2,
            ],
            [
                "name" => "Knuckles A",
                "address" => "Uva Wellassa University",
                "type" => "male",
                "room_count" => 10,
                "level" => "300",
                "room_capacity" => 4,
            ],
            [
                "name" => "Knuckles B",
                "address" => "Uva Wellassa University",
                "type" => "male",
                "room_count" => 5,
                "level" => "300",
                "room_capacity" => 8,
            ],
            [
                "name" => "Ganga Addara",
                "address" => "Uva Wellassa University",
                "type" => "male",
                "room_count" => 9,
                "level" => "300",
                "room_capacity" => 2,
            ],
            [
                "name" => "Walawwa A",
                "address" => "Rambukpoth Rd.",
                "type" => "female",
                "room_count" => 10,
                "level" => "300",
                "room_capacity" => 6,
            ],
            [
                "name" => "Walawwa B",
                "address" => "Rambukpoth Rd.",
                "type" => "female",
                "room_count" => 11,
                "level" => "400",
                "room_capacity" => 6,
            ],
            [
                "name" => "Walawwa C",
                "address" => "Rambukpoth Rd.",
                "type" => "female",
                "room_count" => 5,
                "level" => "100",
                "room_capacity" => 4,
            ],
            [
                "name" => "Walawwa D",
                "address" => "Rambukpoth Rd.",
                "type" => "male",
                "room_count" => 7,
                "level" => "200",
                "room_capacity" => 4,
            ],
            [
                "name" => "Walawwa E",
                "address" => "Rambukpoth Rd.",
                "type" => "male",
                "room_count" => 4,
                "level" => "300",
                "room_capacity" => 4,
            ],
            [
                "name" => "Galaxy A",
                "address" => "Uva Wellassa University",
                "type" => "female",
                "room_count" => 7,
                "level" => "400",
                "room_capacity" => 4,
            ],
            [
                "name" => "Galaxy B",
                "address" => "Uva Wellassa University",
                "type" => "female",
                "room_count" => 8,
                "level" => "100",
                "room_capacity" => 5,
            ],
            [
                "name" => "Kadalla",
                "address" => "Rambukpoth Rd.",
                "type" => "female",
                "room_count" => 7,
                "level" => "200",
                "room_capacity" => 6,
            ],
            [
                "name" => "Jayagama C",
                "address" => "Uva Wellassa University",
                "type" => "male",
                "room_count" => 9,
                "level" => "300",
                "room_capacity" => 5,
            ],
            [
                "name" => "Rambukpotha B",
                "address" => "2nd mile post",
                "type" => "female",
                "room_count" => 58,
                "level" => "400",
                "room_capacity" => 10,
            ],
            [
                "name" => "Hindagoda E",
                "address" => "Hindagoda",
                "type" => "female",
                "room_count" => 58,
                "level" => "100",
                "room_capacity" => 8,
            ],
            [
                "name" => "Udawela A",
                "address" => "Malangamuwa Rd",
                "type" => "female",
                "room_count" => 13,
                "level" => "200",
                "room_capacity" => 5,
            ],
            [
                "name" => "Udawela B",
                "address" => "Malangamuwa Rd.",
                "type" => "female",
                "room_count" => 18,
                "level" => "300",
                "room_capacity" => 4,
            ],
            // ---------------------------------------------------------------
            //            [
            //                "name" => "Bandarapura",
            //                "address" => "Bandarapura",
            //                "type" => "male",
            //                "room_count" => 58,
            //                "level" => "400",
            //                "room_capacity" => 6,
            //            ],
            //            [
            //                "name" => "Nilwala B",
            //                "address" => "Uva Wellassa University",
            //                "type" => "male",
            //                "room_count" => 9,
            //                "level" => "100",
            //                "room_capacity" => 2,
            //            ],
            //            [
            //                "name" => "Hanthana 2",
            //                "address" => "Uva Wellassa University",
            //                "type" => "female",
            //                "room_count" => 17,
            //                "level" => "200",
            //                "room_capacity" => 4,
            //            ],
            //            [
            //                "name" => "Kalugalpitiya",
            //                "address" => "Uva Wellassa University",
            //                "type" => "male",
            //                "level" => "300",
            //                "room_count" => 11,
            //                "room_capacity" => 2,
            //            ],
            //            [
            //                "name" => "Samanala",
            //                "address" => "Uva Wellassa University",
            //                "type" => "male",
            //                "level" => "300",
            //                "room_count" => 24,
            //                "room_capacity" => 7,
            //            ],
            //            [
            //                "name" => "Rambukpotha A",
            //                "address" => "Uva Wellassa University",
            //                "type" => "male",
            //                "level" => "400",
            //                "room_count" => 10,
            //                "room_capacity" => 8,
            //            ],
            //            [
            //                "name" => "Rambukpoth B",
            //                "address" => "Uva Wellassa University",
            //                "type" => "male",
            //                "room_count" => 15,
            //                "level" => "100",
            //                "room_capacity" => 6,
            //            ],
            //            [
            //                "name" => "Rambukpotha C",
            //                "address" => "Uva Wellassa University",
            //                "type" => "male",
            //                "room_count" => 11,
            //                "level" => "200",
            //                "room_capacity" => 10,
            //            ],
            //            [
            //                "name" => "Samanala 2",
            //                "address" => "Uva Wellassa University",
            //                "type" => "female",
            //                "room_count" => 11,
            //                "level" => "300",
            //                "room_capacity" => 6,
            //            ],
            //            [
            //                "name" => "Samanala 3",
            //                "address" => "Uva Wellassa University",
            //                "type" => "female",
            //                "room_count" => 19,
            //                "level" => "400",
            //                "room_capacity" => 4,
            //            ],
            //            [
            //                "name" => "Samanala 4",
            //                "address" => "Uva Wellassa University",
            //                "type" => "female",
            //                "room_count" => 15,
            //                "level" => "100",
            //                "room_capacity" => 8,
            //            ],
            //            [
            //                "name" => "Samanala 5",
            //                "address" => "Uva Wellassa University",
            //                "type" => "female",
            //                "room_count" => 12,
            //                "level" => "300",
            //                "room_capacity" => 2,
            //            ],
            //            [
            //                "name" => "Hanthana 1",
            //                "address" => "Uva Wellassa University",
            //                "type" => "female",
            //                "room_count" => 16,
            //                "level" => "100",
            //                "room_capacity" => 4,
            //            ],
            //            [
            //                "name" => "Hanthana 3",
            //                "address" => "Uva Wellassa University",
            //                "type" => "female",
            //                "room_count" => 21,
            //                "level" => "100",
            //                "room_capacity" => 2,
            //            ],
            //            [
            //                "name" => "Galaxy C",
            //                "address" => "Uva Wellassa University",
            //                "type" => "female",
            //                "level" => "400",
            //                "room_count" => 21,
            //                "room_capacity" => 6,
            //            ],
            //            [
            //                "name" => "Udawela C",
            //                "address" => "Uva Wellassa University",
            //                "type" => "female",
            //                "room_count" => 26,
            //                "level" => "200",
            //                "room_capacity" => 8,
            //            ],
            //            [
            //                "name" => "Mahawela",
            //                "address" => "Uva Wellassa University",
            //                "type" => "female",
            //                "room_count" => 16,
            //                "level" => "100",
            //                "room_capacity" => 2,
            //            ],
            //            [
            //                "name" => "Hanwella",
            //                "address" => "Uva Wellassa University",
            //                "type" => "female",
            //                "level" => "200",
            //                "room_count" => 16,
            //                "room_capacity" => 2,
            //            ],
            //            [
            //                "name" => "Kaleni A&B",
            //                "address" => "Uva Wellassa University",
            //                "type" => "female",
            //                "room_count" => 21,
            //                "level" => "100",
            //                "room_capacity" => 4,
            //            ],
            //            [
            //                "name" => "Walawe",
            //                "address" => "3rd mile post",
            //                "type" => "male",
            //                "room_count" => 11,
            //                "level" => "400",
            //                "room_capacity" => 2,
            //            ],
        ];
        foreach ($customHostels as $eachHostel) {
            $createdHostel = Hostal::create([
                "name" => $eachHostel["name"],
                "address" => $eachHostel["address"],
                "type" => $eachHostel["type"],
                "level" => $eachHostel["level"],
                "room_count" => $eachHostel["room_count"],
                "room_capacity" => $eachHostel["room_capacity"],
            ]);
            // create rooms while capacity is full
            for ($i = 0; $i < $eachHostel["room_count"]; $i++) {
                for ($j = 0; $j < $eachHostel["room_capacity"]; $j++) {
                    HostelRoom::create([
                        "hostal_id" => $createdHostel->id,
                        "room_no" => $i + 1,
                        "bed_no" => $j + 1,
                    ]);
                }
            }
        }
    }
}
