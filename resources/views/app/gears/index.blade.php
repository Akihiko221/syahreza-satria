@extends('app.layouts.main')

@section('content')
    <section class="pb-8 mb-8 text-base font-light border-b">
        <h2 class="mb-4 text-2xl font-bold">Gear</h2>
        <p>Gear that I use to help me do my productivity tasks. I'll be adding more as I go along. What I use may not be the
            best for you, but it's what works for me.</p>
    </section>

    <section class="pb-8 mb-8 text-base font-light border-b">
        <div class="grid grid-cols-2 gap-5">
            @foreach ($gears as $gear)
                <div class="mb-5">
                    <img src="{{ $gear->image }}" alt="{{ $gear->brand }} {{ $gear->name }}"
                        class="object-cover w-full mb-2 rounded-lg aspect-square">
                    <p class="mb-0 text-sm text-gray-500">{{ $gear->brand }}</p>
                    <h3 class="mb-2 text-lg font-semibold">{{ $gear->name }}</h3>
                    <p class="mb-6 text-sm text-gray-500">{{ $gear->description }}</p>
                    <a href="{{ $gear->link }}" target="_blank"
                        class="flex items-center justify-center gap-2 py-2 text-xs text-white transition duration-500 bg-gray-300 rounded-lg hover:bg-sky-500">
                        <p>Check the product</p>
                        <svg xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 -960 960 960" width="18px"
                            fill="#ffffff">
                            <path
                                d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h560v-280h80v280q0 33-23.5 56.5T760-120H200Zm188-212-56-56 372-372H560v-80h280v280h-80v-144L388-332Z" />
                        </svg>
                    </a>
                </div>
            @endforeach
        </div>
    </section>
@endsection
