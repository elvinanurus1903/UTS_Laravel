<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\genre;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $genre = genre::latest()->paginate(5);
        return view('genre.add_genre', compact('genre'))
                ->with('i', (request()->input('page', 1) - 1) * 10);
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
        $request->validate([
            'jenis_genre'    =>  'required',
        ]);

        $form_data = array(
            'jenis_genre'       =>   $request->jenis_genre,
        );

        genre::create($form_data);

        return redirect('genre')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $genre = \App\genre::findOrFail($id);
        return view('genre.edit_genre', compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_genre)
    {
        
            $request->validate([
                 'jenis_genre'     =>  'required'
            ]);

       $film = genre::find($id_genre);
       $film->jenis_genre = $request->input('jenis_genre');
       $film->save();
       return redirect('genre');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_genre)
    {
         $genre = genre::findOrFail($id_genre);
        $genre->delete();

        return redirect('genre')->with('success', 'Data is successfully deleted');
    }
}
