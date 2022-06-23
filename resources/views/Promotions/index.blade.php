@extends('Template.Template')
@section('plantillaweb')
    <h1>Lista de promocions </h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombres</th>
                <th scope="col">descripcion</th>
                <th scope="col">precio</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($promotions as $promotion)
                <tr>
                    <th scope="row">{{ $promotion->id }}</th>
                    <td>{{ $promotion->nombres }}</td>
                    <td>{{ $promotion->descripcion }}</td>
                    <td>{{ $promotion->precio}}</td>
                  
                    <td>
                <a  class="btn btn-warning btm-sm" href="{{route('promotions.edit',$promotion->id)}}">Editar</a>
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
    {{ $promotions->links() }}

@endsection

