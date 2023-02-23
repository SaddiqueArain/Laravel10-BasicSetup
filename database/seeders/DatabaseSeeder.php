<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\EntrepreneurDocument;
use App\Models\Prospect;
use App\Models\User;
use App\Models\RoleUser;
//use App\Models\RoleUser;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PermissionSeeder::class,
            RoleSeeder::class,
            RegionSeeder::class,
            UserSeeder::class,
            SubscriptionSeeder::class,
            SubscriptionItemSeeder::class,
            ScoreboardSeeder::class,
            MediaSeeder::class,
            AppointmentTypeSeeder::class,
            AppointmentSeeder::class,
            InvoiceSeeder::class,
            InvoiceItemSeeder::class,
            TransactionSeeder::class,
            ProspectSeeder::class,
            AgentAgreementSeeder::class,
            EntrepreneurDocumentSeeder::class,
            UserNotificationSeeder::class,
            RoadmapStepSeeder::class,
            ContentSeeder::class,
            RegionContentSeeder::class,

        ]);

    }
}
