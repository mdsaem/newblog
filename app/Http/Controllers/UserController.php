<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{


public function show($id){
	$user= User::find($id);
	return $user;
}

	public function user(){
		$users=User::all();
		return $users;
	}
    public function create(){
    	$data=[
                'name'=>'Mr Shamim',
                'email'=>'shamim@gmail.com',
                'password'=>'12345'

    	];

    	$data=[
                'name'=>'Mr Hasan',
                'email'=>'hamim@gmail.com',
                'password'=>'12345'

    	];

    	$data=[
                'name'=>'Mr Rahim',
                'email'=>'rahim@gmail.com',
                'password'=>'1233444'

    	];

    	User::create($data);
    	return("create a User");
    	
    }

    public function edit($id){
    	$user=User::find($id);
    	$user->name='new name';
    	$user->save();
    	return 'edit';
    }

    public function delete($id){
    	$user=User::findorFail($id);
    	$user->delete();
    	return 'delete';
    }
}
