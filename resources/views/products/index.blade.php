@extends('layouts.app')
@section('css')

@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-left mb-3">Administración de productos</h2>
                <div class="card">
                    <div class="card-header bg-primary text-white pt-2 pb-0 px-3">
                        <h6 class="d-flex justify-content-between align-items-center">
                            Listado de productos
                            <a href="{{ route('products.create') }}" class="btn btn-light btn-sm float-end">Ingresar nuevo producto</a>
                        </h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th scole="col">Id</th>
                                        <th scole="col">Nombre</th>
                                        <th scole="col">Descripcion</th>
                                        <th scole="col">Precio unitario</th>
                                        <th scole="col">Existencia</th>
                                        <th scole="col">Garantia</th>
                                        <th scole="col">Acciones</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')

@endsection