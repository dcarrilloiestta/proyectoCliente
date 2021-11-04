@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>VISTA DE CLIENTE</h1>
        <div>
            <label for="">NOMBRE</label>
            <input type="text" name="nombre" value="{{ $cliente->nombre }}" readonly>
        </div>
        <div>
            <label for="">EMAIL</label>
            <input type="text" name="email" value="{{ $cliente->email }}" readonly>
        </div>
        <div>
            <a href="{{ route('cliente.listar') }}"> Back</a>
        </div>
    </div>
@endsection
