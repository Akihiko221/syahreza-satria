@extends('dashboards.layouts.main')

@section('content')
    <section class="p-8 bg-white rounded-xl">
        <form action="{{ route('dashboard.project.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="space-y-4">
                <div class="pb-8 border-gray-900/10">
                    <h2 class="font-semibold text-gray-900 text-base/7">Project</h2>
                    <p class="mt-1 text-gray-600 text-sm/6">Masukkan project yang telah diselesaikan.</p>

                    <div class="grid grid-cols-1 mt-10 gap-x-6 gap-y-8 sm:grid-cols-6">
                        {{-- Type --}}
                        <div class="sm:col-span-full md:col-span-2">
                            <label for="type" class="block font-medium text-gray-900 text-sm/6">Type</label>
                            <div class="mt-2">
                                <div
                                    class="flex items-center pl-3 bg-white rounded-md outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                    <div class="text-base text-gray-500 select-none shrink-0 sm:text-sm/6">
                                    </div>
                                    <input type="text" name="type" id="type"
                                        class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6"
                                        placeholder="Personal">
                                </div>
                            </div>
                        </div>

                        {{-- Project Name --}}
                        <div class="sm:col-span-full md:col-span-2">
                            <label for="name" class="block font-medium text-gray-900 text-sm/6">Project Name</label>
                            <div class="mt-2">
                                <div
                                    class="flex items-center pl-3 bg-white rounded-md outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                    <div class="text-base text-gray-500 select-none shrink-0 sm:text-sm/6">
                                    </div>
                                    <input type="text" name="name" id="name"
                                        class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6"
                                        placeholder="Project Pribadi">
                                </div>
                            </div>
                        </div>

                        {{-- Description --}}
                        <div class="sm:col-span-full md:col-span-4">
                            <label for="description" class="block font-medium text-gray-900 text-sm/6">Description</label>
                            <div class="mt-2">
                                <textarea name="description" id="about" rows="4"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
                            </div>
                            <p class="mt-3 text-gray-600 text-sm/6">Berikan deskripsi singkat dari gear yang digunakan.</p>
                        </div>

                        {{-- Image --}}
                        <div class="sm:col-span-full md:col-span-4">
                            <label for="photo" class="block font-medium text-gray-900 text-sm/6">Photo</label>
                            <div class="flex items-center mt-2 gap-x-3">
                                <!-- Tempat untuk pratinjau gambar -->
                                <div id="preview-container"
                                    class="flex items-center justify-center w-16 h-16 overflow-hidden bg-gray-100 rounded-full">
                                    <svg id="default-icon" class="w-10 h-10 text-gray-300" viewBox="0 0 24 24"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <!-- Label untuk tombol unggah -->
                                <label for="photo-upload"
                                    class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 cursor-pointer">
                                    Change
                                </label>
                                <!-- Input file -->
                                <input id="photo-upload" name="image" type="file" accept="image/*" class="hidden" />
                            </div>
                        </div>

                        {{-- Link --}}
                        <div class="sm:col-span-full md:col-span-4">
                            <label for="link" class="block font-medium text-gray-900 text-sm/6">Link</label>
                            <div class="mt-2">
                                <div
                                    class="flex items-center pl-3 bg-white rounded-md outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                    <div class="text-base text-gray-500 select-none shrink-0 sm:text-sm/6">
                                    </div>
                                    <input type="text" name="link" id="link"
                                        class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6"
                                        placeholder="https://instagram.com/syahreza_satria/">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-end mt-6 gap-x-6">
                <a href="{{ route('dashboard.project') }}" class="font-semibold text-gray-900 text-sm/6">Cancel</a>
                <button type="submit"
                    class="px-3 py-2 text-sm font-semibold text-white bg-indigo-600 rounded-md shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
            </div>
        </form>
    </section>


    <script>
        // Menambahkan fungsi untuk pratinjau gambar
        document.getElementById('photo-upload').addEventListener('change', function(event) {
            const file = event.target.files[0];
            const previewContainer = document.getElementById('preview-container');
            const defaultIcon = document.getElementById('default-icon');

            // Hapus ikon default jika file diunggah
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    // Buat elemen img untuk pratinjau
                    let img = document.createElement('img');
                    img.src = e.target.result;
                    img.className = 'w-16 h-16 rounded-full object-cover'; // Styling gambar
                    // Kosongkan container dan tambahkan gambar
                    previewContainer.innerHTML = '';
                    previewContainer.appendChild(img);
                };
                reader.readAsDataURL(file);
            } else {
                // Jika tidak ada file, kembalikan ke ikon default
                previewContainer.innerHTML = '';
                previewContainer.appendChild(defaultIcon);
            }
        });
    </script>
@endsection
