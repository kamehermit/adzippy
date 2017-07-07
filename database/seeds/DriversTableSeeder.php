<?php

use Illuminate\Database\Seeder;

class DriversTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =	['name' => 'John Doe','phone' => '9876543210','password' => bcrypt('password')];
        DB::table('drivers')->insert($data);
    }
}
