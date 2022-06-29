@extends('layout.admin.adminLayout')
@section('adminLayout')

<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />

<!-- content -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">View POS</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="adminDashboard" class="text-muted">Home</a></li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">POS</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<br>

<div>
           
               
                    <div class="card card-stats">
                        <div class="card-body">
                            
                            <div class="row">
                                <div class="col-md-8">

                                    <div style="border-radius: 5px; border: 2px solid #223a66;padding: 20px">
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="dropdown" >
                                        <div class="dropdown-content" id="browsers">
                                        </div>

                                    </div>
                                    <hr/>
                                    <div style="border-radius: 10px;border: 2px solid #223a66;padding: 20px;display: block;width: 100%;height: 500px;overflow-y: auto;text-align: left">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class=" text-dark" >
                                                <tr>
                                                    <th>Item</th>
                                                    <th>Quantity</th>
                                                    <th>Price</th>
                                                    <th>Sub Total</th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                                </thead>
                                                <tbody style="font-weight: bold">
                                               
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <div class="btn-group" role="group" aria-label="Basic example">
                                                            <a href="" type="button" class="btn btn-outline-primary btn-sm">  <i class="material-icons">remove</i></a>
                                                            <a href="" type="button" class="btn btn-outline-primary btn-sm">  <i class="material-icons">add</i></a>
                                                        </div>

                                                    </td>
                                                    <td><a href="" class="btn btn-outline-primary btn-sm">
                                                            <i class="material-icons">delete</i>
                                                        </a></td>
                                                </tr>
                                        

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-4" >
                                    <div style="border-radius: 10px; border: 2px solid #223a66;padding: 20px;text-align: center">
                                                <h3 class="display-4 text-danger">TOTAL</h3>
                                     
                                        <h3 class="text-dark" style="font-weight: bold">RS:000.00</h3>
                                       
                                            <h3 class="text-dark" style="font-weight: bold">RS:</h3>
                                       
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">Next</button>
                                    </div>
                                </div>
                            </div>
                        </div>
               
                <!-- {{--Modal--}} -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <input type="text" name="id" id="id" value="" style="display: none"/>
                                <form action="{{url('addCart')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="id" name="pId" style="display: none">
                                    </div>
                                    <div class="form-group" style="border-radius: 10px; border: 2px solid #223a66;padding: 20px;text-align: center">
                                        <input type="number" class="form-control" id="qty" name="qty" placeholder="Enter Quantity" required autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- {{--End Modal--}}

{{--                Modal 2--}} -->
                <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                    <div class="modal-dialog  modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{url('addInvoice')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    
                                        <div class="form-group" style="border-radius: 10px; border: 2px solid #223a66;padding: 20px;text-align: center">
                                            <input type="number" class="form-control" id="total" name="total" value="" required autocomplete="off" readonly>
                                        </div>
                                   
                                        <div class="form-group" style="border-radius: 10px; border: 2px solid #223a66;padding: 20px;text-align: center">
                                            <input type="number" class="form-control" id="total" name="total" value="000.00" required autocomplete="off" readonly>
                                        </div>
                                   
                                        <div class="form-group" style="border-radius: 10px; border: 2px solid #223a66;padding: 20px;text-align: center">
                                            <input type="number" class="form-control" id="pAmount" name="pAmount" placeholder="Paying Amount" required autocomplete="off">
                                        </div>

                                <div class="form-group">
                                    
                                        <button type="submit" class="btn btn-primary" disabled>Submit</button>
                                    
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    

                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
{{--                emd modal--}}
           
        </div>

@endsection
