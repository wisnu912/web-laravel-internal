@extends('Auth.auth')

@section('title', 'login-page')
@section('content')

<div class="bg-gradient-to-r from-blue-400 via-teal-400 to-green-400
shadow-lg p-2 rounded-lg w-1/3 mx-auto mt-10">
    <form action="" class="flex flex-col gap-3 m-3 p-1">

        <label for="email" class="text-xl text-white text-start mx-4 font-monospace">Username</label>
        <input type="email" name="email" id="email"
        class="rounded-lg p-1 w-full border border-white focus:outline-none
        focus:ring-2 focus:ring-teal-300 focus:ring-opacity-50 bg-white bg-opacity-80">

         <label for="password" class="text-xl text-white text-start
         mx-4 font-monospace mt-4">Password</label>
        <input type="password" name="password" id="password"
        class="rounded-lg p-1 w-full border border-white focus:outline-none
        focus:ring-2 focus:ring-teal-300 focus:ring-opacity-50 bg-white bg-opacity-80">

            <div>
                <button class="bg-teal-500 text-lg text-white w-full p-2 rounded-lg hover:bg-teal-600
                mt-8 cursor-pointer mb-5">Login</button>
            </div>
    </form>
</div>
@endsection()
