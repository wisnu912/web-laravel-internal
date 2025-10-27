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
<div class="m-2 p-4 mt-8">

   <div class="grid grid-cols-1  gap-4 p-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
      @foreach ($video as $v )
    <div class="bg-gray-200 p-4 h-64 mt-4 shadow-md text-base hover:bg-gray-100 hover:shadow-xl ">
        <p>
             {{ $v->title }}
        </p>

         <video   controls class="w-full h-64 object-cover rounded-t-xl">
                    <source src="{{ asset('storage/' . $v->vidio) }}" type="video/mp4" >
                    Browser Anda tidak mendukung tag video.
                </video>
    </div>
      @endforeach
   </div>

</div>

@endsection()

