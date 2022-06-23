@extends('Template.Template')
@section('plantillaweb')
    <h1>Lista de empleados </h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">telefono</th>
                <th scope="col">Direccion</th>
                <th scope="col">Fecha nacimiento</th>
                <th scope="col">salario</th>
                <th scope="col">Hora de inicio</th>
                <th scope="col">Hora de salida</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
                <tr>
                    <th scope="row">{{ $employee->id }}</th>
                    <td>{{ $employee->nombres }}</td>
                    <td>{{ $employee->apellidos }}</td>
                    <td>{{ $employee->telefono }}</td>
                    <td>{{ $employee->direccion }}</td>
                    <td>{{ $employee->fecha_nacimiento }}</td>
                    <td>{{ $employee->salario }}</td>
                    <td>{{ $employee->hora_inicio }}</td>
                    <td>{{ $employee->hora_salida }}</td>
                    <td>
                <a  class="btn btn-warning btm-sm" href="{{route('employee.edit',$employee)}}">Editar</a>
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
    {{ $employees->links() }}

@endsection

