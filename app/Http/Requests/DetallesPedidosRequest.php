<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DetallesPedidosRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
               'pedido_id' => 'required|exists:pedidos,id',
               'producto_id' => 'required|exists:productos,id',
               'cantidad' => 'required|integer|min:1',
               'precio_unitario' => 'required|numeric|min:0',  
        ];
    }
}
