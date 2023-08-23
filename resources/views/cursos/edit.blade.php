@extends('layouts.main')

@section('title', 'Editar Curso')

<div class="container-fluid pt-3">
    <div class="row justify-content-center">
        <div class="col-xl-12 col-md-12">
            <h1>Editar curso</h1>
            <br>
            <div class="card col-xl-6">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Registro</h3>
                </div>
                <div class="card-body pb-2 ">
                    <form class="needs-validation was-validated" action="{{ route('cursos.update', $curso)}}" method="POST">
                        <div class="row row-sm">
                            <div class="col-lg-12 xl-12">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label>Nombre:</label>
                                    <input class="form-control  mb-4 is-valid state-valid" name="name" value="{{$curso->name}}" placeholder="Ingrese el nombre (obligatorio)" required="" type="text">

                                    <label>Descripción:</label>
                                    <textarea class="form-control mb-4 is-valid state-valid" name="description" placeholder="Ingrese la descripción (obligatorio)" required="" rows="3">{{$curso->description}}</textarea>

                                    <label>Categoría:</label>
                                    <input class="form-control  mb-4 is-valid state-valid" name="category" value="{{$curso->category}}" placeholder="Ingrese la categoría (obligatorio)" required="" type="text">

                                    <button type="submit" class="btn btn-radius btn-success-light">Actualizar formulario</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
