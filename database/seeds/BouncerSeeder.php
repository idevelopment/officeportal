<?php

use Illuminate\Database\Seeder;
use Silber\Bouncer\Database\Ability;
use Silber\Bouncer\Database\Role;

/**
 * Class BouncerSeeder
 */
class BouncerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Permissions:
        // Template: Role::create(['name' => '']);
        Role::create(['name' => 'Administrator']);
        Role::create(['name' => 'Management']);
        Role::create(['name' => 'Engineer']);
        Role::create(['name' => 'Developer']);
        Role::create(['name' => 'Sales']);
        Role::create(['name' => 'Support']);

        // Abilities:
        // Template: Ability::create(['name' => '']);

        // [Ability]: Departments
        Ability::create(['name' => 'create-departments']);
        Ability::create(['name' => 'view-departments']);
        Ability::create(['name' => 'delete-departments']);

        // [Ability]: Staff
        Ability::create(['name' => 'create-user']);
        Ability::create(['name' => 'edit-user']);
        Ability::create(['name' => 'remove-user']);

        // [Ability]: News
        Ability::create(['name' => 'manage-news']);

        // [Ability]: Service Requests
        Ability::create(['name' => 'request-service']);
        Ability::create(['name' => 'manage-services']);

        // [Ability]: Tool management
        Ability::create(['name' => 'create-tool']);
        Ability::create(['name' => 'edit-tool']);
        Ability::create(['name' => 'delete-tool']);

        // Connect abilities to roles.
        // Template: Bouncer::allow('admin')->to(['ban-users', 'delete-posts']);
        $abilities = Ability::all();

        foreach($abilities as $ability)
        {
            Bouncer::allow('Administrator')
                ->to($ability->name);
            Bouncer::allow('Management')
                ->to($ability->name);
        }

        Bouncer::allow('Engineer')
            ->to(['request-service', 'view-departments']);
        Bouncer::allow('Developer')
            ->to(['request-service', 'view-departments']);
        Bouncer::allow('Sales')
            ->to(['request-service', 'view-departments']);
        Bouncer::allow('Support')
            ->to(['request-service', 'view-departments']);
    }
}
