<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\UserModel;


class UserController extends Controller
{
    
    public function Register(Request $request)
    {
       
        $UserModel = new UserModel;
        $UserModel->name = $request->input('name');
        $UserModel->email = $request->input('email');
        $UserModel->password = Hash::make($request->input('password'));
        $UserModel->save();
        return response()->json($UserModel);
    }

    public function Login1(Request $request)
    {
        //print_r($request);
       $user = UserModel::where('email', $request->input('email'))->first();
       if(Hash::check($request->input('password'), $user->password)){
        $user->api_token = Hash::make(Str::random(16));
        
        UserModel::where('email', $request->input('email'))->update(['api_token' => "$user->api_token"]);
        $user->save;
        return $user;
        
       }else{
            return "No User Available";
       }
       
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
}
