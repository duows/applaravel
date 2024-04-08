<?php

namespace App\Http\Controllers;

use App\Http\Requests\AutorFormRequest;
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
    public function index(Request $request)
    {
        //dd($request->all());

        $pesquisar = $request->pesquisar ?? '';
        $perPage = $request->perPage ?? 5;

        //essa variavel service eu criei no construtor e atribui o valor do model
        $registros =  $this->service->index($pesquisar, $perPage);
        //$registros = Autor::index(10);


        return view('autor.index', [
            'registros'=> $registros,
            'pages' => [5, 10, 15, 20],
            'item' => $perPage,
            'perPage' => $perPage,
            'filter' => $pesquisar,
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
    public function store(AutorFormRequest $request)
    {
        //
        $registro = $request->all();

        try {
            $this->service->store($request);
            return redirect()->route('autor.index')->with('success', 'Cadastrado com sucesso');
        } catch (\Exception $e) {
            return view('autor.create', ['registro' => $registro, 'fail'=> $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

        //$registro = $request->all();

        try {
            $registro = $this->service->show($id);
            $this->service->update($registro, $id);
            return redirect()->route('autor.index', ['registro'=>$registro,]);
        } catch (\Exception $e) {
            return view('autor.index', ['registro' => $registro, 'fail'=> $e->getMessage()]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            $registro = $this->service->show($id);
            $this->service->update($registro, $id);
            return redirect()->route('autor.index', ['registro'=>$registro,]);
        } catch (\Exception $e) {
            return view('autor.edit', ['registro' => $registro, 'fail'=> $e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AutorFormRequest $request, string $id)
    {
        $registro = $request->all();

        try {
            $this->service->update($registro, $id);
            return redirect()->route('autor.index')->with('success', 'Alterado com sucesso');
        } catch (\Exception $e) {
            return view('autor.edit', ['registro' => $registro, 'fail'=> $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $this->service->destroy($id);
            return redirect()->route('autor.index')->with('success', 'Deletado com sucesso');
        } catch (\Exception $e) {
            return view('autor.destroy', ['fail'=> $e->getMessage()]);
        }
    }
}
