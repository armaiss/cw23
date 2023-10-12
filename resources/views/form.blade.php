@extends('layouts.main')
@section('content')
    <form method="post" action="{{ route('form.temperature') }}">
        @csrf

        @foreach( $names as $name)
            <div class="form-group  container">
                <label for="exampleInputEmail1">{{ ucfirst($name) }}</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="{{ $name }}">

            </div>
        @endforeach
        <button type="submit" class="btn btn-primary ">Submit</button>
    </form>

    @if(session('success'))
        {{ session('success') }}
    @endif
@endsection
