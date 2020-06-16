@extends('layout.mainLayout')

@section('main-content')

    <h1>Nomi cagnolini</h1>

    <ul>
        @foreach ($cagnolini as $cagnolino)
            <li>
                <a href="{{ route('show', $cagnolino['id']) }}">{{ $cagnolino['name'] }}</a>
            </li>
        @endforeach
    </ul>
    
@endsection
