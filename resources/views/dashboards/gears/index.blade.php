@extends('dashboards.layouts.main')

@section('content')
    <section class="text-end">
        <div class="mb-6">
            <a href="#"
                class="px-4 py-3 text-sm text-white transition duration-300 rounded-lg bg-sky-500 hover:bg-sky-400">Tambah
                Gear
                +</a>
        </div>
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-5 text-start">
            <div class="col-span-1">
                <div class="p-4 transition-transform transform bg-white shadow-md rounded-xl">
                    <img src="http://placehold.co/400x400" alt="Gambar Produk 1" class="mb-4 rounded-xl">
                    <h2 class="mb-0 text-sm font-light text-gray-500">Brand</h2>
                    <h2 class="mb-2 text-lg font-bold">Product 1</h2>
                    <p class="text-sm font-light text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Nostrum,
                        obcaecati accusantium? Numquam recusandae repellendus praesentium similique architecto, maxime saepe
                        sed!.</p>
                    <div class="flex justify-end gap-2 mt-8">
                        <a href="#"
                            class="px-2 py-1 text-base text-white bg-yellow-500 rounded-lg hover:bg-yellow-600">Edit</a>
                        <button
                            class="px-2 py-1 text-base text-white bg-red-500 rounded-lg hover:bg-red-600">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
