<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Detalles_pedido extends Model
{
    use HasFactory;

    protected $fillable = [
        'pedido_id',
        'producto_id',
        'cantidad',
        'precio_unitario',  
    ];


    public function pedido(): BelongsTo {
        return $this->belongsTo(Pedidos::class, 'pedido_id');
    }

    public function product(): BelongsTo {
        return $this->belongsTo(Product::class, 'producto_id');
    }

}
