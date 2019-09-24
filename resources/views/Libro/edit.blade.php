<form action="{{route('libro.update',$libro->id)}}" method="post">
    {{csrf_field()}}
    {{method_field('PATCH')}}
    <input type="text" name="titulo" placeholder="titulo" value="{{$libro->titulo}}"><br>
    <input type="text" name="precio" placeholder="precio" value="{{$libro->precio}}"><br>
    <button type="submit">Modificar</button>
</form>
