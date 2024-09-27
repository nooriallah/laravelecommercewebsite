<!doctype html>
<html lang="en">

{{-- Head --}}
@include("backend.backend_partials.head")

<body>

<div class="container-scroller">

    {{-- Header --}}
{{--    @include("backend.backend_partials.header")--}}

    {{-- Sidebar --}}
    @include("backend.backend_partials.sidebar")


    <div class="container-fluid page-body-wrapper">

        {{--    Navogation bar on other pages--}}
        @include("backend.backend_partials.navigationbar")



        {{--    Main page contant    --}}

        <div class="main-panel">
            <div class="content-wrapper">

                @yield("content")

            </div>

            {{--Footer--}}
            @include("backend.backend_partials.footer")
        </div>


    </div>


</div>


</body>

@include("backend.backend_partials.javascriptfiles")

</html>



