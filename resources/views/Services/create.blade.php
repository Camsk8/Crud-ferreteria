@extends('Template.Template')
@section('plantillaweb')
    <h1>Registro servicios </h1>
    <form action="{{route('services.store')}}" method="post">
        {{csrf_field()}}
        <div class="col">
        <label>nombre </label>
        <input type="text" name="nombre">
        </div>
        <div class="col">
            <label>descripcion</label>
            <input type="text" name="descripcion">
        </div>
        <div class="col">
            <label> tiempo_maximo</label>
            <input type="time" name="tiempo_maximo">
        </div>
        <div class="col">
            <label> costo_extra</label>
            <input type="text" name="costo_extra">
        </div>
        <div class="col">
            <label> clave</label>
            <input type="password" name="clave">
        </div>
        <div class="col">
            <label> promocion</label>
            <input type="number" name="promotions_id">
        </div>
       
        <input type="submit" name="btn_enviar" value="Registrar">
    </form>
@endsection