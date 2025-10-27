@extends('Partials.Layouts')

@section('title' , 'Dashboard')
@section('content')

<div class="mx-10 flex gap-4 ">
    <a href="{{ route('create.video') }}">
   <button class="text-white bg-sky-500 text-base rounded-lg shadow-sm  p-2 cursor-pointer w-62
    hover:bg-sky-600">Create Video</button>
     </a>

      <a href="{{ route('all.video') }}">
   <button class="text-white bg-teal-500 text-base rounded-lg shadow-sm  p-2 cursor-pointer w-62
    hover:bg-teal-600">All video move</button>
     </a>
</div>
<div class="m-2 p-4 mt-8">

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-6">
    @foreach ($video as $v)
        <div class="bg-white rounded-xl shadow-md hover:shadow-xl overflow-hidden
        transition transform hover:-translate-y-1">
            <video
                controls
                class="w-full h-64 object-cover rounded-t-xl"
            >
                <source src="{{ asset('storage/' . $v->vidio) }}" type="video/mp4">
                Browser Anda tidak mendukung tag video.
            </video>

            <div class="p-4">
                <h3 class="text-lg font-semibold text-gray-800 truncate">
                    {{ $v->title }}
                </h3>
            </div>
        </div>
    @endforeach
</div>


</div>

@endsection()

