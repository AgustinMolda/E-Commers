<?php

namespace App\Services;

use App\Models\Detalles_pedido;

class DetallesPedidosService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }


    public function getAll(): \Illuminate\Pagination\LengthAwarePaginator{
        return Detalles_pedido::pagginate(10);
    }

    public function findById($id): Detalles_pedido{
        return Detalles_pedido::findByIdOrFail($id);
    }

    public function store(array $data): Detalles_pedido{
        return Detalles_pedido::create($data);
    }

    public function update(Detalles_pedido $detalles_pedidos, array $data): Detalles_pedido{
        $detalles_pedidos->update($data);
        return $detalles_pedidos;
    }

    public function destroy($id): bool{
        $detalles_pedidos = Detalles_pedido::findByIdOrFail($id);
        return $detalles_pedidos->delete();
    }
}
