<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([

            
            CountrySeeder::class,
            RoleSeeder::class,
            DepartmentSeeder::class,
            Device_typeSeeder::class,
            ManufacturerSeeder::class,
            UserSeeder::class,
            DeviceSeeder::class,
            User_deviceSeeder::class            

        ]);
    }
}
