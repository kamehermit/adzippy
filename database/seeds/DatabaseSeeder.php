<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(DriverAddressTableSeeder::class);
        $this->call(DriverIdentityTableSeeder::class);
        $this->call(DriverPaymentTableSeeder::class);
        $this->call(DriverVehicleTableSeeder::class);
        $this->call(DriverWorkingDesigTableSeeder::class);
    }
}
