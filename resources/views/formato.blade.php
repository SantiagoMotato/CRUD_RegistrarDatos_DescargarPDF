<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formato PDF</title>
</head>
<body>
<div class="overflow-x-auto pt-10">
      <table class="min-w-full bg-white border border-gray-300">
        <thead>
          <tr>
            <th class="py-2 px-4 border-b">Id Usuario</th>
            <th class="py-2 px-4 border-b">Nombre</th>
            <th class="py-2 px-4 border-b">Cédula</th>
            <th class="py-2 px-4 border-b">Teléfono</th>
            <th class="py-2 px-4 border-b">Dirección</th>
          </tr>
        </thead>
        <tbody>

        @if($dato)
          <tr>
 
            <td class="py-2 px-4 border-b text-center">{{ $dato->id }}</td>
            <td class="py-2 px-4 border-b text-center">{{ $dato->name }}</td>
            <td class="py-2 px-4 border-b text-center">{{ $dato->cedula }}</td>
            <td class="py-2 px-4 border-b text-center">{{ $dato->telefono }}</td>
            <td class="py-2 px-4 border-b text-center">{{ $dato->direccion }}</td>
           
          </tr>
          @endif
        </tbody>
      </table>
    </div>
</body>
</html>