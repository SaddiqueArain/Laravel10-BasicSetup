<?php

namespace Database\Seeders;

use App\Models\EntrepreneurDocument;
use App\Models\Invoice;
use App\Models\Media;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $invoices = [
            [
                'id' => 1,
                'payee_id' => 1,
                'recipient_id'=> 1,
                'subscription_id'=> 1,
                'appointment_id'=> 1,
                'type' => 'CR Payment',
                'status' => 'cash',
                'tax' => 10,
                'total' => 20,
                'billing_address' => 'sheikhupura',
                'description' => 'payment successfull',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'payee_id' => 2,
                'recipient_id'=>2,
                'subscription_id'=>2,
                'appointment_id'=>2,
                'type' => 'CR Payment',
                'status' => 'cash',
                'tax' => 10,
                'total' => 20,
                'billing_address' => 'sheikhupura',
                'description' => 'payment successfull',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 3,
                'payee_id' => 3,
                'recipient_id'=>3,
                'subscription_id'=>3,
                'appointment_id'=>3,
                'type' => 'CR Payment',
                'status' => 'cash',
                'tax' => 10,
                'total' => 20,
                'billing_address' => 'sheikhupura',
                'description' => 'payment successfull',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ];
        foreach ($invoices as  $invoice) {
          Invoice::query()->updateOrCreate(['id' => $invoice['id']], $invoice);

            }
        }
}
