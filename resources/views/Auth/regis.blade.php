@extends('Auth.auth')

@section('title' ,'Register-page')
@section('content')


<div class="bg-gradient-to-r from-gray-400  to-gray-600
shadow-lg p-2 rounded-md w-82 mx-auto mt-10 sm:w-72 md:w-full lg:w-1/3">
    <form action="{{ route('regis.process') }}" method="POST" class="flex flex-col gap-3 m-3 p-1">
        @csrf

        <label for="name" class=" text-white text-start mx-4
        text-base sm:text-base md:text-md lg:text-xl
        font-monospace">Username</label>
        <input type="text" name="name" id="name"
        class="rounded-lg p-1 w-full border border-white focus:outline-none
        focus:ring-2  focus:ring-teal-300 p-2  focus:ring-opacity-50 bg-white bg-opacity-80"
        value="{{ old('name') }}">
        <div class="text-start">
   @error('name')
            <span class="text-red-500 text-sm mx-4">{{ $message }}</span>
        @enderror

        </div>

        <label for="email" class="text-base sm:text-base md:text-md lg:text-xl
        text-white text-start mx-4 font-monospace">Email</label>
        <input type="email" name="email" id="email"
        class="rounded-lg p-2 w-full border  border-white focus:outline-none
        focus:ring-2 focus:ring-teal-300 focus:ring-opacity-50 bg-white bg-opacity-80"
        value="{{ old('email') }}">

        <div class="text-start">
         @error('email')
            <span class="text-red-500 text-sm mx-4">{{ $message }}</span>
        @enderror
        </div>


         <label for="password" class="text-base sm:text-base md:text-md lg:text-xl text-white text-start
         mx-4 font-monospace mt-4">Password</label>
        <input type="password" name="password" id="password"
        class="rounded-lg p-2 w-full border  border-white focus:outline-none
        focus:ring-2 focus:ring-teal-300 text-monospace focus:ring-opacity-50 bg-white bg-opacity-80" value="{{ old('password') }}">
        <div class="text-start">
          @error('password')
            <span class="text-red-500 text-sm text-start mx-4">{{ $message }}</span>
        @enderror
        </div>


         <label for="password_confirmation" class="text-base sm:text-base md:text-md lg:text-xl text-white text-start
         mx-4 font-monospace mt-4">Confirm Password</label>
        <input type="password" name="password_confirmation" id="password_confirmation"
        class="rounded-lg p-2 w-full border border-white focus:outline-none
        focus:ring-2 focus:ring-teal-300 focus:ring-opacity-50 bg-white     bg-opacity-80" >

        <div class="text-start">
            @error('password.confirmed')
            <span class="text-red-500 text-sm mx-4">{{ $message }}</span>
        @enderror
        </div>


            <div>
                <button class="bg-sky-300 text-white text-lg
                 w-full p-2 rounded-lg hover:bg-sky-500
                mt-8 cursor-pointer mb-5">Register</button>
            </div>
    </form>
</div>
@endsection()
