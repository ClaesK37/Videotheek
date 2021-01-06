<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Titel;

class TitelController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $titels = Titel::all()->sortBy('titel');
        return view('titels.index', ['titels' => $titels,
        ]);
    }
    
    public function show($id){
        $titel = Titel::findOrFail($id);
        return view('titels.show', ['titel' => $titel]);
    }

    public function create(){
        return view('titels.create');
    }

    public function store(){
        $data = request()->validate([
            'titel' => 'required|unique:titels',
            'genres' => 'required',
        ]);
        Titel::create($data);


        return redirect('/titels')->with('mssg', 'De titel is aangemaakt!');
    }

    public function destroy($id){
        $titel = Titel::findOrFail($id);
        if($titel->films()->count()){
            return back()->withErrors(['Opgelet, verwijderen niet mogelijk er zijn nog films in stock']);
        }
        $titel->delete();

        return redirect('/titels')->with('mssg', 'De titel is verwijderd!');
    }
}
