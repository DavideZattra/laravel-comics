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
            <div class="comic-description">
                <div class="left-side">
                    
                    <h2>{{ $comic["title"] }}</h2>
                    <div class="availability">
                        <div class="status">
                            <p>Us price {{ $comic["price"] }}</p>
                            <p>Available</p>
                        </div>
                        <div class="check">
                            <p>Check Availability &downarrow;</p>
                        </div>
                    </div>
                    <p>{{ $comic["description"] }}</p>

                </div>
                <div class="right-side">
                    
                    <img src="{{ asset('images/adv.jpg') }}" alt="">

                </div>
            </div>

            <div class="comic-spec">
                <div class="left-side">
                    <h2>Talent</h2>
                    <div class="artist">
                        <p>Art by:</p>
                        <p>
                            @foreach ($comic["artists"] as $artist)

                                <a href="#">{{ $artist }}</a>,
                    
                            @endforeach
                        </p>
                    </div>
                    <div class="writers">
                        <p>written by:</p>
                        <p>
                            @foreach ($comic["writers"] as $writer)

                                <a href="#">{{ $writer }}</a>,
                    
                            @endforeach
                        </p>
                    </div>
                </div>
                <div class="right-side">
                    <h2>Specs</h2>
                    <div class="series">
                        
                    </div>
                    <div class="price">

                    </div>
                    <div class="sale">

                    </div>
                </div>
            </div>
            
            
        </div>
        @dump($comic)
    </div>
@endsection