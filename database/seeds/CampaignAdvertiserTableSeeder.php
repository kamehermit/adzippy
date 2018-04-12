<?php

use Illuminate\Database\Seeder;

class CampaignAdvertiserTableSeeder extends Seeder
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
        	'user_id' => 2
        ];
        DB::table('campaign_advertisers')->insert($data);
    }
}
