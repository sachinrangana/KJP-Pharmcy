@extends('layout.admin.adminLayout')
@section('adminLayout')

<!-- content -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">View Catergory</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="adminDashboard" class="text-muted">Home</a></li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">E-Chanelling</li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">View Catergory</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<br>



<!-- viewCustomer-->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="btn-list">
                    <!-- Custom width modal -->
                    <button type="button" class=" btn btn-rounded dButton" data-toggle="modal"
                        data-target="#signup-modal">Add New Product</button>
                </div>
                <br>

                <h4 class="card-title">View Catergory Details</h4>
                <h6 class="card-subtitle">Write some text here</h6>

                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered display no-wrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>Catergory Name</th>
                                <th>Slug</th>
                                <th>Description</th>
                                <th>Meta Title</th>
                                <th>Meta Description</th>
                                <th>Meta Key-Word</th>
                               
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Catergory Name</th>
                                <th>Slug</th>
                                <th>Description</th>
                                <th>Meta Title</th>
                                <th>Meta Description</th>
                                <th>Meta Key-Word</th>
                               
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </tfoot>
                        <tbody>


                            @foreach($catergory as $cat)
                            <tr>                              
                                <td>{{$cat->name}}</td>
                                <td>{{$cat->slug}}</td>
                                <td>{{$cat->description}}</td>
                                <td>{{$cat->meta_title}}</td>
                                <td>{{$cat->meta_description}}</td>
                                <td>{{$cat->meta_keyWords}}</td>
                                <td><a href="{{url ('editCatergory'.$cat->id)}}" class="btn btn-primary">Edit</a></td>
                                <td><button class="btn btn-danger">Delete</button></td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Signup modal content -->
<div id="signup-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-body">
                <div class="text-center mt-2 mb-4">
                    <a href="index.html" class="text-success">
                        <span><img class="mr-2" src="../assets/images/logo-icon.png" alt="" height="18"><img
                                src="../assets/images/logo-text.png" alt="" height="18"></span>
                    </a>
                </div>

                <form class="pl-3 pr-3" action="{{url('addNewCatergoryByAdmin')}}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Catergory Name</label>
                                <input class="form-control" type="text" id="name" name="name" required
                                    placeholder="Enter Product Name">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="slug">Slug</label>
                                <input class="form-control" type="text" id="slug" name="slug" required
                                    placeholder="Enter Product Name">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label" for="status">Status</label>&nbsp;&nbsp;
                                <input class="form-check-input" type="checkbox" id="status" name="status">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label" for="popular">Popular</label>&nbsp;&nbsp;
                                <input class="form-check-input" type="checkbox" id="popular" name="popular">
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="meta_title">meta_title</label>
                                <input class="form-control" type="text" id="meta_title" name="meta_title" required
                                    placeholder="Enter Product Name">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="meta_description">meta_description</label>
                                <input class="form-control" type="text" id="meta_description" name="meta_description"
                                    required placeholder="Enter Product Name">
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="meta_keyWords">meta_keyWords</label>
                                <input class="form-control" type="text" id="meta_keyWords" name="meta_keyWords" required
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
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



@endsection
