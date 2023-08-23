@extends('layouts.main')

@section('title', 'Crear Curso')

<div class="container-fluid pt-3">
    <div class="row justify-content-center">
        <div class="col-xl-12 col-md-12">
            <h1>Crear curso</h1>
            <br>
            <div class="card col-xl-6">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Registro</h3>
                </div>
                <div class="card-body pb-2 ">
                    <form class="needs-validation was-validated" action="{{ route('cursos.store') }}" method="POST" novalidate>
                        <div class="row row-sm">
                            <div class="col-lg-12 xl-12">
                                @csrf
                                <div class="form-group">
                                    <label>Nombre:</label>
                                    <input class="form-control @error('name') is-invalid @enderror is-valid state-valid" name="name" placeholder="Ingrese el nombre (obligatorio)" required="" type="text" value="{{old('name')}}"/>

                                    @error('name')
                                        <div class="invalid-feedback mt-0">
                                            {{$message}}
                                        </div>
                                    @enderror
                                    <br>

                                    <label>Descripción:</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror is-valid state-valid" name="description" placeholder="Ingrese la descripción (obligatorio)" required="" rows="3">{{old('description')}}</textarea>

                                    @error('description')
                                        <div class="invalid-feedback mt-0">
                                            {{$message}}
                                        </div>
                                    @enderror
                                    <br>

                                    <label>Categoría:</label>
                                    <input class="form-control @error('category') is-invalid @enderror is-valid state-valid" name="category" placeholder="Ingrese la categoría (obligatorio)" required="" type="text" value="{{old('category')}}">

                                    @error('category')
                                        <div class="invalid-feedback mt-0">
                                            {{$message}}
                                        </div>
                                    @enderror
                                    <br>

                                    <button type="submit" class="btn btn-radius btn-success-light">Enviar formulario</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
