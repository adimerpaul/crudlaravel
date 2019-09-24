<form action="{{route('libro.store')}}" method="post">
    {{csrf_field()}}
    <input type="text" name="titulo" placeholder="titulo"><br>
    <input type="text" name="precio" placeholder="precio">
    <button type="submit">Enviar</button>
</form>
