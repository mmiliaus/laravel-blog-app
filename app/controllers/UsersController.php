<?php

class UsersController extends \BaseController {

    protected $layout = "layouts.main";

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $user = new User();

        return View::make('users.create', ['user' => $user]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $rules = array(
            'username'=>'required|unique:users',
            'password'=>'required|alpha_num|between:6,12|confirmed',
            'password_confirmation'=>'required|alpha_num|between:6,12'
        );

        $validator = Validator::make(Input::get('user'), $rules);
        if ($validator->fails()) {
            return Redirect::to('users/create')
                ->with('alert', 'The following errors occurred')
                ->withErrors($validator)
                ->withInput();
        } else {
            $user = new User(Input::get('user'));
            $user->password = Hash::make(Input::get('user')['password']);
            $user->save();

            return Redirect::to('users/login')->with('success', 'Thanks for registering!');
        }
    }

    public function login()
    {
        return View::make('users.login');
    }

    public function logout()
    {
        Auth::logout();
        return Redirect::to('/');
    }

    public function signin()
    {
        if (Auth::attempt(array('username'=>Input::get('username'), 'password'=>Input::get('password')))) {
            return Redirect::intended('/')->with('success', 'You are now logged in!');
        } else {
            return Redirect::to('users/login')
                ->with('message', 'Your username/password combination was incorrect')
                ->withInput();
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }


}
