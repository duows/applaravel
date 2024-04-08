<?php

namespace App\Services;

use App\Models\Autor;
use App\Services\AutorServiceInterface;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RuntimeException;

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
        DB::beginTransaction();

        try {
            $registro = $this->repository->create($request);
            DB::commit();
            return $registro;
        } catch (\Exception $e) {
            return new Exception('Erro ao criar o registro.');
        }
    }

    public function show(string $id) {
        $registro = null;

        try {
            $registro = $this->repository->find($id);
            return $registro;
        } catch (ModelNotFoundException $e) {
            throw new Exception('Registro não encontrado.');
        }
    }

    public function edit(string $id) {
        $registro = null;

        try {
            $registro = $this->repository->show($id);
            return $registro;
        } catch (ModelNotFoundException $e) {
            throw new Exception('Registro não encontrado.');
        }
    }

    public function update($request, string $id) {
        // $request->validate([
        //     $registro = $request->all()
        // ]);
        $registro = null;
        $registro = $request->all();
        $autor = $this->repository->find($id);

        DB::beginTransaction();
        try {
            $registro->$autor->update($request);
            DB::commit();
            return $registro;
        } catch (\Exception $e) {
            return new Exception('Erro ao atualizar o registro.');
        }
    }
    
    public function delete($id) {
        $registro = $this->repository->find($id);

        DB::beginTransaction();
        try {
            $registro->delete();
            DB::commit();
            return $registro;
        } catch (\Exception $e) {
            return new Exception('Erro ao deletar o registro.');
        }
    }

    public function destroy(string $id) {
        $registro = $this->repository->find($id);

        DB::beginTransaction();
        try {
            $registro->delete();
            DB::commit();
            return $registro;
        } catch (\Exception $e) {
            return new Exception('Erro ao deletar o registro.');
        }
    }
}