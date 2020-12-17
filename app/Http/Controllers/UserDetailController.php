<?php

namespace App\Http\Controllers;

use App\Models\UserDetail;
use Illuminate\Http\Request;

class UserDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function show(UserDetail $userDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $userDetailId
     * @return \Illuminate\Http\Response
     * @todo Empty if binding of UserDetail
     */
    public function edit($userDetailId)
    {
        $userDetail = UserDetail::find($userDetailId);
        if (!$userDetail) {
            return redirect()->route('users.index')
                ->with('error', 'User details not exist!');
        }
        return view('Users.Edit', compact('userDetail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $userDetailId
     * @return \Illuminate\Http\Response
     * @todo Empty if binding of UserDetail
     */
    public function update(Request $request, $userDetailId)
    {
        $userDetail = UserDetail::find($userDetailId);
        if (!$userDetail) {
            return redirect()->route('users.index')
                ->with('error', 'User details not exist!');
        }
        $fields = [
            'first_name' => 'required',
            'last_name' => 'required',
            'phone_number' => 'required'
        ];
        
        $request->validate($fields);
        
        $userDetail->update($request->all(array_keys($fields)));

        return redirect()->route('users.index')
            ->with('success', 'User details updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserDetail $userDetail)
    {
        //
    }
}
