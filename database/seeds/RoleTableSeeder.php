<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_driver = new Role();
	    $role_driver->name = 'driver';
	    $role_driver->description = 'Driver';
	    $role_driver->save();

	    $role_advertiser = new Role();
	    $role_advertiser->name = 'advertiser';
	    $role_advertiser->description = 'Advertiser';
	    $role_advertiser->save();
    }
}
