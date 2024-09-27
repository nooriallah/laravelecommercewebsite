@extends("backend.master")

@section("content")

    {{-- Order table section --}}
    <div class="page-header">
        <h3 class="page-title">All Orders </h3>
    </div>


    <div class="row">

        <div class="col-lg-12 grid-margin stretch-card">


            <div class="card">

                <div class="card-body">

                    @if (session()->has('message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session()->get('message') }}
                            <button type="button" class="btn-close border-0" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                        </div>
                    @endif


                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Product title</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Payment status</th>
                                <th>Delivery status</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $counter = 1 @endphp
                            @foreach ($orders as $order)
                                <tr>

                                    <td>{{ $counter }}</td>
                                    <td>{{ $order->name }}</td>
                                    <td>{{ $order->email }}</td>
                                    <td>{{ $order->phone }}
                                    <td>{{ $order->product_title }}</td>
                                    <td>{{ $order->quantity }}</td>
                                    <td>{{ $order->price }}</td>
                                    g
                                    <td>{{ $order->payment_status }}</td>
                                    <td>
                                        <span
                                            class='btn  @if($order->delivery_status === "processing") btn-warning @elseif($order->delivery_status == "Proceed") btn-success @endif'>
                                        {{ $order->delivery_status }}
                                        </span>
                                    </td>
                                    <td>
                                        <img src="/productimages/{{ $order->image }}"
                                             style="width: 100px; height: auto; border-radius: 0"
                                             alt="{{ $order->title }}">
                                    </td>

                                    <td>
                                        <form action="{{ route('products.destroy', $order->id) }}" method="GET">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-outline-danger mdi mdi-delete me-2"
                                                    title="Delete"></button>
                                        </form>

                                        <a href="{{ route("delivered", $order->id) }}"
                                           class="btn btn-sm btn-outline-warning mdi mdi-warning mt-2"
                                           title="Delivere">Delivered</a>
                                    </td>
                                </tr>
                                @php $counter = $counter + 1 @endphp
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>

@endsection
