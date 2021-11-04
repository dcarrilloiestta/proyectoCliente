@extends('layouts.app')
@section('content')
<div class="container">
<h1>LISTA DE CLIENTES</h1>

<table>
<tr>
<th>Nro </th>
<th>Nombre </th>
<th>Correo </th>
<th>Acciones</th>
</tr>
<tbody>
    @forelse ($clientes as $cliente)
        <tr>
            <td>{{ $loop->index + 1 }}</td>
            <td>{{ $cliente->nombre }}</td>
            <td>{{ $cliente->email }}</td>
            <td>
                <a href="{{ route('cliente.editar', $cliente->slug) }}">Editar</a>
                <a href="{{ route('cliente.ver', $cliente->slug) }}">Ver</a>
                <a href="" onclick="if(confirm('¿Eliminar {{ $cliente->nombre }} ?'))event.preventDefault();
                document.getElementById('borrar-{{ $cliente->slug }}').submit();">Eliminar</a>
                <form id="borrar-{{ $cliente->slug }}" method="post" action="{{ route('cliente.eliminar', $cliente->slug) }}">
                @csrf
                @method('DELETE')
            </td>
        </tr>
        @empty
            <p> No hay clientes!</p>
    @endforelse
</tbody>
</table>
</div>
@endsection