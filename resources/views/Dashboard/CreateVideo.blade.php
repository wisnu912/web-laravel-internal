@extends('Partials.Layouts')

@section('title'  , 'create video')
@section('content')

<div class="bg-gradient-to-r from-blue-500 to-purple-600 text-white p-6  w-full sm:max-md  md:max-w-lg  rounded-xl mx-auto mt-8 shadow-lg">
    <h1 class="text-2xl font-bold mb-4 flex items-center gap-2">
        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M4 6h16M4 18h16M4 6v12"></path></svg>
        Create Video
    </h1>
    <form action="{{ route('store.video') }}" class="flex flex-col gap-4" method="POST"  enctype="multipart/form-data">

        @csrf
        <div>
            <label for="title" class="block text-sm font-medium mb-1">Title</label>
            <input type="text" name="title" id="title" class="w-full px-4 py-2
            rounded-lg border border-gray-300 focus:outline-none focus:ring-2
             focus:ring-blue-400 text-black" placeholder="Enter video title">

             <div>
                @error('title')
                     <p class="text-start text-red-400 font-bold">{{ $message }}</p>
                @enderror
             </div>
        </div>
        <div>
            <label for="vidio" class="block text-sm font-medium mb-1">Video File</label>
            <input type="file" name="vidio" id="video" class="w-full px-4 py-2
            rounded-lg border border-gray-300 focus:outline-none focus:ring-2
             focus:ring-purple-400 bg-white text-black">
               <div>
                @error('video')
                     <p class="text-start text-red-400 font-bold">{{ $message }}</p>
                @enderror
             </div>
        </div>

        <div class="flex gap-3 mt-4">
            <a href="">
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 transition
            text-white rounded-lg px-6 py-2 font-semibold shadow">Create</button>
            </a>

            <a href="{{ route('dashboard') }}">
            <button type="button" class="bg-gray-200 hover:bg-gray-300
            transition text-gray-800 rounded-lg px-6 py-2 font-semibold
            shadow">Close</button>
            </a>
        </div>
    </form>
</div>

@endsection
