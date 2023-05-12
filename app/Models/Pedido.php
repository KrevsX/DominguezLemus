<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_pedido';
    protected $fillable = [
        'fechaPedido',
        'fechaEntrega',
        'Observaciones',
        'id_cliente',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }
    public function detalles()
{
    return $this->hasMany(DetallePedido::class, 'id_pedido');
}
}
