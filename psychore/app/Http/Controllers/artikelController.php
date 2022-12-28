<?php

namespace App\Http\Controllers;

use App\Models\user;
use App\Models\artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class artikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view( 'artikel-list', [
            'isLoggedIn' => Auth::check(),
            'user' => Auth::user(),
            "title" => "Artikel",
            "artikel" => artikel::latest()->Filter(request(['search']))->paginate(10)->withQueryString()
        ]);
    }

    public function show(artikel $artikel)
    {
        return view( 'artikel', [
            'isLoggedIn' => Auth::check(),
            'user' => Auth::user(),
            "title" => $artikel->title,
            "penulis" => $artikel->user->name,
            "artikel" => $artikel,
            "artikels" => artikel::latest()->Filter(request(['search']))->paginate(5)->withQueryString(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit(artikel $artikel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, artikel $artikel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy(artikel $artikel)
    {
        //
    }
}
