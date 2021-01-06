@extends('layouts.app')
@section('content')

<h2>Details van Exemplaarnummer: {{ $film->nummer }} </h2>
    <table>
        <tr>
            <td>Nummer:</td>
            <td>{{$film->nummer}}</td>
        </tr>
        <tr>
            <td>Aanwezig:</td>
            <td> {{$film->aanwezig}}</td>
        </tr>
        <tr>
            <td>Titel:</td>
            <td>{{$film->titel->titel}}</td>
        </tr>
        <tr>
            <td>Genres:</td>
            <td>
                <ul>
                    @foreach($film->titel->genres as $genre)
                    <li>{{ $genre }} </li>
                    @endforeach
               </ul>
            </td>
        </tr>
        <tr>
            <td>Verhuren/Lenen:</td>
            <td><a href='/films/edit/{{$film->id}}'>Edit</td>
        </tr>
        <tr>
            <td>Verwijderen:</td>
            <td>
                <form action="{{route('films.destroy', $film->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button>Verwijder Nummer</button>
            </td>
        </tr>
    </table>


    <a href="/films" class="back">Back to all films</a>
@endsection