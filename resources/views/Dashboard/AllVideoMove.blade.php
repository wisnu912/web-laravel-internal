@extends('Partials.Layouts')

@section('title' , 'All-video-move')
@section('content')


  <div class="flex flex-wrap gap-4">
    @foreach ($videos as $v)
        <div class="flex flex-row items-center bg-white rounded-xl shadow-md overflow-hidden w-full sm:w-1/2 lg:w-1/3 p-4">
            <video width="200" height="140" controls class="rounded-lg shadow-sm">
                <source src="{{ asset('storage/' . $v->vidio) }}" type="video/mp4">
                Browser Anda tidak mendukung tag video.
            </video>

            <div class="ml-4 flex flex-col justify-between">
                <h3 class="text-lg font-semibold text-gray-800">{{ $v->title }}</h3>
                <p class="text-sm text-gray-500 mt-1">Durasi: {{ $v->duration ?? '—' }}</p>
            </div>
        </div>
    @endforeach
</div>


@endsection
