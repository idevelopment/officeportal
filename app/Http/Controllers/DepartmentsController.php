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
      $data["departments"] = Departments::all();

        return view('departments.index', $data);
    }

    /**
     * Register from for a new department.
     *
     * @url    GET|HEAD:
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function register()
    {
        return view('departments.register');
    }

    /**
     * Store a new department in the database.
     *
     * @url
     * @param  DepartmentValidator $input
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(DepartmentValidator $input)
    {
        Departments::create($input->except('_token'));
        session()->flash('message', 'New department has been created');
        return redirect()->back();
    }

    /**
     * Update view for a specific department.
     *
     * @url    GET|HEAD: /departments/update/{id}
     * @param  int $id the id off the department in the database.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $data['department'] = Departments::with('managers')->find($id);
        return view('', $data);
    }

    /**
     * Update a department in the database.
     *
     * @url    POST: /departments/update/{id}
     * @param  DepartmentValidator $input
     * @param  int $id the id off the department in the database.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(DepartmentValidator $input, $id)
    {
        Departments::find($id)->update($input->except('_token'));
        session()->flash('The department has been updated');
        return redirect()->back();
    }

    /**
     * Remove a department out off the system.
     *
     * @url    GET|HEAD: /departments/destroy/{id}
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
