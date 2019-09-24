@extends('layouts/layout')
@section('content')
    <a href="{{route('libro.create')}}">Crear</a>
    <table border="1">
        <tr>
            <td>id</td>
            <td>titulo</td>
            <td>precio</td>
            <td>Opiones</td>
        </tr>
        @foreach($libros as $libro)
        <tr>
            <td>{{$libro->id}}</td>
            <td>{{$libro->titulo}}</td>
            <td>{{$libro->precio}}</td>
            <td>
                <a href="{{route('libro.show',$libro->id)}}">show</a>
                <a href="{{action('LibroController@edit',$libro->id)}}">Modificar</a>
                <form action="{{action('LibroController@destroy',$libro->id)}}" method="post">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <input type="submit" value="Eliminar">
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
