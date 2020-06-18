@extends('layouts.mainLayout')

@section('main-content')
    <div class="container h-100">
        <div class="row">
            <div class="col-sm text-center d-flex justify-content-center">
                <div class="card" style="width: 40rem;">
                    <div class="card-header">
                    {{ $omino['first_name'] }} {{ $omino['last_name'] }} 
                    </div>
                    <ul class="list-group list-group-flush mb-3">
                    <li class="list-group-item">ADDRESS:  <b>{{ $omino['address'] }}</b> </li>
                    <li class="list-group-item">POSTCODE:  <b>{{ $omino['code'] }}</b></li>
                    <li class="list-group-item">STATE:  <b>{{ $omino['state'] }}</b></li>
                    <li class="list-group-item">PHONE_NUMBER:  <b>{{ $omino['phone_numeber'] }}</b></li>
                    <li class="list-group-item">JOB:  <b>{{ $omino['role'] }}</b></li>
                    </ul>
                    <a href="{{ route('editOmino', $omino['id']) }}" type="button" class="btn btn-info mb-2">Edit</a>
                    <a href="{{ route('deleteOmino', $omino['id']) }}" type="button" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
    </div>
@endsection