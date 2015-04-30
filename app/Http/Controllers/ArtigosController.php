<?php namespace App\Http\Controllers;

use App\Artigo;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Carbon\Carbon;
use Request;

class ArtigosController extends Controller {

	public function index()
  {
    $artigos = Artigo::latest('publicado_em')->publicado()->get();
    return view('artigos.index', compact('artigos') );
    return $artigos;
  }

	public function show($id)
  {
    $artigo = Artigo::findOrFail($id); 
    return view('artigos.show', compact('artigo'));
  }

	public function create()
  {
    return view('artigos.create');
  }

	public function store()
  {    
    Artigo::create(Request::all());
    
    return redirect('artigos');
  }

}
