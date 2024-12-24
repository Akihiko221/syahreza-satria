@extends('dashboards.layouts.main')

@section('content')
    <section class="text-end">
        <div class="mb-6">
            <a href="#"
                class="px-4 py-3 text-sm text-white transition duration-300 rounded-lg bg-sky-500 hover:bg-sky-400">Tambah
                Project
                +</a>
        </div>
        <div class="grid grid-cols-1 gap-6 text-start md:grid-cols-2 lg:grid-cols-3">
            <div class="p-4 transition-transform transform bg-white shadow-lg rounded-xl">
                <img src="http://placehold.co/450x250" alt="Product Image" class="object-cover mb-4 rounded-lg">
                <h2 class="text-sm font-light text-gray-600">Brand</h2>
                <h2 class="mb-2 text-xl font-bold">Product 1</h2>
                <p class="text-sm font-light text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Veritatis
                    quia dolorum adipisci aspernatur. Repellat molestiae ipsam assumenda alias suscipit distinctio
                    cupiditate,
                    dolores fugit laboriosam. Unde at dolore voluptatibus labore asperiores.</p>
                <div class="flex justify-end gap-2 mt-4">
                    <a href="#"
                        class="px-3 py-2 text-base text-white transition duration-300 bg-yellow-500 rounded-lg hover:bg-yellow-400">Edit</a>
                    <button
                        class="px-3 py-2 text-base text-white transition duration-300 bg-red-500 rounded-lg hover:bg-red-400">Delete</button>
                </div>
            </div>
        </div>
    </section>
@endsection
