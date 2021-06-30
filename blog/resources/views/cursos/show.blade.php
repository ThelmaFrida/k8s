@extends('layouts.plantilla')

@section('title', 'Cursos' . $curso->name)

@section('content')
    <h1>"Bienvenido al curso: <?php echo $curso->name; ?></h1><br>
    <a href="{{ route('cursos.index') }}">Volver a cursos curso</a>
    <br>
    <a href="">Editar Curso</a>
    <p><strong>Categoria: </strong>{{ $curso->categoria }}</p>
    <p>{{ $curso->descripcion }}</p>
@endsection