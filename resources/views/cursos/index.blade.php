@extends('layouts.main')
<div class="container-fluid pt-3">
    <div class="row justify-content-center">
        <div class="col-xl-12 col-md-12">
            <!--card-->
            <div class="card">
                <div class="card-header border-bottom d-flex justify-content-between">
                    <div><h3 class="card-title">Nuestros Cursos <span class="badge rounded-pill badge-sm bg-danger"> Último</span> </h3></div>
                    <div><a href="{{ route('cursos.create') }}"><button type="button" class="btn btn-primary"><i class="fe fe-plus-circle me-2"></i>Nuevo Curso</button></a></div>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach ($cursos as $curso)
                        <div class="col-xl-4 col-md-6">
                            <div class="card overflow-hidden box-shadow mb-0 main-blog my-xl-0 my-2">
                                <a href="blog-details.html" class="background-image-blog img3 mb-0">
                                    <span class="badge rounded-pill bg-warning-gradient blog-label label3">{{ $curso->category }}</span>
                                </a>
                                <div class="card-body p-0 border border-top-0 br-br-5 br-bl-5">
                                    <div class="p-5 border-bottom">
                                        <a href="{{ route('cursos.show', $curso->id) }}" class="text-dark blog-title">{{ $curso->name }}</a>
                                        <p class="mb-0 text-muted mt-4">{{ $curso->description }}</p>
                                    </div>
                                    <div class="d-sm-flex p-5 align-items-center">
                                        <div class="avatar-list indicators">
                                            <a href="javascript:void(0)" class="avatar avatar-md rounded-circle cover-image" data-bs-image-src= "{{ asset('images/users/4.jpg') }}"></a>
                                        </div>
                                        <h6 class="mb-0 text-muted ms-sm-2 mt-sm-0 mt-2">Jiggel mossin</h6>
                                        <div class="d-sm-flex ms-sm-auto">
                                            <a href="#" class="d-flex me-3"><span class="fe fe-calendar text-muted me-2 text-17"></span><div class="mt-0 mt-0   text-muted">{{ $curso->created_at->format('F j, Y - H:i') }}</div></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
         <!--card closed-->
    </div>
</div>
<div class="col-xl-6 col-md-6">
{{ $cursos->links() }}
</div>
