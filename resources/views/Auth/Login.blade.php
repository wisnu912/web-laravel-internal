@extends('Auth.auth')

@section('title', 'login-page')
@section('content')

<div class="bg-gradient-to-r from-gray-400  to-gray-600
shadow-lg p-2 rounded-lg w-1/3 mx-auto mt-10">

@if ($errors->any())
    <div class="bg bg-red-400">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form action="{{ route('login.process') }}" method="POST"
    class="flex flex-col gap-3 m-3 p-1">

        @csrf
        <label for="email" class="text-xl text-white text-start mx-4 font-monospace">Email</label>
        <input type="email" name="email" id="email"
        class="rounded-lg p-1 w-full border border-white focus:outline-none
        focus:ring-2 focus:ring-teal-300 focus:ring-opacity-50 bg-white bg-opacity-80">

         <label for="password" class="text-xl text-white text-start
         mx-4 font-monospace mt-4">Password</label>
        <input type="password" name="password" id="password"
        class="rounded-lg p-1 w-full border border-white focus:outline-none
        focus:ring-2 focus:ring-teal-300 focus:ring-opacity-50 bg-white bg-opacity-80">


            <div>
                <button class="bg-sky-300 text-lg text-white w-full p-2 rounded-lg hover:bg-teal-600
                mt-8 cursor-pointer mb-5">Login</button>
            </div>
    </form>
</div>
@endsection()
