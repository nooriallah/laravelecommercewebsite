@extends('backend.master')

@section('content')
    {{-- Category table section --}}
    <div class="page-header">
        <h3 class="page-title">Trashed</h3>
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

                    <div class="card-title text-end">
                        {{--                        <a href="{{ route('products.create') }}" class="btn btn-sm btn-outline-primary"><i class="mdi mdi-plus"> Add new</i></a> --}}
                    </div>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Product ID</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Dis price</th>
                                    <th>Quantity</th>
                                    <th>Category</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $counter = 1 @endphp
                                @foreach ($products as $product)
                                    <tr>

                                        <td>{{ $counter }}</td>
                                        <td>{{ $product->title }}</td>
                                        <td class="text-truncate" style="max-width: 300px">{!! $product->description !!}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{ $product->discount_price }}</td>
                                        <td>{{ $product->quantity }}</td>
                                        <td>{{ $product->category }}</td>
                                        <td>
                                            <img src="/productimages/{{ $product->image }}"
                                                style="width: 100px; height: auto; border-radius: 0"
                                                alt="{{ $product->title }}">
                                        </td>

                                        <td>
                                            <form action="{{ route('products.restore', $product->id) }}" method="POST">
                                                @csrf
                                                <button type="submit"
                                                    class="btn btn-sm btn-outline-primary mdi mdi-backup-restore mb-2"></button>
                                            </form>
                                            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-outline-danger mdi mdi-delete"
                                                    title="Delete"></button>
                                            </form>

                                        </td>

                                    </tr>
                                    @php $counter++ @endphp
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
