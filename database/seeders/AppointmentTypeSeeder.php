<?php

namespace Database\Seeders;

use App\Models\Appointment;
use App\Models\AppointmentType;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AppointmentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $appointmenttypes = [
            [
                'id' => 1,
                'agent_id' => 1,
                'communication_types' => 'basic',
                'name' => 'usman',
                'image_id' => 1,
                'description' => 'i made it',
                'booking_message' => 'i booked it',
                'length' => 12,
                'price' => 10,
                'sort_order' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'agent_id' => 2,
                'communication_types' => 'basic',
                'name' => 'jutt',
                'image_id' => 2,
                'description' => 'i made it',
                'booking_message' => 'i booked it',
                'length' => 12,
                'price' => 10,
                'sort_order' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 3,
                'agent_id' => 3,
                'communication_types' => 'basic',
                'name' => 'usman jutt',
                'image_id' => 3,
                'description' => 'i made it',
                'booking_message' => 'i booked it',
                'length' => 12,
                'price' => 10,
                'sort_order' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ];
        foreach ($appointmenttypes as $appointmenttype) {
             AppointmentType::query()->updateOrCreate(['id' => $appointmenttype['id']], $appointmenttype);

            }
        }
}
