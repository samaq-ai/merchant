<?php

namespace samadev\Http\Controllers;

use Illuminate\Http\Request;
use samadev\Http\Controllers\Controller;
use samadev\Repositories\UserRepository;
use samadev\User;

class UserController extends Controller
{
    protected $users;


  /**
     * Create a new controller instance.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct(UserRepository $users)
    {
        $this->users = $users;
    }

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $user = $this->users->find($id);

        return view('user.profile', ['user' => $user]);
    }

    public function showProfile($id)
    {
        $user = Cache::get('user:'.$id);

        return view('profile', ['user' => $user]);
    }
}
