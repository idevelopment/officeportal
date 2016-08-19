<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Roles;

use App\Http\Requests;

class UsersController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  /**
   * Show all users.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $data["users"] = User::all();
      return view('staff/index', $data);
  }

  /**
   * Register a new user.
   *
   * @return \Illuminate\Http\Response
   */
  public function register()
  {
    $data["roles"] = Roles::all();

      return view('staff/create', $data);
  }

  /**
   * Save the new user.
   *
   */
  public function save()
  {
      return true;
  }

  /**
   * Show the form to update the profile.
   *
   * @return \Illuminate\Http\Response
   */
  public function profile()
  {
      return view('staff/profile');
  }

  /**
   * Update the profile.
   *
   */
  public function updateProfile()
  {
      return view('staff/profile');
  }

}
