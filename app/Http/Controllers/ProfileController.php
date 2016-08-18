<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactValidator;
use App\Http\Requests\PasswordValidator;
use App\Http\Requests\ProfileInfoValidator;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

/**
 * Class ProfileController
 * @package App\Http\Controllers
 */
class ProfileController extends Controller
{
    /**
     * ProfileController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Get the profile index view.
     *
     * @url    GET|HEAD: Profile
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('staff/profile');
    }


    /**
     * Update the basic information information.
     *
     * @url    POST: /profile/update/information
     * @param  ProfileInfoValidator $input
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateGeneral(ProfileInfoValidator $input)
    {
        // TODO: Write test.
        $user = auth()->user();
        User::find($user->id)->update($input->except('_token'));
        session()->flash('message', 'basic profile information has been updated.');

        return redirect()->back();
    }

    /**
     * Update the contact information.
     *
     * @url    POST: profile/update/contact
     * @param  ContactValidator $input
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateContact(ContactValidator $input)
    {
        $user = auth()->user();
        User::find($user->id)->update($input->except('_token'));
        session()->flash('message', 'Contact information has been updated');

        return redirect()->back();
    }

    /**
     * Update your security settings.
     *
     * @url    POST: profile/update/password
     * @param  PasswordValidator $input
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updatePassword(PasswordValidator $input)
    {
        $user = auth()->user();
        User::find($user->id)->update($input->except(['_token', 'password_confirmation']));
        session()->flash('message', 'Credentials has been updated');

        return redirect()->back();
    }
}
