<?php

use Illuminate\Database\Seeder;

class DriverPaymentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =	['user_id' => 1,'bank_name' => 'State Bank of India','account_holder_name' => 'John Doe','account_number' => '1100763420','ifsc' => 'SBI003420','branch_code'=>'3420'];
        DB::table('driver_payments')->insert($data);
    }
}
