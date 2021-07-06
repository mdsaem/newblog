<?php
namespace App\Http\Controllers;

class HomeController extends Controller{

	public function index(){

		$this->data['name']="Rahim Sarkar";
		return view('home.index',$this->data);
	}
}

?>