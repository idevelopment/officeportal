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

  /**
   * Display documents by group.
   *
   * @return \Illuminate\Http\Response
   */
  public function list($id)
  {
      return view('documentation/list');
  }

  public function register()
  {

  }

  public function store()
  {

  }

}
