<?php

namespace Database\Seeders;

use App\Models\AppointmentType;
use App\Models\Subscription;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subscriptions = [
            [
                'id' => 1,
                'payee_id' => 1,
                'recipient_id'=> 1,
                'subscription_term' => 2,
                'is_public' => 3,
                'token' => 'yes',
                'payment_on_signup' => 5,
                'tax' => 50,
                'total' => 50,
                'description' => 'working',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'payee_id' => 2,
                'recipient_id'=> 2,
                'subscription_term' => 2,
                'is_public' => 3,
                'token' => 'yes',
                'payment_on_signup' => 5,
                'tax' => 50,
                'total' => 50,
                'description' => 'working',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 3,
                'payee_id' => 3,
                'recipient_id'=>3,
                'subscription_term' => 2,
                'is_public' => 3,
                'token' => 'yes',
                'payment_on_signup' => 5,
                'tax' => 50,
                'total' => 50,
                'description' => 'working',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ];
        foreach ($subscriptions as  $subscription) {
         Subscription::query()->updateOrCreate(['id' => $subscription['id']], $subscription);
        }
    }
}
