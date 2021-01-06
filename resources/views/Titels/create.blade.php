@extends('layouts.app')
@section('content')

    <div class="wrapper create-titel">
        <h2>Creëer nieuwe titel.</h2>
        <form action="/titels" method="POST">
            @csrf
            <label for="titel">Geef Titel In:</label>
            <input type="text" id="titel" name="titel">
            @error('titel')
            <div class="alert-danger"> {{ $message }}</div>
            @enderror

            <fieldset>
                <label>Genres:</label><br>
                <input type="checkbox" name="genres[]" value="Triller">Triller<br />
                <input type="checkbox" name="genres[]" value="Actie">Actie<br />
                <input type="checkbox" name="genres[]" value="Komedie">Komedie<br />
                <input type="checkbox" name="genres[]" value="Science Fiction">Science Fiction<br />
                <input type="checkbox" name="genres[]" value="Romantiek">Romantiek<br />
                <input type="checkbox" name="genres[]" value="Drama">Drama<br />
                <input type="checkbox" name="genres[]" value="Detective">Detective<br />
            </fieldset>
            @error('genres')
            <div class="alert-danger"> {{ $message }}</div>
            @enderror

            <br>
            <br>
            <input type="submit" value="Voeg Toe">
        </form>
    </div>
    <a href="/keuze" class="back">Back to home</a>
@endsection
