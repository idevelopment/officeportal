<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Departments;
use App\Roles;

use App\Http\Requests;

class ToolsController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  /**
   * Show the applications.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      return view('tools/index');
  }

  /**
   * Show the form to register a new tool.
   *
   * @return \Illuminate\Http\Response
   */
  public function register()
  {
     $data["departments"] = Departments::all();
     $data["roles"] = Roles::all();

    return view('tools/create', $data);
  }
}
