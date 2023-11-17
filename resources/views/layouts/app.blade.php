<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Vista app</title>

        @vite('resources/css/app.css')
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">


    </head>
    <body class="bg-gray-100 flex flex-col">

        <header class="p-5 border-b bg-white shadow">
            <h1 class="text-3xl font-black">Registro de Datos</h1>
            <a class="font-bold flex justify-end text-2xl" href="{{route('registrarse')}}">Regístrate!</a>
            <a class="font-bold flex justify-end text-2xl" href="{{route('mostrarDatos')}}">Mostrar datos</a>
        </header>

        <main class="container mx-auto mt-10">
            <h2 class="font-black text-center text-3xl mb-10">
                @yield('titulo')
            </h2>
            @yield('contenido')

        </main>

        @isset($datos)
            <table>
                <tr class="bg-slate-400">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Cédula</th>
                    <th>Teléfono</th>
                    <th>Dirección</th>
                    <th>Opciones</th>
                </tr>
                @foreach($datos as $dato)
                    <tr class="bg-slate-300">
                        <td>{{ $dato->id }}</td>
                        <td>{{ $dato->name }}</td>
                        <td>{{ $dato->cedula }}</td>
                        <td>{{ $dato->telefono }}</td>
                        <td>{{ $dato->direccion }}</td>
                        <td>
                            <a href="{{route('usuario.actualizarDatos', $dato->id)}}" class="text-white bg-blue-800 hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5  dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                Actualizar datos</a>
                        </td>
                            <td>
                                <form action="{{ route('usuario.eliminarUsuario', $dato->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2.5 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                        Eliminar usuario
                                    </button>
                                </form>
                                <a href="{{ route('usuario.formatoPDF', $dato->id) }}">
                                    <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold p-3 rounded-md pb-4  ">
                                      <svg class="fill-current w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
                                    </button>
                                  </a>
                            </td>
                        </td>
                    </tr>
                @endforeach
            </table>
        @endisset


        <footer class="text-center p-5 text-gray-500 font-bold uppercase">
            Registro De Datos - Todos los derechos reservados {{date("Y")}}
        </footer>

        {{-- <nav>
            <a href="/registro">Registrar Datos</a>
        </nav>
        <hr>

        <h1>@yield('titulo')</h1>
        <hr>
        <h1>@yield('contenido')</h1> --}}
     
    </body>
</html>
