<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use App\Http\Requests;
use App\Http\Resources\UsersResource as UsersResource;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Users::paginate(15);
        return UsersResource::collection($users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $users =  new Users;
        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->phon = $request->input('phon');
        $users->address = $request->input('address');
        $users->password = bcrypt($request->input('password'));
        $users->save();
        return new UsersResource($users);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = Users::find($id);
        return new UsersResource($users);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = Users::find($id);
        $users->delete();
        return new UsersResource($users);
    }
}
