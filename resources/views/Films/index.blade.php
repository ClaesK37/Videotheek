@extends('layouts.app')
@section('content')

<h2>De Filmlijst.</h2>
<table>
    <tr>
        <th>FilmTitel </th>
        <th>Nummer</th>
        <th>Aanwezig</th>
    </tr>
    @foreach($titels as $titel)
    <tr>
        <td> {{ $titel->titel }}</td>
        <td>
            @foreach($films as $film)
            @if($film->titel->id === $titel->id)
                @if(($film->titel->id === $titel->id) && ($film->aanwezig === 1))
                    <b><a href="/films/{{$film->id}}">{{ $film->nummer }}</a></b>
                    @else
                    <a href="/films/{{$film->id}}">{{ $film->nummer }}</a>
                @endif
            @endif
            @endforeach
           
        </td>
        <td>
            <?php
            $tellen = 0;
            ?>
            @foreach($films as $film)
            @if(($film->titel->id === $titel->id) && ($film->aanwezig === 1))
            <?php
            $tellen++;
            ?>
            @endif
            @endforeach
            <?php
            print($tellen);?>
        </td>
    </tr>
    @endforeach   
   
</table>

<p class="mssg">{{ session('mssg') }}</p>

<a href="/keuze" class="back">Back to home</a>

@endsection