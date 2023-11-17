@extends('layouts.app')

@section('titulo')
    Pagina principal desde Registro
@endsection

@section('contenido')
<div class="md:flex md:justify-center">
    <div class="md:w-6/12 p-5 flex justify-center items-center">
        <img src="{{ asset('img/paganiLogo.jpg') }}" alt="Imagen de registro" class="w-300 rounded-2xl">
    </div>
    <div class="md:w-4/12 bg-slate-300 p-6 rounded-lg shadow-xl">
        <form action="" method="post">
            @csrf
        <div class="mb-5">
            <label for="name" class="mb-2 block uppercase font-bold">Nombre</label>
            <input type="text" id="name" name="name" placeholder="Ingrese su nombre..." class="border p-3 w-full rounded-lg">
            @error('name')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center ">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label for="cedula" class="mb-2 block uppercase font-bold">Cedula</label>
            <input type="text" id="cedula" name="cedula" placeholder="Ingrese nombre de usuario" class="border p-3 w-full rounded-lg">
            @error('cedula')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center ">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label for="telefono" class="mb-2 block uppercase font-bold">Numero de telefono</label>
            <input type="text" id="telefono" name="telefono" placeholder="Ingrese su numero de telefono..." class="border p-3 w-full rounded-lg">
            @error('telefono')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center ">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label for="direccion" class="mb-2 block uppercase font-bold">Dirección</label>
            <input type="text" id="direccion" name="direccion" placeholder="Ingrese su domicilio..." class="border p-3 w-full rounded-lg">
            @error('direccion')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center ">{{$message}}</p>
            @enderror
        </div>

       

        <input type="submit" value="Crear Cuenta" class="bg-slate-600 hover:bg-slate-800 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">

    </form>
    </div>
</div>
@endsection