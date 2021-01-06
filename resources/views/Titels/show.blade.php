@extends('layouts.app')
@section('content')

<h2>Details van item: {{ $titel->id }} </h2>
<div class="alert-danger">{{$errors->first() }}</div><br>

    <form action="{{route('titels.destroy', $titel->id)}}" method="POST">
        <div class="titels-details">
            <p>Titel - {{ $titel->titel }}</p>
            <p>Genres:</p>
            <ul>
                @foreach($titel->genres as $genre)
                    <li>{{ $genre }} </li>
                @endforeach
            </ul>
        </div>
        <br>
        @csrf
        @method('DELETE')
        <button>Verwijder Titel</button>
    </form>
    
   

    <a href="/titels" class="back">Back to all titels</a>
@endsection