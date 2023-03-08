@extends('layouts.plantilla')

@section('title','Cursos '.$curso)

@section('content')
<h1>Bienvenido al curso: {{$curso}}</h1> <!--Con blade puedo imprimir variables php usando doble {{}}-->
@endsection
