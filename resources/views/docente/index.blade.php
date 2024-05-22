@extends('layouts.navbar')

@section('titulo','docente')
@section('titulo-general','Lista de docente')



@section('contenido')

    <a type="button" href="{{route('ci.docente')}}" class="button">Nuevo</a>
    <table border="1">
        <tr>
            <th>nombre</th>
            <th>Profesion</th>

        </tr>

        @foreach ($datos as $dato)
        <tr>
            <td>{{$dato->nombre}} </td>
            <td>{{$dato->profesion}} </td>
        </tr>

        @endforeach

    </table>

@endsection
