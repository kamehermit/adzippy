<?php

use Illuminate\Database\Seeder;

class DriverVehicleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =	['user_id' => 1,'vehicle_number' => 'DL5A3456','registration_number' => '09876674','pic1' => 'photo1.jpg','pic2' => 'photo2.jpg','pic3' => 'photo3.jpg'];
        DB::table('driver_vehicles')->insert($data);
    }
}
