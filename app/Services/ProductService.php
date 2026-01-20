<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Support\Arr;
use Ramsey\Uuid\Type\Integer;

class ProductService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function getAll(){
        return Product::pagginate(Product::PAGGINATE);
    }
    
    public function find(Integer $id){
        return Product::find($id);
    }
    
    public function create(array $data):Product{

        return Product::create($data);
    }

   

    public function update(array $data, Integer $id){
           $product= Product::findOrFail($id);
           
            $product->save($data);
           
    }   

    public function destroy(integer $id){
        return Product::destroy($id);
    }
    



}
