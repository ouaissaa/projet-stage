<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

use function Pest\Laravel\json;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $popularMovies = Http::withToken(config('services.tmdb.token'))->get('https://api.themoviedb.org/3/movie/popular')->json()['results'];
        $nowPlaying = Http::withToken(config('services.tmdb.token'))->get('https://api.themoviedb.org/3/movie/now_playing')->json()['results'];
        $genresArray = Http::withToken(config('services.tmdb.token'))->get('https://api.themoviedb.org/3/genre/movie/list')->json()['genres'];

        $genres = collect($genresArray)->mapWithkeys(function($genre){
            return [$genre['id'] => $genre['name']];
        });
        // dump($popularMovies);
        // dump($nowPlaying);

        return view('index', [
            'popularMovies' => $popularMovies,
            'nowPlaying' => $nowPlaying,
            'genres' => $genres
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
    public function profile()
    {
        return view('profile');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $movie = Http::withToken(config('services.tmdb.token'))->get('https://api.themoviedb.org/3/movie/'.$id.'?append_to_response=credits,videos,images')->json();
        // dump($movie);
        return view('show',[
            'movie' => $movie,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
