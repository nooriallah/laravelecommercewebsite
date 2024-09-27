@extends("backend.master")

@section("content")

    <div class="page-header">
        <h3 class="page-title"> Add new product </h3>

        <a href="{{ route('products.index') }}" class="btn btn-sm btn-outline-primary"><i class="mdi mdi-view-list
"> All products</i></a>

    </div>
    <form class="forms-sample" action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">


            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">


                        @if(session()->has("message"))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{session()->get("message")}}
                                <button type="button" class="btn-close border-0" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                            </div>
                        @endif

                        <div class="form-group">
                            <label for="title">Product title</label>
                            <input type="text" class="form-control" id="title" name="title"
                                   placeholder="Write product name here!">

                            @error('title')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">Product description</label>
                            <textarea style="height: 330px" class="form-control" id="description" name="description"
                                      placeholder="Write product description"></textarea>
                            @error('description')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror

                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group">
                            <label for="category">Product Category</label>
                            <select class="form-control" id="category" name="category">
                                <option value="">Select category</option>
                                @foreach($categories as $category )
                                    <option
                                        value="{{ $category->category_name }}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                            @error('category')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="quantity">Product quantity</label>
                            <input type="number" class="form-control" id="quantity" name="quantity"
                                   placeholder="Write quantity name here!">
                            @error('quantity')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="price">Product price</label>
                            <input type="number" class="form-control" id="price" name="price"
                                   placeholder="Write price here!">
                            @error('price')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="discount_price">Product discount price</label>
                            <input type="number" class="form-control" id="discount_price" name="discount_price"
                                   placeholder="Write discount price here!">
                            @error('discount_price')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="image">Product Image</label>
                            <input type="file" class="form-control" id="image" name="image"
                                   accept="image/png, image/jpeg">
                            @error('image')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <button type="submit" class="btn btn-success">Add product</button>
                    </div>
                </div>
            </div>


        </div>
    </form>

@endsection
