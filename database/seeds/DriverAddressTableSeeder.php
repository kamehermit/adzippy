<?php

use Illuminate\Database\Seeder;

class DriverAddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =	['user_id' => 1,'address_line1' => '64/2 Apt Block','address_line2' => '2nd Street','city' => 'New Delhi','pincode' => '110033'];
        DB::table('driver_addresses')->insert($data);
    }
}
