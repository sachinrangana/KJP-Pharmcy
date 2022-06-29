@extends('layout.admin.adminLayout')
@section('adminLayout')

<!-- content -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">View Stock</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="adminDashboard" class="text-muted">Home</a></li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">Stock</li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">View Stock</li>
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
                    <button type="button" class=" btn btn-rounded dButton" data-toggle="modal" data-target="#signup-modal">Sign
                        Up Modal</button>
                </div>
                <br>
                <h4 class="card-title">Stock View</h4>
                <h6 class="card-subtitle">Write some text here</h6>

                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered display no-wrap"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th>Product Name</th>                                                          
                                <th>Product Quantity</th>
                                <th>Sale Quantity</th>
                                <th>Edit</th>
                                <th>delete</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Product Name</th>
                                <th>Product Quantity</th>
                                <th>Sale Quantity</th>
                                <th>Edit</th>
                                <th>delete</th>
                            </tr>
                        </tfoot>
                        <tbody>
                           
                                <tr>                                   
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>     
                      
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Signup modal content -->
<div id="signup-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-body">
                <div class="text-center mt-2 mb-4">
                    <a href="index.html" class="text-success">
                        <span><img class="mr-2" src="../assets/images/logo-icon.png" alt="" height="18"><img
                                src="../assets/images/logo-text.png" alt="" height="18"></span>
                    </a>
                </div>

                <form class="pl-3 pr-3" action="{{url('addNewProduct')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="pID">Product ID</label>
                        <input class="form-control" type="text" id="pID" name="pID" required="" placeholder="Michael Zenaty">
                    </div>

                    <div class="form-group">
                        <label for="pName">Product Name</label>
                        <input class="form-control" type="text" id="pName" name="pName" required=""
                            placeholder="john@deo.com">
                    </div>

                    <div class="form-group">
                        <label for="pQuantity">Product Quantity</label>
                        <input class="form-control" type="text" required="" id="pQuantity" name="pQuantity"
                            placeholder="Enter your password">
                    </div>

                    <div class="form-group">
                        <label for="buyingPrice">Product Buying Price</label>
                        <input class="form-control" type="text" required="" id="buyingPrice" name="buyingPrice"
                            placeholder="Enter your password">
                    </div>

                    <div class="form-group">
                        <label for="sellingPrice">Product Selling Price</label>
                        <input class="form-control" type="text" required="" id="sellingPrice" name="sellingPrice"
                            placeholder="Enter your password">
                    </div>

                    <div class="form-group">
                        <label for="pImage">Product Image</label>
                        <input class="form-control" type="text" required="" id="pImage" name="pImage"
                            placeholder="Enter your password">
                    </div>

                    <hr>

                    <div class="form-group text-center">
                        <button class="btn btn-primary" type="submit">Sign Up
                            Free</button>
                    </div>

                </form>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



@endsection
