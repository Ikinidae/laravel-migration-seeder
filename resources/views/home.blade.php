@extends('template.base')

@section('pageTitle', 'Trains')

@section('pageMain')

    <div id="container">
        @foreach ($trains as $train)
            <div class="card">
                <p>Azienda: {{$train->azienda}}</p>
                <p>Stazione di partenza: {{$train->stazione_di_partenza}}</p>
                <p>Stazione di arrivo:{{$train->stazione_di_arrivo}}</p>
                <p>Orario di partenza: {{$train->orario_di_partenza}}</p>
                <p>Orario di arrivo: {{$train->orario_di_arrivo}}</p>
                <p>Codice treno: {{$train->codice_treno}}</p>
                <p>Numero carrozze: {{$train->numero_carrozze}}</p>
                <p>In orario: {{$train->in_orario}}</p>
                <p>Cancellato:
                    @if ($train->cancellato === 1)
                        Si
                    @else
                        No
                    @endif
                </p>
            </div>
        @endforeach
    </div>
@endsection
