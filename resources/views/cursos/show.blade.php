@extends('layouts.main')
@include('partials.nav')
@section('title', 'Curso '. $curso->name )

<div class="container-fluid pt-3">
    <div class="row justify-content-center">
        <div class="col-xl-12 col-md-12">
            <h1>Bienvenido al curso {{ $curso->name }}</h1>
            <p><a href="{{ route('cursos.index') }}"><button type="button" class="btn btn-info"><i class="fa fa-arrow-left me-2"></i>Volver a cursos</button></a></p>
            <p><a href="{{ route('cursos.edit', $curso) }}"><button type="button" class="btn btn-warning"><i class="fa fa-edit me-2"></i>Editar curso</button></a></p>
            <p><b>Categoría: </b> {{ $curso->category }}</p>
            <p> {{ $curso->description }}</p>
        </div>
    </div>
    <form action="{{ route('cursos.destroy',$curso) }}" method="POST">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger"><i class="fa fa-trash me-2"></i>Eliminar curso</button>
    </form>
</div>
