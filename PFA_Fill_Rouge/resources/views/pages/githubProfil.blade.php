@extends('components.app')
@section('contant')

    <h1>GitHub</h1>
    <h3>{{$name}}</h3>
    <h5>{{$age}}</h5>
    <ul class="list-group">
        @foreach($media as $inf)
            <li class="list-group-item">{{$inf}}</li>
        @endforeach    
    </ul>

@endsection  