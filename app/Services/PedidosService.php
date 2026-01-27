<?php

namespace App\Services;

use App\Models\Pedidos;

class PedidosService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }


    public function getAll(){
        return Pedidos::pagginate(10);
    }

    public function findById($id){
        return Pedidos::findOrFail($id);
    }

    public function store(array $data){
        return Pedidos::create($data);
    }

    public function update(Pedidos $pedidos, array $data){
        $pedidos->update($data);
        return $pedidos;
    }

    public function destroy(Pedidos $pedidos){
        return $pedidos->delete();
    }
}
