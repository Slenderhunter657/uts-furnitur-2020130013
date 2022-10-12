@extends('layout.master1')
@section('title', 'Home')
@section('content')
    <h1 class="cover-heading">Welcome!</h1>
    <p class="lead"> IKEAH is one of, if not THE MOST, complete international furniture store. </p>
    <p class="text-center"> Our products encompasses all kinds of furniture. From the basic chair to the most abstract decoration, IKEAH have not only what you need, but also what you want!</p>
    {{-- <button type="button" class="btn btn-primary">See our products!</button>
    <button type="button" class="btn btn-success">See other's opinion of us!</button>
    <button type="button" class="btn btn-primary">About us!</button> --}}
    <a class="btn btn-primary" href="{{route('product')}}" role="button">See our products!</a>
    <a class="btn btn-success" href="{{route('testimony')}}" role="button">See other's opinion of us!</a>
    <a class="btn btn-primary" href="{{route('about')}}" role="button">About us!</a>
@endsection
