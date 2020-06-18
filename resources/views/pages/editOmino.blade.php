@extends('layouts.mainLayout')

@section('main-content')
    
<form class="text-center border border-light p-5" action="{{ route('update', $omino['id']) }}" method="POST">
    @csrf
    @method("POST")
    
    <p class="h4 mb-4">Add omino</p>

    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input value="{{ $omino['first_name'] }}" type="text" class="form-control" placeholder="First name" name="first_name">
        </div>
        <div class="col">
            <!-- Last name -->
            <input value="{{ $omino['last_name'] }}" type="text" class="form-control" placeholder="Last name" name="last_name">
        </div>
    </div>

    <!-- address -->
    <input value="{{ $omino['address'] }}" type="text" class="form-control mb-4" placeholder="Address" name="address">

    <!-- Code -->
    <input value="{{ $omino['code'] }}" type="text" class="form-control mb-4" placeholder="Post Code" name="code">

    <!-- State -->
    <input value="{{ $omino['state'] }}" type="text" class="form-control mb-4" placeholder="State" name="state" >
    
    <!-- Phone Number -->
    
        <input value="{{ $omino['phone_numeber'] }}" type="text" class="form-control mb-4" name="phone_number" placeholder="Phone number">
    

     <!-- Role -->
    
        <input value="{{ $omino['role'] }}" type="text" class="form-control mb-4" name="role" placeholder="Job">
    

    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" type="submit" name="submit">Edit</button>
</form>
@endsection