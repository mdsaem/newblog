<?php
namespace App\Http\Controllers;

class HomeController extends Controller{

	public function index(){
		$this->data['name']='Mr Shakib';
		$this->data['roll']=15;
		$this->data['sub']=['eng','bang'];

		return view('home.index',$this->data);

	/* rules:3	$data=[];

		$data['name'] = 'Mamun Sarkar';
	    $data['roll'] = 234;
	    $data['sub'] = ['Math', 'Eng', 'Bangla'];

		return view('home.index',$data);*/
		/*Rules: 2 $name='Mr Ali';

		$data=[
              'name' => $name,
              'roll' => $roll=122,
		];*/

		


		/* Rules 3: $name="Mamun sarkar";
		return view('home.index',['n'=>$name]);*/
	}
}

?>