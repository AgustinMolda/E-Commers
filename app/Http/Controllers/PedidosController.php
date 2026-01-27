<?php

namespace App\Http\Controllers;

use App\Http\Requests\PedidosRequest;
use App\Services\PedidosService;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
    public function __construct(protected PedidosService $pedidos_service){

    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->pedidos_service->getAll();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pedidos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PedidosRequest $request)
    {
        return $this->pedidos_service->store($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $this->pedidos_service->findById($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('pedidos.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PedidosRequest $request, string $id)
    {
        $pedidos = $this->pedidos_service->findById($id);
        return $this->pedidos_service->update($pedidos, $request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return $this->pedidos_service->destroy($this->pedidos_service->findById($id));
    }
}
