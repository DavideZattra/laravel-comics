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
                        <h5>Art by:</h5>
                        <p>
                            @foreach ($comic["artists"] as $artist)

                                <a href="#">{{ $artist }}</a>,
                    
                            @endforeach
                        </p>
                    </div>
                    <div class="writers">
                        <h5>written by:</h5>
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
                        <h5>Series:</h5>
                        <p><a href="#">{{ $comic["series"] }}</a></p>
                    </div>
                    <div class="price">

                        <h5>U.S. Price:</h5>
                        <p>{{ $comic["price"] }}</p>

                    </div>
                    <div class="sale">
                        <h5>On Sale Date:</h5>
                        <p>{{ $comic["sale_date"] }}</p>
                    </div>
                </div>
            </div>
            
            
        </div>
        @dump($comic)
    </div>
@endsection