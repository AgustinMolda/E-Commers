<?php

namespace Database\Seeders;

use App\Models\Pedidos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PedidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pedidos = new Pedidos();
        $pedidos->user_id = 1;
        $pedidos->total = 99.99;
        $pedidos->status = 'pending';
        $pedidos->save();

        
    }
}
