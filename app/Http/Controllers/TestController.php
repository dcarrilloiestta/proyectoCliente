<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TestController extends Controller
{
    public function crearCliente()
    {
        return view('clienteV.create');
    }
    public function registrarCliente(Request $request)
    {
        $reglas = [
            'nombre' => 'required',
            'email' => 'required|email'
        ];
        $mensajeDeError = [
            'required' => 'Ingreso de datos erróneo'
        ];
        $this->validate($request, $reglas, $mensajeDeError);
        cliente::create([
            'nombre' => $request->nombre,
            'slug' => Str::slug($request->nombre),
            'email' => strtolower($request->email)
        ]);
        $this->mensaje('message', 'Cliente creado correctamente!');
        return redirect()->back();
    }
    public function listarClientes()
    {
        $clientes = cliente::toBase()->get();
        return view('clienteV.index', compact('clientes'));
    }
    public function formularioEditarCliente(cliente $cliente)
    {
        echo "Formulario De Edicion";
        return view('clienteV.edit', compact('cliente'));
    }
    public function ActualizarCliente(Request $request, cliente $cliente)
    {
        echo "FORMULARIO PARA EDITAR CLIENTE";
        $reglas = [
            'nombre' => 'required',
            'email' => 'required'
        ];
        $mensajeDeError = [
            'required' => 'Ingreso de datos erróneo'
        ];
        $this->validate($request, $reglas, $mensajeDeError);
        $cliente->update([

            'nombre' => $request->nombre,
            'email' => strtolower($request->email)
        ]);
        $this->mensaje('message', 'Cliente Actualizado Correctamente!');
        return redirect()->back();
    }
    public function VerCliente(cliente $cliente)
    {
        return view('clienteV.view', compact('cliente'));
    }
    public function EliminarCliente(cliente $cliente)
    {
        $cliente->delete();
        $this->mensaje('message', 'Cliente Eliminado Correctamente');
        return redirect()->back();
    }
    public function mensaje(string $nombre = null, string $mensaje = null)
    {
        return session()->flash($nombre, $mensaje);
    }
}
