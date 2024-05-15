<div class="mt-8">
    <a href="{{route('movie.show', $ppMov['id'])}}">
        <img class="hover:opacity-75 transition ease-in-out duration-200"
            src={{ 'https://image.tmdb.org/t/p/w500/' . $ppMov['poster_path'] }} alt={{ $ppMov['title'] }}>
    </a>
    <div class="mt-2">
        <a href="{{route('movie.show', $ppMov['id'])}}" class="text-lg mt-2 hover:text-yellow-500">{{ $ppMov['title'] }}</a>
        <div class="flex items-center text-neutral-400 text-sm mt-1">
            <svg class="w-4" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 47.94 47.94">
                <path
                    d="m26.285 2.486 5.407 10.956a2.58 2.58 0 0 0 1.944 1.412l12.091 1.757c2.118.308 2.963 2.91 1.431 4.403l-8.749 8.528a2.582 2.582 0 0 0-.742 2.285l2.065 12.042c.362 2.109-1.852 3.717-3.746 2.722l-10.814-5.685a2.585 2.585 0 0 0-2.403 0l-10.814 5.685c-1.894.996-4.108-.613-3.746-2.722l2.065-12.042a2.582 2.582 0 0 0-.742-2.285L.783 21.014c-1.532-1.494-.687-4.096 1.431-4.403l12.091-1.757a2.58 2.58 0 0 0 1.944-1.412l5.407-10.956c.946-1.919 3.682-1.919 4.629 0z"
                    style="fill:#ffd666" />
            </svg>
            <span class="ml-1">{{ number_format($ppMov['vote_average'], 1) }}</span>
            <span class="mx-1">{{ Carbon\Carbon::parse($ppMov['release_date'])->format('M d, Y') }}</span>
            <span></span>
        </div>
        <div class="text-neutral-400 text-sm">
            @foreach ($ppMov['genre_ids'] as $genre)
                {{ $genres->get($genre) }}@if (!$loop->last)
                    ,
                @endif
            @endforeach
        </div>
    </div>
</div>
