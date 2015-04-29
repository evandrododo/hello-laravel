<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function contato()
	{
    $data['email'] = "evandro.carreira@gmail.com";
    
		return view("pages.contato",$data);
	}

}
