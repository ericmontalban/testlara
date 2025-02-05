@extends('master')

@section('contect') 
    <h1>Contacto 1</h1>
    <p>{{$name}}</p>

    @if($name != "Andres")
        Tu nombre no es Andres
    @else 
        <h3>Tu nombre es Andres</h3>
    @endif

    @foreach ([1,2,3,4,5] as $item)
        {{$item}}
    @endforeach
@endsection

    