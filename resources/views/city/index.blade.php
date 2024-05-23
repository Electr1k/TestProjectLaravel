@extends('layouts.main')
@section('content')
    <div>

        @foreach($cities as $city)
            <a style="{{ $current_city === $city->name ? "font-weight: bold;" : "" }}">{{ $city->id }}. {{ $city->name }}</a>
            <br>
        @endforeach
    </div>
@endsection
