@extends("backend.master")

@section("content")

    {{--    Add category section --}}
    <div class="page-header">
        <h3 class="page-title"> Add Category </h3>

    </div>
    <div class="row">
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">


                    @if(session()->has("message"))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{session()->get("message")}}
                            <button type="button" class="btn-close border-0" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                        </div>
                    @endif

                    <form class="forms-sample" action="{{ route('categories.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputUsername1">Category name</label>
                            <input type="text" class="form-control" id="category_name" name="category_name"
                                   placeholder="Write category name here!">
                        </div>


                        <button type="submit" class="btn btn-success">Add</button>
                    </form>
                </div>
            </div>
        </div>

    </div>



    {{--Category table section --}}
    <div class="page-header">
        <h3 class="page-title">All Categories </h3>
    </div>


    <div class="row">
        <div class="col-lg-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Category name</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)

                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->category_name }}</td>
                                    <td class="d-flex">
                                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-outline-danger mdi mdi-delete me-2"
                                                    title="Delete"></button>
                                        </form>
                                        <a class="btn btn-sm btn-outline-primary mdi mdi-table-edit" href="#"
                                           title="Update"></a>
                                    </td>
                                </tr>

                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
