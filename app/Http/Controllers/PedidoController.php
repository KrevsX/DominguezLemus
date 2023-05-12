<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Cliente;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidos = Pedido::all();
        return view('pedidos.index', compact('pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = Cliente::all();
    
        return view('pedidos.create')->with('clientes', $clientes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $request->validate([
        'fechaPedido' => 'required',
        'fechaEntrega' => 'required',
        'Observaciones' => 'required',
        'id_cliente' => 'required',
        'articulos.*' => 'required', // Validar que se ingresen todos los artículos
    ]);

    // Crear el pedido
    $pedido = Pedido::create($request->all());

    $datosArticulos = $request->input('articulos', []);

    // Descontar el inventario y crear los detalles del pedido
    foreach ($datosArticulos as $idArticulo => $cantidad) {
        $articulo = Articulo::find($idArticulo);
        if (!$articulo) {
            return redirect()->back()->with('error', 'El artículo seleccionado no existe');
        }

        if ($articulo->cantInventario < $cantidad) {
            return redirect()->back()->with('error', 'Inventario insuficiente para el artículo ' . $articulo->nombre);
        }

        $articulo->decrement('cantInventario', $cantidad);

        $detallePedido = new DetallePedido([
            'cantidad' => $cantidad,
            'descuento' => $articulo->precio * 0.1, // Ejemplo de descuento del 10%
            'id_articulo' => $idArticulo,
        ]);

        $pedido->detalles()->save($detallePedido);
    }

    return redirect()->route('pedidos.index')->with('success', 'Pedido creado exitosamente');
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pedido = Pedido::find($id);
        return view('pedidos.show', compact('pedido'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pedido = Pedido::find($id);
        $clientes = Cliente::all();
        return view('pedidos.edit', compact('pedido', 'clientes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'fechaPedido' => 'required',
            'fechaEntrega' => 'required',
            'Observaciones' => 'required',
            'id_cliente' => 'required',
        ]);

        $pedido = Pedido::find($id);
        $pedido->update($request->all());

        return redirect()->route('pedidos.index')->with('success', 'Pedido actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Obtener el pedido
        $pedido = Pedido::findOrFail($id);
    
        // Obtener los detalles del pedido asociados
        $detallesPedido = $pedido->detalles;
    
        // Eliminar los detalles del pedido
        foreach ($detallesPedido as $detalle) {
            $detalle->delete();
        }
    
        // Eliminar el pedido
        $pedido->delete();
    
        return redirect()->route('pedidos.index')->with('success', 'Pedido eliminado exitosamente');
    }
    
}
