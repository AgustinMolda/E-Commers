<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Services\ProductService;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;

class ProductController extends Controller
{

        public function __construct(protected ProductService $service)
        {
            throw new \Exception('Not implemented');
        }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('product.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $this->service->create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(integer $id)
    {
        $this->service->find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Integer $id)
    {
        $product= $this->service->find($id);
        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, integer $id)
    {
        $this->service->update($request->validated(),$id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Integer $id)
    {
        $this->service->destroy($id);
    }
}
