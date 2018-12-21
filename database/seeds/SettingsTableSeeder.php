<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        \App\Setting::create([
            'site_name' => 'Blog',
            'address' => 'Prishtina 01',
            'contact_number' => '0631490560',
            'contact_email' => 'blog@email.com'

        ]);
    }
}
