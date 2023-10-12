@extends('layouts.main')

@section('content')
    @foreach($contents as $value)
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$value['title']}}</h5>
            <p class="card-text">{{$value['text']}}</p>

        </div>
    </div>
    @endforeach
@endsection


