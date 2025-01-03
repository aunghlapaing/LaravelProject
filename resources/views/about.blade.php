@extends('Layout/master')

@section('title','Laravel | About')



@section('content')
<div class="container">
    <h1 class="bg-primary text-white p-3 mt-3">About Page</h1>
</div>
@endsection

@section('h1 header')
<h1>This is h1 header from</h1>
@endsection

@section('js')
<script>
    console.log("hello world");
</script>
@endsection