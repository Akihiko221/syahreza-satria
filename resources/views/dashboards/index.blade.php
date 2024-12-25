@extends('dashboards.layouts.main')

@section('content')
    <section class="grid gap-8 md:grid-cols-3 sm:grid-cols-1">
        <a href="{{ route('dashboard.gear') }}" class="p-8 bg-white rounded-xl">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-2xl font-bold">Gear</h2>
                <h2 class="text-2xl font-medium">{{ $gears }}</h2>
            </div>
            <p class="text-base font-light">Pengelolaan gear yang dipakai</p>
        </a>
        <a href="{{ route('dashboard.project') }}" class="p-8 bg-white rounded-xl">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-2xl font-bold">Projects</h2>
                <h2 class="text-2xl font-medium">{{ $projects }}</h2>
            </div>
            <p class="text-base font-light">Pengelolaan proyek yang telah dibuat</p>
        </a>
    </section>
@endsection
