<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        $cliente = new Cliente;
        $cliente->nombre = $request->input('nombre');
        $cliente->apellido = $request->input('apellido');
        $cliente->fechaNac = $request->input('fechaNac');
        // Asigna los valores del formulario a las propiedades del modelo

        $cliente->save();

        return redirect()->route('clientes.index')->with('success', 'Cliente creado exitosamente');
    }

    public function show($id)
    {
        $cliente = Cliente::find($id);
        return view('clientes.show', compact('cliente'));
    }

    public function edit($id)
    {
        $cliente = Cliente::find($id);
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::find($id);
        $cliente->nombre = $request->input('nombre');
        $cliente->apellido = $request->input('apellido');
        $cliente->fechaNac = $request->input('fechaNac');
        // Asigna los nuevos valores del formulario a las propiedades del modelo

        $cliente->save();

        return redirect()->route('clientes.index')->with('success', 'Cliente actualizado exitosamente');
    }

    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();

        return redirect()->route('clientes.index')->with('success', 'Cliente eliminado exitosamente');
    }
}
