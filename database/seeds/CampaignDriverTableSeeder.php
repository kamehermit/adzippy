<?php

use Illuminate\Database\Seeder;

class CampaignDriverTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =	[
        	'campaign_id' => 1,
        	'user_id' => 1
        ];
        DB::table('campaign_drivers')->insert($data);
    }
}
