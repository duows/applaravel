<?php

namespace App\Services;

use App\Models\Autor;
use App\Services\AutorServiceInterface;
use Illuminate\Http\Request;

class AutorService implements AutorServiceInterface {

    private $repository;
    public function __construct(Autor $autor)
    {
        $this->repository = $autor;
    }


    public function index($pesquisar, $perPage) {
        //dd($pesquisar, $perPage);
        
        $registro = $this->repository->where(function($query) use ($pesquisar){
            if ($pesquisar)
            {
                $query->where("nome","like","%".$pesquisar."%");
                $query->orWhere("email","like","%".$pesquisar."%");
                $query->orWhere("telefone","like","%".$pesquisar."%");
            }
        })->paginate($perPage);

        
        return $registro;
    }
    
    public function create() {

    }

    public function store($request) {
        // $request->validate(
        //     $this->repository->rules(),
        //     $this->repository->feedback(),
        // ) ;

        $this->repository->create($request->all());

    }

    public function show(string $id) {
        $registro = $this->repository->find($id);
        return([
            "registro"=> $registro,
        ]);
    }

    public function edit(string $id) {

    }

    public function update($request, string $id) {
        // $request->validate([
        //     $registro = $request->all()
        // ]);

        $autor = $this->repository->find($id);

        $autor->update($request);
    }

    public function delete($id) {

    }
    
    public function destroy(string $id) {
        $this->repository->find($id)->delete();
    }

}