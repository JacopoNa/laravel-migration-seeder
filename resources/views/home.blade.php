@extends('layouts.app')

@section('content')
    <div class="voyage">
        <h1>PACCHETTI DI VIAGGIO</h1>

        @foreach ($travels as $travel)

            <h3>LOCALITA': {{ $travel->locality }}</h3>
            <h4>PER {{ $travel->people }} PERSONE</h4>
            <h4>Soggiorno dalla durata di: {{ $travel->days }} giorni</h4>
            <h4>Recensioni: {{ $travel->description }}</h4>
            <h4>Prezzo per una notte: {{ $travel->price }} €</h4>
            <br>
        @endforeach
    </div>
@endsection