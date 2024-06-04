<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Http;
use Livewire\Component;


class Search extends Component
{
    public $input = 'hellow there';

    public function render()
    {
        $searchResults = [];

        $searchResults = Http::withToken(config('services.tmdb.token'))->get('https://api.themoviedb.org/3/movie/popular')->json()['results'];


        return view('livewire.search');
    }
}
