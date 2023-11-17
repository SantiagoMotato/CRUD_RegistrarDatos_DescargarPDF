{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{ route('usuarios.actualizarDatos', $usuario->id) }}">
        @csrf
        @method('PUT')
    
        <!-- Campos del formulario -->
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="{{ $usuario->nombre }}" required>
    
        <label for="cedula">Cedula:</label>
        <input type="text" name="cedula" value="{{ $usuario->cedula }}" required>

        <label for="telefono">Telefono:</label>
        <input type="text" name="telefono" value="{{ $usuario->telefono }}" required>

        <label for="direccion">Direccion:</label>
        <input type="text" name="direccion" value="{{ $usuario->direccion }}" required>
    
        <!-- Otros campos según sea necesario -->
    
        <button type="submit">Actualizar Usuario</button>
    </form>
    
</body>
</html> --}}


@extends('layouts.app')

@section('contenido')
    <div class="bg-gray-300 w-full h-screen pt-[100px] pl-[350px] flex justify-center items-center" >
        <form class="flex flex-col w-[400px] gap-3 bg-gray-800 p-5 rounded-xl"
        action="" method="post">
        @csrf
        
        @method('PUT')
            <label class="text-gray-200 font-bold text-lg" for="name">Nombre:</label>
            <input class="rounded-xl p-1" type="text" id="name" name="name" value="{{$usuario->name}}" required>

            <label class="text-gray-200 font-bold text-lg" for="cedula">Cédula:</label>
            <input class="rounded-xl p-1" type="text" id="cedula" name="cedula" value="{{$usuario->cedula}}" required>

            <label class="text-gray-200 font-bold text-lg" for="telefono">Teléfono:</label>
            <input class="rounded-xl p-1" type="tel" id="telefono" name="telefono" value="{{$usuario->telefono}}" required>

            <label class="text-gray-200 font-bold text-lg" for="direccion">Dirección:</label>
            <input class="rounded-xl p-1" type="text" id="direccion" name="direccion" value="{{$usuario->direccion}}" required>

            <button class="bg-sky-500 hover:bg-sky-700 rounded-xl p-2 mt-2 text-white font-bold"
            type="submit">ACTUALIZAR</button>
        </form>
    </div>
@endsection