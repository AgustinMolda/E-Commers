<?php

namespace App\Http\Controllers;

use App\Http\Requests\DetallesPedidosRequest;
use App\Services\DetallesPedidosService;
use Illuminate\Http\Request;

class DetallesPedidosController extends Controller
{

    public function __construct(protected DetallesPedidosService $service){

    }
  
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->service->getAll();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('detalles_pedidos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DetallesPedidosRequest $request)
    {
        return $this->service->store($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $this->service->findById($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $detalle = $this->service->findById($id);
        return view('detalles_pedidos.edit', compact('detalle'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DetallesPedidosRequest $request, string $id)
    {
        $detalle = $this->service->findById($id);
        return $this->service->update($detalle, $request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return $this->service->destroy($id);
    }
}
