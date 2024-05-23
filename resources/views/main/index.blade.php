@extends('layouts.main')
@section('content')
    <div>
        @foreach($cities as $city)
            <a href="{{ route('city.index', $city->name) }}">{{ $city->id }}. {{ $city->name }}</a>
            <br>
        @endforeach
    </div>
@endsection
