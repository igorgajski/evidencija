<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('devices')->insert(
            ['name'=>'Racunalo',
             'model' =>'T12',
             'device_type_id' => '1',
             'manufacturer_id' => '1'
              

            ]
            );
    }
}
