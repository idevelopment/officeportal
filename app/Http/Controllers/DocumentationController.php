<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DocumentationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the departments.
     *
     * @url    GET|HEAD:
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('documentation/index');
    }

    /**
     * Display documents by group.
     *
     * @url    GET|HEAD:
     * @param  int $id the documentation item id in the database.
     * @return \Illuminate\Http\Response
     */
    public function listing($id)
    {
        return view('documentation/list');
    }

    /**
     * Create a new documentation item.
     *
     * @url    GET|HEAD:
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function register()
    {
        return view('documentation.create');
    }

    /**
     * Create a new documentation item in the database.
     *
     * @url    POST:
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store()
    {
        session()->flash('message', 'Documentation has been added.');
        return redirect()->back();
    }

}
