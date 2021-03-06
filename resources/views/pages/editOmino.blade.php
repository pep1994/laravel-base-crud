@extends('layouts.mainLayout')

@section('main-content')

<form class="text-center border border-light p-5" action="{{ route('update', $omino['id']) }}" method="POST">
    @csrf
    @method("POST")
    
    <p class="h4 mb-4 text-primary">Edit omino</p>

    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input value="{{ $omino['first_name'] }}" type="text" class="form-control" placeholder="First name" name="first_name">
            @if ($errors -> has('first_name'))
                @foreach ($errors -> get('first_name') as $error)
                  <small class="text-danger">{{ $error }}</small>  
                @endforeach         
            @endif
        </div>
        <div class="col">
            <!-- Last name -->
            <input value="{{ $omino['last_name'] }}" type="text" class="form-control" placeholder="Last name" name="last_name">
            @if ($errors -> has('last_name'))
                @foreach ($errors -> get('last_name') as $error)
                  <small class="text-danger">{{ $error }}</small>  
                @endforeach         
            @endif
        </div>
    </div>

    <!-- address -->
    <input value="{{ $omino['address'] }}" type="text" class="form-control mb-4" placeholder="Address" name="address">
    @if ($errors -> has('address'))
            @foreach ($errors -> get('address') as $error)
                <small class="text-danger">{{ $error }}</small>  
            @endforeach         
    @endif

    <!-- Code -->
    <input value="{{ $omino['code'] }}" type="text" class="form-control mb-4" placeholder="Post Code" name="code">
    @if ($errors -> has('code'))
            @foreach ($errors -> get('code') as $error)
                <small class="text-danger">{{ $error }}</small>  
            @endforeach         
    @endif
    <!-- State -->
    <input value="{{ $omino['state'] }}" type="text" class="form-control mb-4" placeholder="State" name="state" >
    @if ($errors -> has('state'))
            @foreach ($errors -> get('state') as $error)
                <small class="text-danger">{{ $error }}</small>  
            @endforeach         
    @endif
    
    <!-- Phone Number -->
    
        <input value="{{ $omino['phone_numeber'] }}" type="text" class="form-control mb-4" name="phone_number" placeholder="Phone number">
        @if ($errors -> has('phone_number'))
            @foreach ($errors -> get('phone_number') as $error)
                <small class="text-danger">{{ $error }}</small>  
            @endforeach         
    @endif
    

     <!-- Role -->
    
        <input value="{{ $omino['role'] }}" type="text" class="form-control mb-4" name="role" placeholder="Job">
        @if ($errors -> has('role'))
            @foreach ($errors -> get('role') as $error)
                <small class="text-danger">{{ $error }}</small>  
            @endforeach         
        @endif
    

    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" type="submit" name="submit">Edit</button>
</form>
@endsection

@section('script')
    <script src="{{ url('/js/input.js') }}"></script>
@endsection