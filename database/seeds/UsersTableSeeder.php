<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
  public function run()
  {
    $role_driver = Role::where('name', 'driver')->first();
    $role_advertiser  = Role::where('name', 'advertiser')->first();

    $driver = new User();
    $driver->name = 'John Doe';
    $driver->email = 'john.doe@gmail.com';
    $driver->phone = '9876543210';
    $driver->password = bcrypt('password');
    $driver->verified = 1;
    $driver->kyc = 1;
    $driver->save();
    $driver->roles()->attach($role_driver);

    $advertiser = new User();
    $advertiser->name = 'Seth Rogen';
    $advertiser->email = 'seth.rogen@gmail.com';
    $advertiser->phone = '9753124680';
    $advertiser->password = bcrypt('password');
    $advertiser->verified = 1;
    $advertiser->kyc = 1;
    $advertiser->save();
    $advertiser->roles()->attach($role_advertiser);
  }
}