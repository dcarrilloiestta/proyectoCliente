<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/
3.3.7/css/bootstrap.min.css">
</head>

<body>
    <div>
        <main>
            <table>
                <tr>
                    <td style="padding:2px "><a href="{{ route('cliente.agregar') }}"> AG
                            REGAR CLIENTE </a></td>
                    <td style="padding:2px"><a href="{{ route('cliente.listar') }}"> VER
                            LISTA DE CLIENTES </a></td>
                </tr>
            </table>
            @yield('content')
        </main>
    </div>
</body>

</html>
