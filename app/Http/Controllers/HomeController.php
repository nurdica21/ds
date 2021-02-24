<?php
namespace App\Http\Controllers;

use Theme;

class HomeController extends Controller {

	public function getIndex()
	{
		return Theme::view('index');
	}
	Theme::uses('default');
        
    $data['info'] = 'Hello World'; 
    $cookie = Cookie::make('name', 'Tee');
    
}
