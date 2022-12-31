<?php

namespace App\Http\Controllers;

use App\Models\user;
use App\Models\artikel;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArtikelController extends Controller
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
        // $user = Auth::user();
        // if($user->is_psikiater){
        //     return view( 'addartikel', [
        //         'isLoggedIn' => Auth::check(),
        //         'user' => Auth::user(),
        //     ]);
        // }

        if (Auth::check()){
            return view( 'addartikel', [
                'isLoggedIn' => Auth::check(),
                'user' => Auth::user(),
            ]);
        } else {
            return redirect('/login');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' =>'required',
            'user_id' => 'required',
            'imgsource' => 'required',
            'body' => 'required'
        ]);

        

        $validatedData['slug'] = Str::slug($validatedData['title']);
        $validatedData['excerpt'] = Str::limit(strip_tags($validatedData['body']), 200);

        artikel::create($validatedData);

        return redirect()->to('/artikel');
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
        artikel::destroy($artikel->id);
        return back();
    }
}
