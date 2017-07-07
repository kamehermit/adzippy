<?php

use Illuminate\Database\Seeder;

class DriverWorkingDesigTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =	['user_id' => 1,'designation' => 'Cab Driver'];
        DB::table('driver_working_designations')->insert($data);
    }
}
