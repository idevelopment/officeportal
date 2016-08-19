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
        $this->call(DepartmentsSeeder::class);
        $this->call(BouncerSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CountriesSeeder::class);
    }
}
