<?php

namespace Database\Seeders;

use App\Models\Media;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $medias = [
            [
                'id' => 1,
                's3_id' => 's3_id_1',
                'file_name' => 'pdf1',
                'file_type' => 'picture1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                's3_id' => 's3_id_2',
                'file_name' => 'pdf2',
                'file_type' => 'picture2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 3,
                's3_id' => 's3_id_3',
                'file_name' => 'pdf3',
                'file_type' => 'picture3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ];
        foreach ($medias as $media) {
            $newUser = Media::query()->updateOrCreate(['id' => $media['id']], $media);

        }
    }
}
