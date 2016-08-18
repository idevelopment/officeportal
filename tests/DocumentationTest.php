<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
 * Class DocumentationTest
 */
class DocumentationTest extends TestCase
{
    // DataMigrations   = Trait for running database migration
    // DataTransactions = Trait for running queries against the database.
    use DatabaseMigrations, DatabaseTransactions;

    /**
     * POST:    /documentation/create
     * ROUTE:   docs.store
     *
     * @group all
     * @group documentation
     */
    public function testDocumentationStoreMethod()
    {
        $this->withoutMiddleware();
        $user = factory(App\User::class)->create();

        // Authencation
        $this->actingAs($user);
        $this->seeIsAuthenticatedAs($user);

        // Without validation errors.


        // With validation errors.
    }

    /**
     * GET|HEAD: /documentation/create
     * ROUTE:    docs.register
     *
     * @group all
     * @group documentation
     */
    public function testDocumentationRegisterView()
    {
        $route = route('docs.register');
        $user  = factory(App\User::class)->create();

        $this->actingAs($user);
        $this->seeIsAuthenticatedAs($user);
        $this->visit($route);
        $this->seeStatusCode(200);
    }

    /**
     * GET|HEAD: /documentation/list/{id}
     * ROUTE:    docs.list
     *
     * @group all
     * @group documentation
     */
    public function testDocumentationList()
    {

    }

    /**
     * GET|HEAD: /documentation
     * ROUTE:    docs.index
     *
     * @group all
     * @group documentation
     */
    public function testDocumentationIndex()
    {
        $user  = factory(App\User::class)->create();
        $route = route('docs.index');

        $this->actingAs($user);
        $this->seeIsAuthenticatedAs($user);
        $this->visit($route);
        $this->seeStatusCode(200);
    }
}
