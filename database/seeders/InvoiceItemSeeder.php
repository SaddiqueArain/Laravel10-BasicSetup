<?php

namespace Database\Seeders;

use App\Models\Invoice;
use App\Models\InvoiceItem;
use App\Models\Media;
use App\Models\Subscription;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InvoiceItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $invoiceitems = [
            [
                'id' => 1,
                'invoice_id'=> 1,
                'description' => 1122,
                'price' => 10,
                'sort_order' => 1133,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'invoice_id'=> 2,
                'description' => 1122,
                'price' => 10,
                'sort_order' => 1133,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 3,
                'invoice_id'=> 3,
                'description' => 1122,
                'price' => 10,
                'sort_order' => 1133,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ];
        foreach ($invoiceitems as $invoiceitem) {
          InvoiceItem::query()->updateOrCreate(['id' => $invoiceitem['id']], $invoiceitem);

            }
        }
}
