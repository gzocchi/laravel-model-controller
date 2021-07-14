@extends('layouts.main')

@section('page_title', $pageTitle)

@section('main_content')

    <section class="container">

        <div class="movies_gallery">
                
            @foreach ($movies as $movie)
                <div class="movie_card">
                    @include('partials.movie_card')
                </div>
            @endforeach

        </div>

    </section>
    
@endsection

@section('footer_content')
    @include('partials.footer')
@endsection
