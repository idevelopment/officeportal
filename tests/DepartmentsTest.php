<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
 * Class DepartmentsTest
 */
class DepartmentsTest extends TestCase
{
    use DatabaseTransactions, DatabaseMigrations;

    /**
     * GET|HEAD: /departments
     *
     * @group all
     * @group departments
     */
    public function testDepartmentsIndex()
    {

    }

    /**
     * GET|HEAD: departments/create
     *
     * @group all
     * @group departments
     */
    public function testDepartmentsCreateView()
    {

    }

    /**
     * POST: /departments/create
     *
     * @group all
     * @group departments
     */
    public function testDepartmentCreateMethod()
    {

    }
}
