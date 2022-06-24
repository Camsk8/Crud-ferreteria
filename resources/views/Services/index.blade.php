@extends('Template.Template')
@section('plantillaweb')
    <h1>Lista de servicios </h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">descripcion</th>
                <th scope="col">tiempo_max</th>
                <th scope="col">costo_extra</th>
                <th scope="col">clave</th>
                <th scope="col">promociones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($services as $service)
                <tr>
                    <th scope="row">{{ $service->id }}</th>
                    <td>{{ $service->nombre }}</td>
                    <td>{{ $service->descripcion }}</td>
                    <td>{{ $service->tiempo_max}}</td>
                    <td>{{ $service->costo_extra}}</td>
                    <td>{{ $service->clave}}</td>
                    <td>{{ $service->promotions_id}}</td>
                    <td>
                <a  class="btn btn-warning btm-sm" href="{{route('services.edit',$service->id)}}">Editar</a>
            </td>
            <td>
                <form action="" method="POST">
                    @csrf
                    @method('DELETE')
                    <a class="btn btn-danger btn-sm" href="#" role="button">Eliminar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $services->links() }}

@endsection

