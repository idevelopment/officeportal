<?php

namespace App\Http\Controllers;

use App\Departments;
use App\Http\Requests\DepartmentValidator;
use Illuminate\Http\Request;

use App\Http\Requests;

/**
 * Class DepartmentsController
 * @package App\Http\Controllers
 */
class DepartmentsController extends Controller
{
    // TODO: Write tests for this department.
    // TODO: Fill in the validator.
    // TODO: Create department member relationship.
    // TODO: Register routes.

    /**
     * DepartmentsController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('lang');
    }

    /**
     * Show the departments.
     *
     * @url    GET|HEAD:
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('departments/index');
    }

    /**
     * Register from for a new department.
     *
     * @url    GET|HEAD:
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function register()
    {
        return view();
    }

    /**
     * Store a new department in the database.
     *
     * @url
     * @param  DepartmentValidator $input
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(DepartmentValidator $input)
    {
        return redirect()->back();
    }

    /**
     * Update view for a specific department.
     *
     * @url    GET|HEAD:
     * @param  int $id the id off the department in the database.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $data['department'] = Departments::with('managers')->find($id)
        return view('', $data);
    }

    /**
     * Update a department in the database.
     *
     * @url    POST:
     * @param  int $id the id off the department in the database.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($id)
    {
        session()->flash('The department has been updated');
        return redirect()->back();
    }

    /**
     * Remove a department out off the system.
     *
     * @url    GET|HEAD: /departments/delete
     * @param  int $id, the Department id in the database.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Departments::find($id)->managers()->sync([]);
        Departments::destroy($id);

        session()->flash('message', 'Department has been deleted');
        return redirect()->back();
    }
}
