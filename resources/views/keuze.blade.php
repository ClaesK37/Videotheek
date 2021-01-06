@extends('layouts.app')
@section('content')
<div class="intro">
    <h2>Maak je keuze!</h2>
</div>
<div>
    <form action='/films/zoeken' method="GET">
        @csrf
        <label for="nummer">Geef Nummer in:</label>
        <input type="text" name="nummer"><br>
        
        <br>
       
         <input type="submit" value="zoeken">
    </form>
</div>
<div class="home">
    <br>
    <button><a href="/titels">Overzicht titels</a></button><br><br>
    <button><a href="/titels/create">Titel toevoegen</a></button><br><br>
    <button><a href="/films">Overzicht films</a></button><br><br>
    <button><a href="/films/create">Film toevoegen</a></button><br><br>
</div>

@endsection


