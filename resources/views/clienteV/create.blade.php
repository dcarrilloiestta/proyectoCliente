@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>CREAR NUEVO CLIENTE</h1>
        <form action="{{ route('cliente.guardar') }}" method="post">
            @csrf
            <div>
                <label for="">NOMBRE</label>
                <input type="text" name="nombre" value="{{ old('nombre') }}">
            </div>
            <div>
                <label for="">EMAIL</label>
                <input type="email" name="email" value="{{ old('email') }}">
            </div>
            <div>
                <input type="submit" value="Submit">
            </div>
    </div>
@endsection
