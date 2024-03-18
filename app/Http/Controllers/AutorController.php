<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Services\AutorServiceInterface;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    // faça a injeção de dependência do context
    private $service;
    public function __construct(AutorServiceInterface $service)
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //dd('acessando o controller autor controller - index');

        //essa variavel service eu criei no construtor e atribui o valor do model
        $registros =  $this->service->index(10);
        //$registros = Autor::index(10);

        return view('autor.index', [
            'registros'=> $registros['registros'],
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //dd('acessando controller - create');
        return view('autor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $registro = $request->all();
        $this->service->create($registro);
        return redirect()->route('autor.index');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

        $registro = $this->service->show($id);

        return view('autor.show', [
            'registro' => $registro,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //complete a função de editar
        $registro = $this->service->show($id);

        //Validação para caso o registro não exista
        //if(!$registro){
          //  return redirect()->back();
        //}

        return view('autor.edit', [
            'registro'=> $registro,
        ]);


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $registro = $request->all();



        $autor = $this->service->show($id);

        $autor->update($registro);

        dd($registro);
    }

    public function delete($id) {
        $registro = $this->service->show($id);

        return view('autor.destroy', [
            'registro'=> $registro,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $registro = $this->service->show($id);

        $registro->delete();

        $registros = $this->service->all;
        
        return redirect()->route('autor.index');
        
    }
}
