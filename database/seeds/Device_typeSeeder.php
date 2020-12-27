<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Device_typeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('device_types')->insert(
            ['name'=>'Nabava'
              

            ]
            );
    }
}
