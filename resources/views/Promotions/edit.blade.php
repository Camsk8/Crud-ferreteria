@extends('Template.Template')
@section('plantillaweb')
    <h1>Editar promociones </h1>
    <form action="{{route('promotions.update',$promotions->id)}}" method="post">
        @method('PUT')
        {{csrf_field()}}
        
        <div class="col">
        <label>nombres </label>
        <input type="text" name="nombres" value="{{$promotions->nombres}}">
        </div>
        <div class="col">
            <label>descripcion</label>
            <input type="text" name="descripcion"value="{{$promotions->descripcion}}">
        </div>
        <div class="col">
            <label> precio</label>
            <input type="number" name="precio" value="{{$promotions->precio}}">
        </div>
        <input type="submit" name="btn_enviar" value="Actualizar">
    </form>
@endsection