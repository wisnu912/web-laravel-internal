<?php

namespace App\Http\Controllers;

use App\Models\upVideo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard.CreateVideo');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
             'title' => 'required|max:255',
             'vidio' => 'required|mimes:mp4,mov,ogg|max:20480'
        ] , [
            'title.required' => 'Title Is Required',
            'title.max' => 'title is too long',
            'vidio.required' => 'Video is Reqiured',
            'vidio.mimes' => 'Invalid Video Format'
        ]);

         $fileName = $request->file('vidio')->getClientOriginalName();
         $extension = $request->file('vidio')->getClientOriginalExtension();

         $path = $request->file('vidio')->storeAs(
         'vidieoss', $fileName . '.' . $extension . time());

         $id = Auth::user()->id;

       $createVideo = upVideo::create([
        'user_id' => $id,
        'title' => $request->title,
        'vidio' => $path
       ]);

       return redirect()->route('dashboard')->with('success' , 'data berhasil create');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
