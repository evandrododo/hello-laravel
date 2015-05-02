<?php namespace App\Http\Controllers;

use App\Artigo;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

use Carbon\Carbon;

class ArtigosController extends Controller {


    public function __construct()
    {
        $this->middleware('auth', ['only' => 'create'] );
    }

	/**
	 * Função padrão do Controller
     *
     * Exibe todos os artigos com data 
     * de publicação anterior a hoje
     *
	 */
    public function index()
    {
        $artigos = Artigo::latest('publicado_em')->publicado()->get();
        return view('artigos.index', compact('artigos') );
    }

    public function showTodos()
    {
        $artigos = Artigo::latest('publicado_em')->get();
        return view('artigos.index', compact('artigos') );
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

    public function store(Requests\ArtigoRequest $request)
    {

        $artigo = new Artigo($request->all());
        
        Auth::user()->artigos()->save($artigo);

        return redirect('artigos');
    }
  
    public function edit($id)
    {
        $artigo = Artigo::findOrFail($id);

        return view('artigos.edit', compact('artigo') );
    }
  
    public function update($id, Requests\ArtigoRequest $request)
    {
        $artigo = Artigo::findOrFail($id);

        $artigo->update($request->all());

        return redirect('artigos');
    }
  

}
