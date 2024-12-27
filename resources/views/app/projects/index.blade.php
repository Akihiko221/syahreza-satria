@extends('app.layouts.main')

@section('content')
    <section class="pb-8 mb-8 text-base font-light border-b">
        <h2 class="mb-4 text-2xl font-bold">Projects</h2>
        <p>This is the project that i've worked either on my own or with my friends. You can check the description to see
            what is the project. Enjoyyy~~~</p>
    </section>

    <section class="pb-8 mb-8 text-base font-light border-b">
        <div class="grid gap-5 md:grid-cols-2 sm:grid-cols-1">
            @foreach ($projects as $project)
                <div class="mb-5">
                    <img src="{{ asset('images/project/' . $project->image) }}" alt="{{ $project->name }}"
                        class="object-cover w-full mb-4 rounded-lg aspect-video">
                    <p class="mb-2 text-xs text-gray-500">{{ $project->type }}</p>
                    <h3 class="mb-4 text-xl font-semibold">{{ $project->name }}</h3>
                    <p class="mb-6 text-sm text-gray-500">{{ $project->description }}</p>
                    </p>
                    <a href="{{ $project->link }}" target="_blank"
                        class="flex items-center justify-center gap-2 py-2 text-xs text-white transition duration-500 bg-gray-300 rounded-lg hover:bg-sky-500">
                        <p>Check the projects</p>
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
