<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ public_path('css/app.css') }}" type="text/css">
    <title>Reporte PDF</title>
</head>
<body>
    <h2>Lista de libros</h2>
    <table class="">
        {{-- table-striped table-hover --}}
        <thead class="">
            <tr>
				<th>Categoria</th>
				<th>Nombre</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($libros as $libro)
                <tr>
					<td>{{ $libro->categoria->nombre }}</td>
					<td>{{ $libro->nombre }}</td>                    
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>