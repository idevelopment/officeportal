<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
 * Class StaffTest
 */
class StaffTest extends TestCase
{
    use DatabaseMigrations, DatabaseTransactions;

    /**
     * GET|HEAD: /staff
     *
     * @group all
     * @group staff
     */
    public function testStaffIndex()
    {
        //
    }

    /**
     * GET|HEAD: /staff/create
     *
     * @group all
     * @group staff
     */
    public function testStaffCreateView()
    {
        //
    }

    /**
     * POST: /staff/create
     *
     * @group all
     * @group staff
     */
    public function testStaffCreateMethod()
    {

    }

}
