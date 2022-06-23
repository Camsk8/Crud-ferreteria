@extends('Template.Template')
@section('plantillaweb')
    <h1>Lista de empleados </h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Hora programada</th>
                <th scope="col">Hora de inicio</th>
                <th scope="col">Hora fin</th>
                <th scope="col">Tiempo total</th>
                <th scope="col">Total pago</th>
                <th scope="col">empleado</th>
                <th scope="col">forma de pago</th>
               
            </tr>
        </thead>
        <tbody>
            @foreach ($quotes as $quote)
                <tr>
                    <th scope="row">{{ $quote->id }}</th>
                    <td>{{ $quote->hora_programada }}</td>
                    <td>{{ $quote->hora_inicio}}</td>
                    <td>{{ $quote->hora_fin }}</td>
                    <td>{{ $quote->tiempo_total }}</td>
                    <td>{{ $quote->total_pago }}</td>
                    <td>{{ $quote->employee_id}}</td>
                    <td>{{ $quote->waytopay_id }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $quotes->links() }}

@endsection
