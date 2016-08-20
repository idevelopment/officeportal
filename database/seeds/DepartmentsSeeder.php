<?php

use Illuminate\Database\Seeder;

class DepartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data = [
           ['name' => 'Administration', 'mailbox' => 'administration@idevelopment.be', 'phone' => '011917427', 'redphone' => '2000'],
           ['name' => 'Management', 'mailbox' => 'administration@idevelopment.be', 'phone' => '011917427', 'redphone' => '7070'],
           ['name' => 'Sales', 'mailbox' => 'sales@idevelopment.be', 'phone' => '011917427', 'redphone' => '3000'],
           ['name' => 'Security', 'mailbox' => 'security@idevelopment.be', 'phone' => '011917427', 'redphone' => '4000'],
           ['name' => 'Support', 'mailbox' => 'support@idevelopment.be', 'phone' => '011917427', 'redphone' => '5000']
       ];
       DB::table('departments')->delete();
       DB::table('departments')->insert($data);
    }
}
