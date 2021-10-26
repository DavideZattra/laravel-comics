@extends('layouts.main')

@section('title', 'Comics')




@section('content')
    <div class="comics-section">
        <section id="jumbotron"></section>
        <section id="main-content">
            <div class="label">
                <h4>current series</h4>
            </div>
            <div class="comic-container">
                @foreach ( $comic_list as $comic)
                    <div class="comic-cover">
                       
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                       
                        <h5>{{ $comic['title'] }}</h5>
                    </div>
                @endforeach
            </div>
            <button>Load more</button>
        </section>
    </div>
@endsection