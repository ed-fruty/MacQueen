<?php

use Illuminate\Database\Seeder;

class TableProvidersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\MacqueenProviders\Provider::create([
            'name'=>'Safra',
            'commission_rate'=>'1',
            'remaining_credit'=>'0',
            'currency_id'=>'1'
        ]);
    }
}
