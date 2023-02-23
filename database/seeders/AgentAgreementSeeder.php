<?php

namespace Database\Seeders;

use App\Models\AgentAgreement;
use App\Models\EntrepreneurDocument;
use App\Models\Media;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AgentAgreementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $agentagreements = [
            [
                'id' => 1,
                'agent_id'=> 1,
                'fee_percentage' => '30',
                'description' => 'i love you',
                'document_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'agent_id'=> 2,
                'fee_percentage' => '10',
                'description' => 'i love you',
                'document_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 3,
                'agent_id'=> 3,
                'fee_percentage' => '15',
                'description' => 'i love you',
                'document_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ];
        foreach ($agentagreements as $agentagreement) {
            AgentAgreement::query()->updateOrCreate(['id' => $agentagreement['id']], $agentagreement);

            }
        }
}
