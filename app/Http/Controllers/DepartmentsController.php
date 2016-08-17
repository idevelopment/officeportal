<?php

namespace App\Http\Controllers;

use App\Departments;
use Illuminate\Http\Request;

use App\Http\Requests;

/**
 * Class DepartmentsController
 * @package App\Http\Controllers
 */
class DepartmentsController extends Controller
{
    /**
     * DepartmentsController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the departments.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('departments/index');
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
