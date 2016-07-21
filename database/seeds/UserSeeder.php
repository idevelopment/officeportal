<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data['name']     = 'Administrator';
        $data['email']    = 'admin@idevelopment.be';
        $data['password'] = bcrypt('admin');
        User::create($data);
    }
}
