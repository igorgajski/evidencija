<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            ['first_name'=>'Pero',
             'last_name' =>'Peric',
             'email' => 'pero@peric.com',
             'password' => '123',
             'department_id'=>'1',
             'role_id'=>'1',
             'country_id'=>'1'
              

            ]
            );
    }
}
