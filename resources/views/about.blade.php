@extends('Layout/master')

@section ('title', 'Laravel | About')

@section ('content')
<div class="container">
    <h1 class="text-white bg-primary p-3 my-3">About page</h1>
</div>
<div class="card col-4 offset-4">
    <div class="card-body">

        <form action="{{ route('file') }}" method="post">
            @csrf
            <input type="text" name="name" class="form-control mt-2 shadow-sm" placeholder="Enter file name..." value="">
            <input type="file" name="file" class="form-control mt-2 shadow-sm">
            <input type="submit" name="btn-upload" value="Upload" class="form-control bg-primary text-white shadow-sm mt-2">
        </form>


        {{-- <form action="{{ route('file') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="text" class="form-control @error ('name') is-invalid @enderror shadow-sm rounded mt-2" name="name" placeholder="Enter a file name..." value="{{ old('name') }}">
            @error('name')
                <div class="invalid-feedback mb-2">{{ $message }}</div>
            @enderror
            <input type="file" class="form-control @error ('file') is-invalid @enderror shasow-sm rounded mt-2" name="file">
            @error ('file')
                <div class="invalid-feedback mb-2">{{ $message }}</div>
            @enderror
            <input type="submit" name="btn-submit" class="form-control bg-primary text-white shadow-sm rounded mt-2" value="submit">
        </form> --}}
    </div>
</div>
@endsection