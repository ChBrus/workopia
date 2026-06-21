<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Listings</title>
</head>

<body>
    <h1>{{ $title }}</h1>
    <ul>
        @forelse ($jobs as $job)
            {{-- $loop->index es el indice de la iteracion actual --}}
            {{-- $loop->count es el total de items en la coleccion --}}
            {{-- $loop->first es true si la iteracion actual es el primer item en la coleccion --}}
            {{-- $loop->last es true si la iteracion actual es el ultimo item en la coleccion --}}
            {{-- $loop->even es true si la iteracion actual es un numero par --}}
            {{-- $loop->odd es true si la iteracion actual es un numero impar --}}
            {{-- $loop->remaining es el numero de items restantes en la coleccion --}}
            {{-- $loop->iteration es el numero de la iteracion actual (empezando desde 1) --}}
            <li>{{$loop->iteration}} - {{ $job }}</li>
        @empty
            <li>No jobs available</li>
        @endforelse
    </ul>
</body>

</html>