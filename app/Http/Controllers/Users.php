<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class Users extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($id = null) {
        if ($id == null) {
            return User::orderBy('id', 'asc')->get();
        } else {
            return $this->show($id);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request) {
        $user = new User();

        $user->username = $request->input('username');
        $user->password = $request->input('password');
        $user->profile_image_url = $request->input('profile_image_url');
        $user->location = $request->input('location');
        $user->followers_count = $request->input('followers_count');

        return 'User record successfully created with id ' . $user->id;
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        return User::find($id);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id) {
        $user = User::find($id);

        $user->username = $request->input('username');
        $user->password = $request->input('password');
        $user->profile_image_url = $request->input('profile_image_url');
        $user->location = $request->input('location');
        $user->followers_count = $request->input('followers_count');

        return "Sucess updating user #" . $user->id;
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Request $request) {
        $user = User::find($request->input('id'));

        $user->delete();

        return "Employee record successfully deleted #" . $request->input('id');
    }

}
