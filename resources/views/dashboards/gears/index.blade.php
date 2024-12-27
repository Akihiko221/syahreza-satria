@extends('dashboards.layouts.main')

@section('content')
    <section class="text-end">
        <div class="mb-6">
            <a href="{{ route('dashboard.gear.create') }}"
                class="px-4 py-3 text-sm text-white transition duration-300 rounded-lg bg-sky-500 hover:bg-sky-400">Tambah
                Gear
                +</a>
        </div>
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-5 text-start">
            @foreach ($gears as $gear)
                <div class="col-span-1">
                    <div class="p-4 transition-transform transform bg-white shadow-md rounded-xl min-h-[300px]">
                        <img src="{{ asset('images/gear/' . $gear->image) }}" alt="{{ $gear->brand }} {{ $gear->name }}"
                            class="object-cover mb-4 rounded-xl aspect-square" width="250" height="250">
                        <h2 class="mb-0 text-sm font-light text-gray-500">{{ $gear->brand }}</h2>
                        <h2 class="mb-2 text-lg font-bold">{{ $gear->name }}</h2>
                        <p class="text-sm font-light text-gray-500 truncate">{{ $gear->description }}</p>
                        <div class="flex justify-end gap-2 mt-8">
                            <a href="{{ route('dashboard.gear.edit', $gear->id) }}"
                                class="px-2 py-1 text-base text-white bg-yellow-500 rounded-lg hover:bg-yellow-600">Edit</a>
                            <form action="{{ route('dashboard.gear.destroy', $gear->id) }}" method="POST"
                                onsubmit="return confirm('Are you sure you want to delete this gear?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="px-2 py-1 text-base text-white bg-red-500 rounded-lg hover:bg-red-600">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
