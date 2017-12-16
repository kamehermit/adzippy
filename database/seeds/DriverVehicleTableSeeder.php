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
        $data =	['user_id' => 1,'vehicle_number' => 'DL5A3456','registration_number' => '09876674','vehicle_make' => 'Nissan','vehicle_model' => 'Datsun','cab_service'=>'Uber'];
        DB::table('driver_vehicles')->insert($data);
    }
}
