<?php namespace App\Http\Controllers;

use App\Artigo;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ArtigosController extends Controller {

	public function index()
  {
    $artigos = Artigo::all();
    return view('artigos.index', compact('artigos') );
    return $artigos;
  }

	public function show($id)
  {
    $artigo = Artigo::findOrFail($id); 
    return view('artigos.show', compact('artigo'));
  }

}
