@extends('layout.admin.adminLayout')
@section('adminLayout')

<!-- content -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Update Doctor Details</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="adminDashboard" class="text-muted">Home</a></li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">Users</li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">Doctors</li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">Update Doctor Details</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<br>

<div class="card w-75">
    <div class="card-body ">
        <h4 class="card-title">Update Doctor Details</h4>
        <form class="pl-3 pr-3" action="{{url('updateCatergoryByAdmin'.$catergory->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Catergory Name</label>
                        <input class="form-control" type="text" value="{{$catergory->name}}" id="name" name="name" required
                            placeholder="Enter Product Name">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="slug">Slug</label>
                        <input class="form-control" type="text" value="{{$catergory->slug}}" id="slug" name="slug" required
                            placeholder="Enter Product Name">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" class="form-control">{{$catergory->description}}</textarea>
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-md-6">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label" for="status">Status</label>&nbsp;&nbsp;
                        <input class="form-check-input" {{$catergory->status == "1"? 'checked': ''}} type="checkbox" id="status" name="status">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label" for="popular">Popular</label>&nbsp;&nbsp;
                        <input class="form-check-input" type="checkbox" id="popular" name="popular" {{$catergory->popular == "1"? 'checked': ''}}>
                    </div>
                </div>
            </div>

            <br>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="meta_title">meta_title</label>
                        <input class="form-control" type="text" value="{{$catergory->meta_title}}" id="meta_title" name="meta_title" required
                            placeholder="Enter Product Name">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="meta_description">meta_description</label>
                        <input class="form-control" type="text" value="{{$catergory->meta_description}}" id="meta_description" name="meta_description" required
                            placeholder="Enter Product Name">
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="meta_keyWords">meta_keyWords</label>
                        <input class="form-control" type="text" value="{{$catergory->meta_keyWords}}" id="meta_keyWords" name="meta_keyWords" required
                            placeholder="Enter Product Name">
                    </div>
                </div>

            </div>


            <hr>

            <div class="form-group text-center">
                <button class="btn btn-primary" type="submit">Add New Product</button>
            </div>

        </form>

    </div>
</div>

@endsection
