@extends('layouts.main')

@section('title', 'Contáctanos')
@include('partials.nav')
<div class="container-fluid pt-3">
    <div class="row justify-content-center">
        <div class="col-xl-12 col-md-12">
            <h1>Contáctanos </h1>
            <div class="card">
                <div class="card-header border-bottom d-flex justify-content-between">
                    <div class="col-lg-6 col-xl-6 col-md-12 col-sm-12">
                        <div class="card box-shadow-0">
                            <div class="card-header border-bottom">
                                <h3 class="card-title">Déjanos un mensaje</h3>
                            </div>
                            <div class="card-body">
                                <p class="text-muted">It is Very Easy to Customize and it uses in your website
                                    apllication.</p>
                                <form class="form-horizontal" action="{{ route('contactanos.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" class=" form-control @error('name') is-invalid @enderror" id="inputName" placeholder="Name" name="name">
                                        @error('name')
                                        <div class="invalid-feedback mt-0">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="inputEmail2" placeholder="Email" name="email">
                                        @error('email')
                                        <div class="invalid-feedback mt-0">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control @error('message') is-invalid @enderror " placeholder="Textarea" rows="3" name="message"></textarea>
                                        @error('message')
                                        <div class="invalid-feedback mt-0">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <div class="custom-checkbox custom-control"> <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-2"> <label for="checkbox-2" class="custom-control-label">Check me Out</label> </div>
                                        </div>
                                    </div>
                                    <div class="form-group mt-3">
                                        <div>
                                            <a href="{{ route('contactanos.index') }}"><button type="submit" class="btn btn-primary">Sign in</button></a>
                                            <button type="submit" class="btn btn-secondary">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                                @if(session('info'))
                                    <script>
                                        alert("{{ session('info') }}")
                                    </script>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
