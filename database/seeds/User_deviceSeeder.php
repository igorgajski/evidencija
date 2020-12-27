<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class User_deviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users_devices')->insert(
            ['assigned_at'=>'2020-05-20',
             'returned_at' =>'2020-08-25',
             'user_id' => '1',
             'device_id' => '1'
              

            ]
            );
    }
}
