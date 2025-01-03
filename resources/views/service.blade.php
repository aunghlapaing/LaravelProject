@extends('Layout/master')

@section('title','Laravel | Service')

@section('content')

<div class="container">
    <h1 class="bg-primary text-white p-3 mt-3">Service Page</h1>
</div>
<div class="card col-4 offset-4">
    <div class="card-body ">
        <form action="{{ url('post-service') }}" method="post" >
            @csrf
            <input type="text" name="name" placeholder="Enter name..." value="{{ old('name') }}" class="form-control @error ('name') is-invalid @enderror mt-2 shadow-sm rounded">
            @error('name')
                <div class="mb-3 invalid-feedback">{{ $message }}</div>
            @enderror

            <select name="gender" id="" class="form-select @error ('gender') is-invalid @enderror mt-2">
                <option value="">Choose Gender</option>
                <option value="male" {{ old('gender')== 'male' ? 'selected' : '' }}>Male</option>
                <option value="female" {{ old('gender')== 'female' ? 'selected' : '' }}>Female</option>
            </select>
            @error('gender')
                <div class="mb-3 invalid-feedback"> {{ $message }} </div>
            @enderror

            <input type="number" name="phone" placeholder="Enter phone..." value="{{ old('phone') }}" class="form-control @error ('phone') is-invalid @enderror mt-2 shadow-sm rounded">
            @error('phone')
                <div class="mb-3 invalid-feedback"> {{ $message }} </div>
            @enderror

            <input type="text" name="email" placeholder="Enter email..." value="{{ old('email') }}" class="form-control @error ('email') is-invalid @enderror mt-2 shadow-sm rounded">
            @error('email')
                <div class="mb-3 invalid-feedback"> {{ $message }} </div>
            @enderror

            <input type="password" name="password" placeholder="Enter password..." class="form-control @error ('password') is-invalid @enderror mt-2 shadow-sm rounded">
            @error('password')
                <div class="mb-3 invalid-feedback"> {{ $message }} </div>
            @enderror

            <input type="password" name="confirm-password" placeholder="Comfirm Password..." class="form-control @error ('confirm-password') is-invalid @enderror mt-2 shadow-sm rounded">
            @error('confirm-password')
                <div class="mb-3 invalid-feedback"> {{ $message }} </div>
            @enderror

            <input type="submit" name="btn-submmit" value= "Create" class="form-control bg-primary text-white mt-2 shadow-sm rounded">
        </form>

    </div>
</div>
    
@endsection