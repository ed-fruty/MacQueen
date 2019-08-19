<?php

use Illuminate\Database\Seeder;

class TableAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Admin::create([
            'name'=>'name',
            'email'=>'admin@admin.com',
            'password'=>bcrypt('123456')
        ]);
    }
}
