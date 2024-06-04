<div>
    <div class="relative mt-3 md:mt-0">
        <input wire:model='input' type="text"
            class="bg-neutral-800 focus:ring-yellow-500 focus:ring-2 outline-none rounded-full w-72 px-4 pl-6 py-2"
            placeholder='Search'>
    </div>
    <div class="absolute bg-neutral-800 text-sm rounded w-72 mt-4">
        <ul>
            <li class="border-b border-neutral-600">
                <a href="#" class="block hover:bg-neutral-600 px-3 py-3">{{ $input }}</a>
            </li>
            <li class="border-b border-neutral-600">
                <a href="#" class="block hover:bg-neutral-600 px-3 py-3">dune</a>
            </li>
            <li class="border-b border-neutral-600">
                <a href="#" class="block hover:bg-neutral-600 px-3 py-3">dune</a>
            </li>
        </ul>
    </div>
</div>

