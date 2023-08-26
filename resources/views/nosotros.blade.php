@extends('layouts.main')

@section('title', 'Nosotros' )
@include('partials.nav')
<div class="container-fluid pt-3">
    <div class="row justify-content-center">
        <div class="col-xl-12 col-md-12">
            <h1>Bienvenido a nosotros </h1>
            <div class="card">
                <div class="card-header border-bottom d-flex justify-content-between">

                    <div><a href="{{ route('correo') }}"><button type="button" class="btn btn-secondary"><i class="fa fa-envelope me-2"></i>Enviar Datos</button></a></div>
                </div>
            </div>
        </div>
    </div>
</div>
