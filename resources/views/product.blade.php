@extends('layout.master2')
@section('title', 'Products')
@section('contentTop')
    <h1 class="cover-heading">Products!</h1>
    <p class="lead"> Quality. Quantity. Comfort.</p>
    <p class="text-left"> Our designers, engineers, and architects work hard for your convenience. Everything we sold are high quality. There's enough of them
        that we never sold out. Most importantly, everything is designed specifically for your comfort!</p>
    <a class="btn btn-primary" href="#product" role="button">See them for yourself!</a>
@endsection

@section('contentBottom')
    <div id="product" class="container text-center mt-3 p-4" style="background-color: rgba(0,0,0,0.6)">
        <h1>Products</h1>
        <div class="card-columns">
            @for ($i = 0; $i < 12; $i++)
                {{-- <div class="card"> <img src="https://source.unsplash.com/random/?furniture,interior&{{ $i }}/350x250" class="img-thumbnail img-fluid"> </div> --}}
                <div class="card"> <img src="https://api.lorem.space/image/furniture?w=350&amp;amp;amp;amp;h=250&{{ $i }}" class="img-thumbnail img-fluid"> </div>
            @endfor
        </div>
    </div>
@endsection
