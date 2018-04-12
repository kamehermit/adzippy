<?php

use Illuminate\Database\Seeder;

class CampaignTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =	[
        	'name' => 'Adzippy - Smart Advertising',
        	'description' => 'Gone are the days of dependance, feel your independence with Adzippy.',
        	'image' => 'pepe.jpg',
        	'start_date' => '2018-03-17 00:00:00',
        	'end_date' => '2018-05-20 00:00:00',
        	'amount' => '100000.00',
        	'enabled' => 1
        ];
        DB::table('campaigns')->insert($data);
    }
}
