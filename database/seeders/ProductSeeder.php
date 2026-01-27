<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product = new Product();
        $product->name='Sample Product';
        $product->description='This is a sample product description.';
        $product->price=19.99;
        $product->stock=100;
        $product->save();

        DB::table('products')->insert([
            'name' => 'Another Product',
            'description' => 'Description for another product.',
            'price' => 29.99,
            'stock' => 50,
        ]);

        $product = new Product();
        $product->name='Third Product';
        $product->description='Description for the third product.';
        $product->price=9.99;
        $product->stock=200;
        $product->save();


        DB::table('products')->insert([
            'name' => 'Fourth Product',
            'description' => 'Description for the fourth product.',
            'price' => 49.99,
            'stock' => 30,
        ]);

        $product = new Product();
        $product->name='Fifth Product';
        $product->description='Description for the fifth product.';
        $product->price=15.99;
        $product->stock=80;
        $product->save();

        DB::table('products')->insert([
            'name' => 'Sixth Product',
            'description' => 'Description for the sixth product.',
            'price' => 39.99,
            'stock' => 60,
        ]);
    }
}
