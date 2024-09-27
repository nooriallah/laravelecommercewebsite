@extends("frontend.layout")

@section("content")
    <div class="hero_area">
        @include("frontend.front_partials.header")
        @include("frontend.front_partials.hero")
    </div>

    <!-- why section -->
    @include("frontend.front_partials.blog")
    <!-- end why section -->


    <!-- arrival section -->
    @include("frontend.front_partials.arrival")
    <!-- end arrival section -->



    <!-- product section -->
    @include("frontend.front_partials.products")
    <!-- end product section -->


    <!-- subscribe section -->
    @include("frontend.front_partials.subscribe")
    <!-- end subscribe section -->



    <!-- client section -->
    @include("frontend.front_partials.clients")
    <!-- end client section -->



@endsection
