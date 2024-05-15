@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-neutral-700">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <img src={{ 'https://image.tmdb.org/t/p/w500/' . $movie['poster_path'] }} alt={{ $movie['title'] }}
                class="w-96">
            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold">{{ $movie['title'] }}</h2>
                <div class="flex items-center text-neutral-400 text-sm mt-2">
                    <svg class="w-4" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 47.94 47.94">
                        <path
                            d="m26.285 2.486 5.407 10.956a2.58 2.58 0 0 0 1.944 1.412l12.091 1.757c2.118.308 2.963 2.91 1.431 4.403l-8.749 8.528a2.582 2.582 0 0 0-.742 2.285l2.065 12.042c.362 2.109-1.852 3.717-3.746 2.722l-10.814-5.685a2.585 2.585 0 0 0-2.403 0l-10.814 5.685c-1.894.996-4.108-.613-3.746-2.722l2.065-12.042a2.582 2.582 0 0 0-.742-2.285L.783 21.014c-1.532-1.494-.687-4.096 1.431-4.403l12.091-1.757a2.58 2.58 0 0 0 1.944-1.412l5.407-10.956c.946-1.919 3.682-1.919 4.629 0z"
                            style="fill:#ffd666" />
                    </svg>
                    <span class="ml-1">{{ number_format($movie['vote_average'], 1) }}</span>
                    <span class="mx-1">|</span>
                    <span>{{ Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}</span>
                    <span class="mx-1">|</span>
                    <span>
                        @foreach ($movie['genres'] as $genre)
                            {{ $genre['name'] }}@if (!$loop->last)
                                ,
                            @endif
                        @endforeach
                    </span>
                </div>
                <p class="text-neutral-400 mt-8">
                    {{ $movie['overview'] }}
                </p>
                <div class="mt-12">
                    <h4 class="text-white font-semibold">Featured Cast</h4>
                    <div class="flex mt-4">
                        @foreach ($movie['credits']['crew'] as $crew)
                            @if ($loop->index < 3)
                                <div class="mr-8">
                                    <div>{{ $crew['name'] }}</div>
                                    <div class="text-sm text-neutral-400">{{ $crew['job'] }}</div>
                                </div>
                            @endif
                        @endforeach

                    </div>
                </div>
                @if (count($movie['videos']['results']) > 0)
                    <div>
                        <div class="mt-12 flex justify-between">
                            <a href="https://youtube.com/watch?v={{ $movie['videos']['results'][0]['key'] }}"
                                target="_blank"
                                class="inline-flex items-center bg-yellow-500 text-neutral-800 rounded font-semibold px-5 hover:bg-yellow-600 transition ease-in-out duration-200">
                                <svg class="w-10" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" fill="#262626"
                                    stroke="#262626" stroke-width="2.5  " viewBox="-3.6 -3.6 67.2 67.2">
                                    <path
                                        d="m45.563 29.174-22-15A1 1 0 0 0 22 15v30a.999.999 0 0 0 1.563.826l22-15a1 1 0 0 0 0-1.652zM24 43.107V16.893L43.225 30 24 43.107z" />
                                    <path
                                        d="M30 0C13.458 0 0 13.458 0 30s13.458 30 30 30 30-13.458 30-30S46.542 0 30 0zm0 58C14.561 58 2 45.439 2 30S14.561 2 30 2s28 12.561 28 28-12.561 28-28 28z" />
                                </svg>
                                <span class="ml-3 mb-1 font-bold">play trailer</span>
                            </a>
                            <div class=""><button type="button"
                                    class="inline-block rounded-full border-2 border-success transition duration-150 ease-in-out dark:hover:bg-yellow-600 dark:focus:bg-yellow-500"
                                    data-twe-ripple-init>
                                    
                                    <svg fill="#000000" class="" width="70px" height="70px" viewBox="0 0 256 256" id="Flat" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M243.65527,126.37561c-.33886-.7627-8.51172-18.8916-26.82715-37.208-16.957-16.96-46.13281-37.17578-88.82812-37.17578S56.12891,72.20764,39.17188,89.1676c-18.31543,18.31641-26.48829,36.44531-26.82715,37.208a3.9975,3.9975,0,0,0,0,3.249c.33886.7627,8.51269,18.88672,26.82715,37.19922,16.957,16.95606,46.13378,37.168,88.82812,37.168s71.87109-20.21191,88.82812-37.168c18.31446-18.3125,26.48829-36.43652,26.82715-37.19922A3.9975,3.9975,0,0,0,243.65527,126.37561Zm-32.6914,34.999C187.88965,184.34534,159.97656,195.99182,128,195.99182s-59.88965-11.64648-82.96387-34.61719a135.65932,135.65932,0,0,1-24.59277-33.375A135.63241,135.63241,0,0,1,45.03711,94.61584C68.11133,71.64123,96.02344,59.99182,128,59.99182s59.88867,11.64941,82.96289,34.624a135.65273,135.65273,0,0,1,24.59375,33.38379A135.62168,135.62168,0,0,1,210.96387,161.37463ZM128,84.00061a44,44,0,1,0,44,44A44.04978,44.04978,0,0,0,128,84.00061Zm0,80a36,36,0,1,1,36-36A36.04061,36.04061,0,0,1,128,164.00061Z"/>
                                      </svg>
                                </button>
                                <button type="button"
                                    class="inline-block rounded-full border-2 border-success px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-success transition duration-150 ease-in-out hover:border-success-600 hover:bg-success-50/50 hover:text-success-600 focus:border-success-600 focus:bg-success-50/50 focus:text-success-600 focus:outline-none focus:ring-0 active:border-success-700 active:text-success-700 motion-reduce:transition-none dark:hover:bg-green-950 dark:focus:bg-green-950"
                                    data-twe-ripple-init>
                                    Success
                                </button>
                            </div>

                        </div>
                        <div>

                        </div>
                    </div>
                @endif

            </div>
        </div>
    </div>
    <div class="movie-cast">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($movie['credits']['cast'] as $cast)
                    @if ($loop->index < 10)
                        <div class="mt-8">
                            <a href="#">
                                <img class="hover:opacity-75 transition ease-in-out duration-200 w-80"
                                    src="{{ 'https://image.tmdb.org/t/p/w300/' . $cast['profile_path'] }}"
                                    alt={{ $cast['name'] }}>
                            </a>
                            <div class="mt-2">
                                <a href="#" class="text-lg mt-2 hover:text-yellow-500">{{ $cast['name'] }}</a>
                                <div class="flex items-center text-neutral-400 text-sm mt-1">
                                    <span>{{ $cast['character'] }}</span>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
        </div>
        <div>
            <div class="movie-pictures border-t-0">
                <div class="container mx-auto px-4 py-16">
                    <h2 class="text-4xl font-semibold">Images</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        @foreach ($movie['images']['backdrops'] as $image)
                            @if ($loop->index < 9)
                                <div class="mt-8">
                                    <img class="hover:opacity-75 transition ease-in-out duration-200"
                                        src="{{ 'https://image.tmdb.org/t/p/w500/' . $image['file_path'] }}"
                                        alt="image">
                                </div>
                            @endif
                        @endforeach

                    </div>
                </div>
            </div>
        @endsection
