<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
//         $this->call(TableAdminSeeder::class);
//         $this->call(TablePackageStatusesSeeder::class);
        $this->call(TableSeetingSeeder::class);
    }
}
