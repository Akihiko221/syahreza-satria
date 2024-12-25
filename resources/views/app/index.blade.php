@extends('app.layouts.main')

@section('content')
    {{-- Description --}}
    <section class="pb-8 mb-8 text-base font-light border-b">
        <p class="mb-4">23 Years old Programmer 🧑‍💻, Photographer 📸 and content creator 👾 based in Bandung ,
            Indonesia 🇮🇩. creating digital products and services under the name of Syahreza Satria.</p>
        <a href="mailto:satriaeza221@gmail.com"
            class="font-medium transition duration-300 text-sky-500 hover:text-sky-400">Interested in doing collab? Contact
            me!</a>
    </section>

    {{-- Projects --}}
    <section class="pb-8 mb-8 font-light border-b">
        <h2 class="mb-4 text-lg font-bold">Latest Project</h2>
        <div class="grid grid-cols-2 gap-5">
            @foreach ($projects as $project)
                <a href="{{ route('project') }}" class="text-sm">
                    <img src="{{ $project->image }}" alt="{{ $project->name }}" class="object-cover rounded-xl aspect-video"
                        height="180" width="250">
                    <p class="mt-5 mb-1 text-xs font-medium text-gray-500">{{ $project->type }}</p>
                    <h3 class="mb-1 text-lg font-semibold">{{ $project->name }}</h3>
                    <p class="text-xs font-light text-gray-500">{{ $project->description }}</p>
                </a>
            @endforeach
        </div>
        <p class="mt-8 text-sm font-normal text-center text-gray-500 transition duration-300 hover:text-sky-500"><a
                href="{{ route('project') }}">See all Project</a></p>
    </section>

    {{-- Streams --}}
    <section class="pb-8 mb-8 border-b">
        <h2 class="mb-2 text-xl font-semibold">Latest Stream</h2>
        <div class="relative overflow-hidden rounded-2xl" style="padding-top: 56.25%;">
            <iframe class="absolute top-0 left-0 w-full h-full" height="288"
                src="https://www.youtube.com/embed/LAgZZ0fUKF4?si=yD0J73IN5FxdJKRk" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
            </iframe>
        </div>
    </section>
@endsection
