@extends('layouts.mainLayout')

@section('main-content')
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($omini as $omino)
                @php
                    $img = ['avatar-m.jpg', 'avatar-f.png'];
                    $num = rand(0, 1);
                @endphp
            <div class="col-md-3 card mb-3 mt-3 ml-2 mr-2" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('/img/' . $img[$num])  }}" alt="profile">
                <div class="card-body">
                  <h5 class="card-title">{{ $omino['first_name'] }} {{ $omino['last_name'] }}</h5>
                  <a href="{{ route('showOmino', $omino['id']) }}" class="btn btn-dark">Scopri di più</a>
                </div>
              </div>
            @endforeach
        </div>
        <a id="up" type="button" class="btn btn-warning"><i class="fas fa-arrow-up" ></i></a>
   
    </div>
@endsection