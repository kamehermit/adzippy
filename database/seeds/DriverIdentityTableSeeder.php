<?php

use Illuminate\Database\Seeder;

class DriverIdentityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =	['user_id' => 1,'aadhaar_number' => '110476893434124','pan' => 'JHD09345'];
        DB::table('driver_identities')->insert($data);
    }
}
