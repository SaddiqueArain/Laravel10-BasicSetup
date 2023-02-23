<?php

namespace Database\Seeders;

use App\Models\EntrepreneurDocument;
use App\Models\Region;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EntrepreneurDocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataArray = [
            [
                'id' => 1,
                'entrepreneur_id' => 1,
                'agent_id' => 1,
                'name' => 'document one',
                'description' => 'i love you',
                'document_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'entrepreneur_id' => 2,
                'agent_id' => 2,
                'name' => 'document two',
                'description' => 'i love you',
                'document_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 3,
                'entrepreneur_id' => 3,
                'agent_id' => 3,
                'name' => 'document three',
                'description' => 'i love you',
                'document_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]

        ];

        foreach ($dataArray as $data) {
           EntrepreneurDocument::query()->updateOrCreate(['id' => $data['id']], $data);
        }
    }

}
