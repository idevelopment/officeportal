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
        $data['fname']     = 'iDevelopment';
        $data['address']     = 'Binnnehof 7';
        $data['zipcode']    = '3800';
        $data['city']       = 'Sint-Truiden';
        $data['country']     = 'BE';
        $data['phone']     = '+3211689988';
        $data['mobile']     = '+324989178';


        $data['email']    = 'admin@idevelopment.be';
        $data['password'] = bcrypt('admin');

        $user = User::create($data);

        // Assign Administrator role.
        Bouncer::assign('Administrator')->to($user);
    }
}
