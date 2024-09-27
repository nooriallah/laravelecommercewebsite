@extends("frontend.layout")

@section("content")
    @include("frontend.front_partials.header")




    <div class="container my-5 py-5">

        <h2 class="mb-3">Products on cart</h2>

        @php $total = 0 @endphp

        @if(count($cart_items))

            <table class="table ">
                <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">price</th>
                    <th scope="col">Total price</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach($cart_items as $cart)
                    <tr>
                        <th>{{ $cart->product_title }}</th>
                        <td>{{ $cart->quantity }}</td>
                        <td>${{ $cart->price }} @if($cart->quantity > 1) X  {{ $cart->quantity }}@endif</td>
                        <td>${{ $cart->total_price }} </td>

                        <td><img src="/productimages/{{ $cart->image }}" width="100"/></td>
                        <td><a href="{{ route("removeitem", "total=" . $cart->id) }}" class="btn btn-sm btn-outline-danger"> X </a></td>
                    </tr>
                    @php $total = $total + $cart->total_price @endphp
                @endforeach

                </tbody>
            </table>
            <h1>Total: ${{ $total_price }}</h1>

            <div class="container mt-5">
                <p>Proceed to order</p>
                <div class="buttons ">
                    <a class="btn btn-warning" href="{{ route('cashorder') }}">Cash on delivery</a>
                    <a class="btn btn-outline-warning" href="{{ route('stripepay') }}">Pay using cart</a>
                </div>
            </div>

        @else
            <h1>Empty cart</h1>
        @endif
    </div>




@endsection
