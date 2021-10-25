@extends('layouts.main')

@section('title', 'Comics')




@section('content')
    <div class="content">
        <div></div>
        <h3>current series</h3>
        <div class="comic-container">
            @foreach ( $comic_list as $comic)
                <div class="comic-card">
                    <div class="comic-cover">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                    </div>
                    <h5>{{ $comic['title'] }}</h5>
                </div>
            @endforeach
        </div>
    </div>
@endsection