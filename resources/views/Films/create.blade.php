@extends('layouts.app')
@section('content')

<div class="wrapper create-film">
    <h2>Creëer nieuwe film.</h2> 
    <form action="/films" method="POST">
        @csrf
        <label for="nummer">Geef Nummer in:</label>
        <input type="text" id="nummer" name="nummer"><br>
        @error('nummer')
        <div class="alert-danger"> {{ $message }}</div>
        @enderror
        
        <!--<label for="aanwezig">Aanwezig:</label>
        <input type="text" id="aanwezig" name="aanwezig" placeholder="typ 1"><br>-->
        
        <label for="titel_id">Keuze titel:</label>
        <select name="titel_id" id="titel_id">
            @foreach ($titels as $titel )
                <option value="{{$titel->id}}">{{$titel->titel }}</option>
                
            @endforeach
        </select>
        @error('titel_id')
        <div class="alert-danger"> {{ $message }}</div>
        @enderror


        <br>
        <br>
        <input type="submit" value="Voeg Toe">
    </form>
</div>
<a href="/films" class="back">Back to all films</a>

    
@endsection