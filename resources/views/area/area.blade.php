@extends('adminlte::page')
@section('content_header')
<h1>Listado de Areas</h1>
@stop
@section('content')

    <table class="table">
        <thead>
            <tr>
            <th scope="col">Id Area</th>
            <th scope="col">Descripcion</th>
            </tr>
        </thead>
        <tbody>
            @php
            @endphp

            @foreach($area as $p)
            <tr>
                <td>{{$p->idArea}}</td>
                <td>{{$p->descripcion}}</td>
                @php
                @endphp
            </tr>
            @endforeach
        </tbody>
    </table>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

