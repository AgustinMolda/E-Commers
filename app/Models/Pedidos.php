<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pedidos extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha_pedido',
        'total',
        'estado',
    ];


    protected $hidden = [
        'user_id',
    ];


    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function detalles_pedidos(): HasMany{
        return $this->hasMany(Detalles_pedido::class, 'pedido_id');
    }
}
