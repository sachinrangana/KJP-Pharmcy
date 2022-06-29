@extends('layout.admin.adminLayout')
@section('adminLayout')

<!-- content -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">View Product</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="adminDashboard" class="text-muted">Home</a></li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">Users</li>
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
                    <button type="button" class=" btn btn-rounded dButton" data-toggle="modal" data-target="#signup-modal">Add New Product</button>
                </div>
                <br>
                <h4 class="card-title">Add product</h4>
                <h6 class="card-subtitle">Write some text here</h6>

                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered display no-wrap"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th>Product Image</th>                    
                                <th>Product Name</th>
                                <th>Product Catergory</th>                    
                                <th>Description</th>                                                            
                                <th>Product Quantity</th>
                                <th>Buying Price (Rs)</th>
                                <th>Selling Price (Rs)</th>
                                <th>Meta-Title</th>
                                <th>Meta_keyWord</th>
                                <th>Meta_description</th>
                                <th>Edit</th>
                                <th>delete</th>
                            </tr>
                        </thead>

                        <tfoot>
                            <tr>
                                <th>Product Image</th>                    
                                <th>Product Name</th>                               
                                <th>Product Catergory</th>
                                <th>Description</th>                                                                                          
                                <th>Product Quantity</th>
                                <th>Buying Price (Rs)</th>
                                <th>Selling Price (Rs)</th>
                                <th>Meta-Title</th>
                                <th>Meta_keyWord</th>
                                <th>Meta_description</th>
                                <th>Edit</th>
                                <th>delete</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($products as $product) 
                                <tr>
                                    <td><img src="/productImage/{{$product->image }}" width= "70px" height ="70px" alt = "Image" alt=""></td>
                                    <td>{{$product->catergory->name}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->description}}</td>
                                    <td>{{$product->qty}}</td>
                                    <td>{{$product->buyingPrice}}</td>
                                    <td>{{$product->sellingPrice}}</td>
                                    <td>{{$product->meta_title}}</td>
                                    <td>{{$product->meta_keyWord}}</td>
                                    <td>{{$product->meta_description}}</td>
                                    <td><a href="{{url ('editProduct'.$product->id)}}" class="btn btn-primary">Edit</a></td>
                                    <td></td>
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

                <form class="pl-3 pr-3" action="{{url('addNewProduct')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class=col-md-6>
                            <div class="form-group">
                                <label for="catid">Product ID</label>
                                <select name="catid" id="catid" class="custom-select">
                                    <option value="">-- Select the Catergory --</option>
                                    @foreach($catergory as $cat)
                                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class= "col-md-6">
                            <div class="form-group">
                                <label for="name">Product Name</label>
                                <input class="form-control" type="text" id="name" name="name" required
                                placeholder="Enter Product Name">
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class= "col-md-12">
                            <div class="form-group">
                                <label for="description">Product Descrption</label>
                               <textarea name="description" id="description"  class="form-control"></textarea>
                            </div>
                        </div>                       
                    </div>


                    <div class="row">
                        <div class= "col-md-6">
                            <div class="form-group">
                                <label for="buyingPrice">Buying Price</label>
                                <input class="form-control" type="number" id="buyingPrice" name="buyingPrice" required
                                placeholder="Enter Product Name">
                            </div>
                        </div>

                        <div class= "col-md-6">
                            <div class="form-group">
                                <label for="sellingPrice">Selling Price</label>
                                <input class="form-control" type="number" id="sellingPrice" name="sellingPrice" required
                                placeholder="Enter Product Name">
                            </div>
                        </div>
                    </div>


                    <div class="row">


                        <div class= "col-md-6">
                            <div class="form-group">
                                <label for="qty">Prodcut Qty</label>
                                <input class="form-control" type="number" id="qty" name="qty" required
                                placeholder="Enter Product Name">
                            </div>
                        </div>

                        <div class= "col-md-6">
                            <div class="form-group">
                                <label for="image">Product Image</label>
                                <input class="form-control" type="file" id="image" name="image" required
                                placeholder="Enter Product Name">
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
                                <label class="form-check-label" for="trending">Trending</label>&nbsp;&nbsp;
                                <input class="form-check-input" type="checkbox" id="trending" name="trending">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class= "col-md-6">
                            <div class="form-group">
                                <label for="meta_title">Meta_title</label>
                                <input class="form-control" type="text" id="meta_title" name="meta_title" required
                                placeholder="Enter Product Name">
                            </div>
                        </div>

                        <div class= "col-md-6">
                            <div class="form-group">
                                <label for="meta_keyWord">Meta_keyWord</label>
                                <input class="form-control" type="text" id="meta_keyWord" name="meta_keyWord" required
                                placeholder="Enter Product Name">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class= "col-md-12">
                            <div class="form-group">
                                <label for="meta_description">Meta_description</label>
                               <textarea name="meta_description" id="meta_description"  class="form-control"></textarea>
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
