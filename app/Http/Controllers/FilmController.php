<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Titel;

class FilmController extends Controller
{
   
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $films = Film::all();
        $titels = Titel::all()->sortBy('titel');
        return view('films/index', ['films' => $films], ['titels' => $titels]);
    }

    public function show($id){
        $film = Film::findOrFail($id);
        return view('films.show', ['film' => $film]);
    }

    public function edit($id){
        $film = Film::findOrFail($id);
        return view('films.edit', ['film' => $film]);
    }

    public function create(){
        return view('films.create');
    }

    public function store(){
        $data = request()->validate([
            'nummer' => 'required|min:2|max:5|unique:films',
            //'aanwezig' => 'required',
            'titel_id' => 'required',
        ]);
        Film::create($data);
        return redirect('/films')->with('mssg', 'De film is aangemaakt!');
    }

    public function destroy($id){
        $film = Film::findOrFail($id);
        $film->delete();

        return redirect('/films')->with('mssg', 'De film is verwijderd!');
        
    }

    public function list(){
        $films = Film::all();
        $titels = Titel::all();
        return view('/films/create', ['films' => $films], ['titels' => $titels]);

    }

    public function search(){
        $titels = Titel::all()->sortBy('titel');
        $zoek_nummer = $_GET['nummer'];
        $films = Film::where('nummer', '=', $zoek_nummer)->get();
        return view('/films/zoekresultaat', ['films' => $films], ['titels' => $titels]);
    }


    public function update(Request $request, $id)
    {
    $data = request()->validate([
        'nummer' => 'required',
        'aanwezig' => 'required',
        'titel_id' => 'required',
    ]);

    Film::whereId($id)->update($data);

    return redirect('/films')->with('mssg', 'De film is aangepast!');
    }
}
