<?php

use Illuminate\Database\Seeder;

class TableSeetingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
            'facebook'=>'https://www.facebook.com/',
            'twitter'=>'https://twitter.com/',
            'instagram'=>'https://www.instagram.com',
            'mobile'=>'+966545785215',
            'email'=>'info@macqueen.com',
            'address'=>'address goes here'
        ]);
    }
}
