@extends('Partials.Layouts')

@section('title' , 'Dashboard')
@section('content')

<div class="mx-10 ">
    <a href="{{ route('create.video') }}">
   <button class="text-white bg-sky-500 text-base rounded-lg shadow-sm  p-2 cursor-pointer w-62
    hover:bg-sky-600">Create Video</button>
     </a>
</div>
<div class="m-2 p-4 mt-8">
    <div class="overflow-x-auto rounded-lg shadow-lg bg-gradient-to-r from-blue-700 to-blue-900">
        <table class="min-w-full divide-y divide-gray-200">
            <thead>
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-white uppercase bg-blue-800">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-white uppercase bg-blue-800">
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-white uppercase bg-blue-800">
                        VideoLink
                    </th>
                    <th scope="col" class="px-6 py-3 text-center text-xs font-bold text-white uppercase bg-blue-800">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <tr class="hover:bg-blue-100 transition-colors duration-200">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 text-start">1</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">VT Content</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                        <a href="https://video/internai/detail" class="text-blue-600 hover:text-blue-800 underline transition-colors duration-200">
                            https://video/internai/detail
                        </a>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-center">
                        <div class="flex gap-2 justify-center">
                            <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded shadow transition-colors duration-200 text-xs font-semibold">Delete</button>
                            <button class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded shadow transition-colors duration-200 text-xs font-semibold">Detail</button>
                            <button class="bg-green-500 hover:bg-green-600 text-white px-3 py-1 rounded shadow transition-colors duration-200 text-xs font-semibold">Download</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection()

