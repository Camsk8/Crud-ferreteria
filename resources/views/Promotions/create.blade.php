@extends('Template.Template')
@section('plantillaweb')
    <h1>Registro promociones </h1>
    <form action="{{route('promotions.store')}}" method="post">
        {{csrf_field()}}
        <div class="col">
        <label>nombres </label>
        <input type="text" name="nombres">
        </div>
        <div class="col">
            <label>descripcion</label>
            <input type="text" name="descripcion">
        </div>
        <div class="col">
            <label> precio</label>
            <input type="number" name="precio">
        </div>
        <input type="submit" name="btn_enviar" value="Registrar">
    </form>
@endsection