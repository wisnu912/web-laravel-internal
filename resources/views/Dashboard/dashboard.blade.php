@extends('Partials.Layouts')

@section('title' , 'Dashboard')
@section('content')

<div class="mx-10 gird gird-cols-1 lg:gird-cols-2 gap-4 ">
    <a href="{{ route('create.video') }}">
   <button class="text-white bg-sky-500 text-base rounded-lg shadow-sm  p-2
    cursor-pointer w-62
    hover:bg-sky-600">Create Video</button>
     </a>

      <a href="{{ route('all.video') }}">
   <button class="text-white bg-teal-500 text-base rounded-lg shadow-sm  p-2
    cursor-pointer w-62 mt-4
    hover:bg-teal-600">All video move</button>
     </a>
</div>

<div class="m-2 mt-8 p-4">
  <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
    @foreach ($video as $v)
    <div class="bg-gray-200 p-4 mt-2 shadow-md text-base hover:bg-gray-100 hover:shadow-xl rounded-xl flex flex-col">
      <p class="font-semibold mb-2">{{ $v->title }}</p>

      <video controls class="w-full h-64 object-cover rounded-lg">
        <source src="{{ asset('storage/' . $v->vidio) }}" type="video/mp4">
        Browser Anda tidak mendukung tag video.
      </video>

      <div class="mt-4 flex gap-2">

          <form action="{{ route('delete' , $v->id) }}" method="POST">
                @csrf
               @method('DELETE')


             <button class="bg-red-400 rounded-md px-3 py-2 flex-1
              text-white hover:bg-red-500 ">
                Delete
             </button>
            </form>

        <a href="{{ route('download.video' , $v->id) }}">

        <button class="bg-green-400 rounded-md px-3 py-2 flex-1 text-white hover:bg-green-500">
            Download
        </button>
        </a>

      </div>
    </div>
    @endforeach
  </div>
</div>


</div>

@endsection()

