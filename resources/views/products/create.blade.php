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
                            Ingreso de productos
                            <a href="{{ route('products.index') }}" class="btn btn-light btn-sm float-end">Regresar</a>
                        </h6>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('products.store') }}" id="frmProduct" name="frmProduct" novalidate="true">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="">Nombre del producto:</label>
                                    <input type="text" name="nombre" id="nombre" class="form-control @error('nombre') is-invalid @enderror" placeholder="Nombre del producto" value="{{ old('nombre') }}">
                                    @error('nombre')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="">Descripción:</label>
                                    <input type="text" name="descripcion" id="descripcion" class="form-control @error('descripcion') is-invalid @enderror" placeholder="Descripcion del producto" value="{{ old('descripcion') }}">
                                    @error('descripcion')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="">Precio unitario:</label>
                                    <input type="number" name="precio_unitario" id="precio_unitario" class="form-control @error('precio_unitario') is-invalid @enderror" placeholder="Precio unitario del producto" value="{{ old('precio_unitario') }}">
                                    @error('precio_unitario')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="">Existencia:</label>
                                    <input type="number" name="existencia" id="existencia" class="form-control @error('existencia') is-invalid @enderror" placeholder="Existencia del producto" value="{{ old('existencia') }}">
                                    @error('existencia')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="">Garantia:</label>
                                    <input type="text" name="garantia" id="garantia" class="form-control @error('garantia') is-invalid @enderror" placeholder="Garantia del producto" value="{{ old('garantia') }}">
                                    @error('garantia')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer clearfix">
                        <button type="reset" class="btn btn-secondary float-start" form="frmProduct">Limpiar</button>
                        <button type="submit" class="btn btn-primary float-end" form="frmProduct">Agregar producto</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')

@endsection