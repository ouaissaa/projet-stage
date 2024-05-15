@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies pb-2">
            <h2 class="tracking-wider text-yellow-500 font-semibold text-2xl">Popular Movies</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($popularMovies as $ppMov)
                    <x-movie-card :ppMov='$ppMov' :genres='$genres' />
                @endforeach

            </div>
        </div>
        <div class="now-playing mx-auto py-16">
            <h2 class="tracking-wider text-yellow-500 text-2xl font-semibold">Now Playing</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($nowPlaying as $ppMov)
                    <x-movie-card :ppMov='$ppMov' :genres='$genres' />
                @endforeach
            </div>
        </div>
    </div>
@endsection
