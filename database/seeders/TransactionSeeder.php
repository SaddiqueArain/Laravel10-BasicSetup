<?php

namespace Database\Seeders;

use App\Models\InvoiceItem;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transactions = [
            [
                'id' => 1,
                'invoice_id' => 1,
                'total' => 99,
                'fee' => 88,
                'stripe_data' => 'done',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'invoice_id' => 2,
                'total' => 1122,
                'fee' => 10,
                'stripe_data' => 1133,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 3,
                'invoice_id' => 3,
                'total' => 1122,
                'fee' => 10,
                'stripe_data' => 1133,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ];
        foreach ($transactions as $transaction) {
            Transaction::query()->updateOrCreate(['id' => $transaction['id']], $transaction);

        }

    }
}
