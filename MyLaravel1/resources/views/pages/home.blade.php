@extends('layouts.main-layout')
@section('content')

    <div>
        {{-- <img id="jumbotron" src="{{ asset('/storage/assets/jumbotron.jpg') }}" alt="">  --}}
        <img src="{{ asset('/storage/assets/jumbotron.jpg') }}" alt="">
    </div>

    <h1>Hello World {{$name}}</h1>

    <ul>
        @foreach ($data as $d)
            <li>
                <div>{{ $d['title'] }}

                    <div>
                       <img src=" {{ $d['thumb'] }}" alt="">
                    </div>
                
                </div>
                
            </li>
        @endforeach
    </ul>
@endsection