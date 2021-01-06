@extends('layouts.app')
@section('content')

<h2>Aanpassen van Exemplaarnummer: {{ $film->nummer }} </h2>
<p>Waarde 1 voor terugbrengen. Waarde 0 voor huren.</p>

    <form action="{{route('films.update', $film->id)}}" method="POST">
        @csrf
       
        <label for="nummer">Nummer:</label>
        <input type="text" id="nummer" name="nummer" value="{{$film->nummer}}"><br>
        
        <label for="aanwezig">Aanwezig:</label>
        <input type="text" id="aanwezig" name="aanwezig" value="{{$film->aanwezig}} "><br>
        <label for="titelId">titelId:</label>
        <input type="text" id="aanwezig" name="titel_id" value="{{$film->titel->id}} ">
        <br><br> 
        <input type="submit" value="Update" />
        <br>
    </form>

         

    <a href="/films" class="back">Back to all films</a>
@endsection