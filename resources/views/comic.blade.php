@extends('layouts.main')

@section('title', '{{$comic["title"]}}')




@section('content')
    <div class="single-comic">
        <section id="jumbotron"></section>
        <div class="blue-band">
            <figure>
                <img src="{{ $comic["thumb"] }}" alt="{{ $comic["title"] }}">
            </figure>
        </div>
        <div class="main-content">
            <h2>{{ $comic["title"] }}</h2>
            <p>{{ $comic["description"] }}</p>
            <img src="{{ asset('images/adv.jpg') }}" alt="">
            <p>
                
                @foreach ($comic["artists"] as $artist)

                    <a href="#">{{ $artist }}</a>
                    
                @endforeach
            </p>
            <p>
                @foreach ($comic["writers"] as $writer)

                    <a href="#">{{ $writer }}</a>
                    
                @endforeach
            </p>
        </div>
        @dump($comic)
    </div>
@endsection