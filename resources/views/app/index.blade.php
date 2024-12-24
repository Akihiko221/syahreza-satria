@extends('app.layouts.main')

@section('content')
    {{-- Description --}}
    <section class="pb-8 mb-8 text-base font-light border-b">
        <p class="mb-4">23 Years old Programmer 🧑‍💻, Photographer 📸 and content creator 👾 based in Bandung ,
            Indonesia 🇮🇩.
            making a living by creating digital products and services under the name of Syahreza Satria.</p>
        <a href="mailto:satriaeza221@gmail.com"
            class="font-medium transition duration-300 text-sky-500 hover:text-sky-400">Interested in doing a collab
            together? Contact
            me!</a>
    </section>

    {{-- Projects --}}
    <section class="pb-8 mb-8 font-light border-b">
        <h2 class="mb-4 text-lg font-bold">Latest Project</h2>
        <div class="grid grid-cols-2 gap-5">
            <a href="#" class="text-sm">
                <img src="https://placehold.co/200x200" alt="Project 1" class="object-cover mb-2 rounded-xl aspect-video"
                    height="180" width="250">
                <p class="mb-2 text-xs font-medium text-gray-500">Type</p>
                <h3 class="mb-4 text-lg font-semibold">Project 1</h3>
                <p class="text-sm text-gray-500">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque aut cum
                    tenetur! Saepe quam error minus tempore commodi provident voluptates?</p>
            </a>
        </div>
        <p class="mt-8 text-sm font-normal text-center text-gray-500 transition duration-300 hover:text-sky-500"><a
                href="#">See all Project</a></p>
    </section>

    {{-- Streams --}}
    <section class="pb-8 mb-8 border-b">
        <h2 class="mb-2 text-xl font-semibold">Latest Stream</h2>
        <iframe height="288" src="https://www.youtube.com/embed/LAgZZ0fUKF4?si=yD0J73IN5FxdJKRk"
            title="YouTube video player" frameborder="0" class="w-full rounded-2xl"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

    </section>
@endsection
