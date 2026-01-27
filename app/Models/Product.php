<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
    ];

    public const PAGGINATE=10;


    protected $hidden = [
        'category_id',
    ];


    public function caetgory(): HasOne{

        return $this->hasOne(Categories::class);
    }

    public function detalles_pedidos(): HasOne{
        return $this->hasOne(Detalles_pedido::class, 'producto_id');
    }

    
}
