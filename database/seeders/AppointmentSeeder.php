<?php

namespace Database\Seeders;

use App\Models\Appointment;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $appointments = [
            [
                'id' => 1,
                'entrepreneur_id'=>1,
                'appointment_type_id' => 1,
                'agent_id'=> 1,
                'communication_type' => 'basic',
                'token' => 'i',
                'start_time' => Carbon::now(),
                'end_time' => Carbon::now(),
                'total_time' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'entrepreneur_id'=> 2,
                'appointment_type_id' => 2,
                'agent_id'=> 2,
                'communication_type' => 'basic',
                'token' => 'i',
                'start_time' => Carbon::now(),
                'end_time' => Carbon::now(),
                'total_time' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 3,
                'entrepreneur_id'=> 3,
                'appointment_type_id' => 3,
                'agent_id'=> 3,
                'communication_type' => 'basic',
                'token' => 'i',
                'start_time' => Carbon::now(),
                'end_time' => Carbon::now(),
                'total_time' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ];
        foreach ($appointments as $appointment) {
            Appointment::query()->updateOrCreate(['id' => $appointment['id']], $appointment);

            }
        }
}
