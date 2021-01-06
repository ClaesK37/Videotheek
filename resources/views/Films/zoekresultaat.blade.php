@extends('layouts.app')
@section('content')
 
<h2>Gevonden item:</h2>

<table>
    <tr>
        <th>FilmId </th>
        <th>FilmTitel </th>
        <th>Nummer</th>
        <th>Aanwezig</th>
        
        <th>Details</th>
    </tr>
    @foreach($films as $film)
    <tr>
        <td> {{ $film->titel->id }}</td>
        <td> {{ $film->titel->titel }}</td>
        <td>{{ $film->nummer }}</td>
        <td>{{ $film->aanwezig }}</td>
        
        <td><a href="/films/{{ $film->id }}">Details</a></td>
            
    </tr>
    @endforeach   
</table>

    <p class="mssg">{{ session('mssg') }}</p>
    <a href="/keuze">Terug naar Hoofdmenu</a>
    
@endsection