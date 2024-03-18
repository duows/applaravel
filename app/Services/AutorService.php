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

    public function index() {
        $registros = $this->repository->paginate(5);
        return (
            ["registros" => $registros]
        );
    }
    

    public function create() {

    }

    public function store(Request $request) {
           
    }

    public function show(string $id) {

    }

    public function edit(string $id) {

    }

    public function update(Request $request, string $id) {

    }

    public function delete($id) {

    }
    
    public function destroy(string $id) {

    }

}