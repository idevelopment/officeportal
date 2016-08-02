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
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      return view('documentation/index');
  }
}
