@php
    $arrayArticoli = config('articoli');
    $articolo = $arrayArticoli[$id];
    //dd($articolo);
@endphp

@extends('layout.user')

@section('titolo')
    {{$articolo['titolo']}}
@endsection

@section('content')

        <div class="articolo">
            <img src="{{$articolo['avatar']}}" alt="">
            <h3>{{$articolo['autore']}}</h3>
            <div class="articolo-info">
                <h1>{{$articolo['titolo']}}</h1>
                <p>{{$articolo['descrizione']}}</p>
                <small>{{$articolo['data']}}</small>
            </div>
        </div>

@endsection
