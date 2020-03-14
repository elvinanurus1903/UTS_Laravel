<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $film = \App\Film::when($request->search, function($query) use($request){
            $query->where('judul', 'LIKE', '%'.$request->search.'%')
            ->orWhere('pemain', 'LIKE', '%'.$request->search.'%')
            ->orWhere('genre', 'LIKE', '%'.$request->search.'%');
        })->join('genre', 'id_genre', '=', 'films.genre')->orderBy('id', 'asc')->paginate(5);

        return view('film.index', compact('film'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     function login(){
        return view('user.login');
    }
    function register(){
        return view('user.register');
    }
    public function create()
    {
         $genre = \App\genre::all();
        return view('film.create')->with('genre', $genre);
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
            'kode'    =>  'required',
            'judul'     =>  'required',
            'pemain'    =>  'required',
            'sinopsis'     =>  'required',
            'tahun'     =>  'required',
            'genre'    =>  'required',
            'image'         =>  'required|image|max:2048'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(
            'kode'       =>   $request->kode,
            'judul'        =>   $request->judul,
            'pemain'       =>   $request->pemain,
            'sinopsis'        =>   $request->sinopsis,
            'tahun'        =>   $request->tahun,
            'genre'        =>   $request->genre,
            'image'            =>   $new_name
        );

        Film::create($form_data);

        return redirect('film')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $film = Film::findOrFail($id);
        return view('film.view', compact('film'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $genre = \App\genre::all();
        $film = \App\Film::findOrFail($id);
        return view('film.edit', compact('film'))->with('genre', $genre);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
            'kode'    =>  'required',
            'judul'     =>  'required',
            'pemain'    =>  'required',
            'sinopsis'     =>  'required',
            'tahun'     =>  'required',
            'genre'    =>  'required',
            'image'         =>  'required|image|max:2048'
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else
        {
            $request->validate([
            'kode'    =>  'required',
            'judul'     =>  'required',
            'pemain'    =>  'required',
            'sinopsis'     =>  'required',
            'tahun'     =>  'required',
            'genre'    =>  'required',
            ]);
        }

        $form_data = array(
            'kode'       =>   $request->kode,
            'judul'        =>   $request->judul,
            'pemain'       =>   $request->pemain,
            'sinopsis'        =>   $request->sinopsis,
            'tahun'        =>   $request->tahun,
            'genre'        =>   $request->genre,
            'image'            =>   $image_name
        );
  
        Film::whereId($id)->update($form_data);

        return redirect('film')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $film = Film::findOrFail($id);
        $film->delete();

        return redirect('film')->with('success', 'Data is successfully deleted');
    }
}
