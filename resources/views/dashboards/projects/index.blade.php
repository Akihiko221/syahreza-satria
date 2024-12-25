@extends('dashboards.layouts.main')

@section('content')
    <section class="text-end">
        <div class="mb-6">
            <a href="{{ route('dashboard.project.create') }}"
                class="px-4 py-3 text-sm text-white transition duration-300 rounded-lg bg-sky-500 hover:bg-sky-400">Tambah
                Project
                +</a>
        </div>
        <div class="grid grid-cols-1 gap-6 text-start md:grid-cols-2 lg:grid-cols-3">
            @foreach ($projects as $project)
                <div class="p-4 transition-transform transform bg-white shadow-lg rounded-xl">
                    <img src="{{ $project->image ? asset('storage/' . $project->image) : asset('images/default-project.png') }}"
                        alt="{{ $project->name }}" class="object-cover mb-4 rounded-lg">
                    <h2 class="text-sm font-light text-gray-600">{{ $project->type }}</h2>
                    <h2 class="mb-2 text-xl font-bold">{{ $project->name }}</h2>
                    <p class="text-sm font-light text-gray-500">{{ $project->description }}</p>
                    <div class="flex justify-end gap-2 mt-4">
                        <a href="{{ route('dashboard.project.edit', $project->id) }}"
                            class="px-3 py-2 text-base text-white transition duration-300 bg-yellow-500 rounded-lg hover:bg-yellow-400">Edit</a>
                        <form action="{{ route('dashboard.project.destroy', $project->id) }}" method="POST"
                            onsubmit="return confirm('Are you sure you want to delete this project?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="px-3 py-2 text-base text-white bg-red-500 rounded-lg hover:bg-red-600">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
