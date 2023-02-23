<?php

namespace Database\Seeders;

use App\Models\AgentAgreement;
use App\Models\Media;
use App\Models\Subscription;
use App\Models\SubscriptionItem;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubscriptionItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subscriptionitems = [
            [
                'id' => 1,
                'subscription_id' => 1,
                'description' => 'hello friends',
                'price' => 10,
                'sort_order' => 11,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'subscription_id' => 2,
                'description' => 'hello friends',
                'price' => 10,
                'sort_order' => 11,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 3,
                'subscription_id' => 3,
                'description' => 'hello friends',
                'price' => 10,
                'sort_order' => 11,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ];
        foreach ($subscriptionitems as $subscriptionitem) {
           SubscriptionItem::query()->updateOrCreate(['id' => $subscriptionitem['id']], $subscriptionitem);
        }
    }
}

