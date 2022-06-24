@extends('Template.Template')
@section('plantillaweb')
    <h1>Editar servicios </h1>
    <form action="{{route('services.update',$services->id)}}" method="post">
        @method('PUT')
        {{csrf_field()}}
        
        <div class="col">
        <label>nombre </label>
        <input type="text" name="nombre" value="{{$services->nombre}}">
        </div>
        <div class="col">
            <label>descripcion</label>
            <input type="text" name="descripcion"value="{{$services->descripcion}}">
        </div>
        <div class="col">
            <label> tiempo_maximo</label>
            <input type="time" name="tiempo_maximo" value="{{$services->tiempo_maximo}}">
        </div>
        <div class="col">
            <label> costo_extra</label>
            <input type="number" name="costo_extra" value="{{$services->costo_extra}}">
        </div>
        <div class="col">
            <label> clave</label>
            <input type="password" name="clave" value="{{$services->clave}}">
        </div>
        <div class="col">
            <label> Promocion</label>
            <input type="number" name="promotions_id" value="{{$services->promotions_id}}">
        </div>
        <input type="submit" name="btn_enviar" value="Actualizar">
    </form>
@endsection