@extends('layout.mainLayout')

@section('main-content')
    
<div class="card mb-3">
    <div class="card-body">
      <h5 class="card-title">Nome: {{ $cagnolino['name'] }}</h5>
      <p class="card-text">Razza: {{ $cagnolino['type'] }}</p>
      <p class="card-text">Altezza: <small class="text-muted">{{ $cagnolino['height'] }}</small></p>
      <p class="card-text">Peso: <small class="text-muted">{{ $cagnolino['weight'] }}</small></p>
    </div>
    <a href="{{ route('home') }}">Tutti i cagnolini</a>
  </div>

  {{-- @foreach ($cagnolino as $key => $item)
      <p>{{ $key }}: {{ $value }}</p>
  @endforeach --}}
    
@endsection