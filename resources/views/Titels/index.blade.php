@extends('layouts.app')
@section('content')
    <h2>Aanwezige Titels.</h2>
    <table>
        <tr>
            <th>Id</th>
            <th>Titel</th>
            <th>Details</th>
        </tr>
        @foreach($titels as $titel)
        <tr>
            <td>{{ $titel->id }}</td>
            <td>{{ $titel->titel }}</td>
            <td><a href="/titels/{{ $titel->id }}">Bekijk</a></td>
                
        </tr>
        @endforeach   
    </table>
    <p class="mssg">{{ session('mssg') }}</p>
    <a href="/keuze" class="back">Back to home</a>

@endsection