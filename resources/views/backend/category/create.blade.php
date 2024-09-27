@extends("backend.master")

@section("content")

    <div class="page-header">
        <h3 class="page-title"> Add Category </h3>

    </div>
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">


                    @if(session()->has("message"))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{session()->get("message")}}
                            <button type="button" class="btn-close border-0" data-bs-dismiss="alert" aria-label="Close"></button>
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

@endsection
