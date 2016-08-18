<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
 * Class DepartmentsTest
 */
class DepartmentsTest extends TestCase
{
    // DatabaseTransactions = Used for the database queries
    // DatabaseMigrations   = Used for the database Migrations.
    use DatabaseMigrations, DatabaseTransactions;

    /**
     * GET|HEAD: /departments
     *
     * @group all
     * @group departments
     */
    public function testDepartmentsIndex()
    {
        $route = route('departments');
        $user  = factory(App\User::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->visit($route)
            ->seeStatusCode(200);
    }

    /**
     * GET|HEAD: departments/create
     *
     * @group all
     * @group departments
     */
    public function testDepartmentsCreateView()
    {
        $route = route('departments.register');
        $user  = factory(App\User::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->visit($route)
            ->seeStatusCode(200);
    }

    /**
     * POST: /departments/create
     *
     * @group all
     * @group departments
     */
    public function testDepartmentCreateMethod()
    {
        $this->withoutMiddleware();

        $user  = factory(App\User::class)->create();
        $route = route('departments.store', []);     // Validation error route

        // Input
        $input['name']        = 'Department name';
        $input['description'] = 'Department description';

        // Authencation
        $this->actingAs($user);
        $this->seeIsAuthenticatedAs($user);

        // Validation errors
        $this->post($route, []);
        $this->seeStatusCode(302);
        $this->assertHasOldInput();

        // Without errors
        $this->dontSeeInDatabase('departments', $input);
        $this->post($route, $input);
        $this->seeInDatabase('departments', $input);
        $this->seeStatusCode(302);
        $this->see('New department has been created');
    }

    /**
     * GET|HEAD: /departments/update/{id}
     *
     * @group all
     * @group departments
     */
    public function testDepartmentUpdateView()
    {
        $user       = factory(App\User::class)->create();
        $department = factory(App\Departments::class)->create();

        $route = route('departments.edit', ['id' => $department->id]);

        $this->actingAs($user);
        $this->seeIsAuthenticatedAs($user);
        $this->visit($route);
        $this->seeStatusCode(200);
    }

    /**
     * POST: /departments/update/{id}
     *
     * @group all
     * @group departments
     */
    public function testDepartmentUpdateMethod()
    {
        $this->withoutMiddleware();
        // Factories
        $user       = factory(App\User::class)->create();
        $department = factory(App\Departments::class)->create();

        $route  = route('departments.update', ['id' => $department->id]);

        $input['name']        = 'update name';
        $input['description'] = 'Update description';

        $oldDb = ['id' => $department->id, 'name' => $department->name, 'description' => $department->description];
        $newDb = ['id' => $department->id, 'name' => $input['name'], 'description' => $input['description']];

        // Authencation.
        $this->actingAs($user);
        $this->seeIsAuthenticatedAs($user);

        // Validation errors.
        $this->seeInDatabase('departments', $oldDb);
        $this->post($route, []);
        $this->seeInDatabase('departments', $oldDb);
        $this->seeStatusCode(302);
        $this->assertHasOldInput();

        // Success routing
        $this->seeInDatabase('departments', $oldDb);
        $this->visit($route, $input);
        $this->dontSeeInDatabase('departments', $oldDb);
        $this->seeInDatabase('departments', $newDb);
        $this->seeStatusCode(200);
        $this->see('The department has been updated');
    }

    /**
     * GET|HEAD: /departments/destroy/{id}
     *
     * @group all
     * @group departments
     */
    public function testDepartmentsDestroy()
    {
        // Database seeds
        $user       = factory(App\User::class)->create();
        $department = factory(App\Departments::class)->create();

        // Misc.
        $route  = route('departments.destroy', ['id' => $department->id]);
        $dbData = ['name' => $department->name, 'description' => $department->description];

        // Authencation
        $this->actingAs($user);
        $this->seeIsAuthenticatedAs($user);

        // User deleted.
        $this->seeInDatabase('departments', $dbData);
        $this->visit($route);
        $this->dontSeeInDatabase('departments', $dbData);
        $this->seeStatusCode(200);
        $this->see('Department has been deleted');
    }
}
