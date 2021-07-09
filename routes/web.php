<?php

use Illuminate\Support\Facades\Route;

Route::get('customers','CustomersController@index');

Route::get('create_customers',function(){
	$data=[
		'name'=>'rakib',
		'email'=>'rakib@gmail.com',
		'votes'=>'234',
		'created_at'=>now(),
		'updated_at'=>now()
        ];
	DB::table('customers')->insert($data);

});