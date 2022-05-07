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
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->nombre}}</td>
                                            <td>{{$item->descripcion}}</td>
                                            <td>{{$item->precio_unitario}}</td>
                                            <td>{{$item->existencia}}</td>
                                            <td>{{$item->garantia}}</td>
                                            <td>
                                                <button class="btn btn-primary">Editar</button>
                                                <a class="btn btn-danger" href="javascript:Eliminar('{{ route('products.destroy', ['product' => $item->id ])}}')" >Eliminar</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

<script type="text/javascript">

    function Eliminar(url){
        if(confirm('¿Desea eliminar este registro?')) location.href=url;
    }
</script>
@endsection
@section('js')
@endsection