@extends('frontend.layout')

@section('content')
    @include('frontend.front_partials.header')



    <div class="container py-3 ">

        <div class="w-50 mx-auto mb-4 pt-4 mt-5">

            <h1>{{ $product->title }}</h1>
        </div>

        <div class="w-50 mx-auto ">
            <img src="/productimages/{{ $product->image }}" alt="{{ $product->title }}" class="img-fluid">
        </div>

        <div class="w-50 mx-auto mb-5">

            <p>{!! $product->description !!}</p>

        </div>

        <div class="w-50 mx-auto mb-5 pb-5">
            <a href="{{ route("products.show", $product->id) }}" class="btn btn-outline-danger">
                {{ $product->title }}
            </a>
            <a href="" class="option2 btn btn-outline-secondary">
                Buy Now
            </a>
        </div>


    </div>
@endsection
