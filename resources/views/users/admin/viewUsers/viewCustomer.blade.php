@extends('layout.admin.adminLayout')
@section('adminLayout')

<!-- content -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">View Cunstomer</h4>
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

     
                <h4 class="card-title">Registered Customers</h4>
                <h6 class="card-subtitle">Write some text here</h6>

                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered display no-wrap"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Age</th>
                                <th>Gender</th>
                                <th>Mobile Number</th>
                                <th>Address</th>
                                <th>Email</th> 
                                <th>Edit</th>
                                <th>Delete</th>                                                               
                            </tr>
                        </thead>

                        <tfoot>                           
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Age</th>
                                <th>Gender</th>
                                <th>Mobile Number</th>
                                <th>Address</th>
                                <th>Email</th> 
                                <th>Edit</th>
                                <th>Delete</th>                                          
                            </tr>                           
                        </tfoot>

                        <tbody>
                            @foreach($customers as $customer)
                                @if($customer->status =='1')
                                    <tr>
                                        <td>{{$customer->name}}</td>
                                        <td>{{$customer->Lname}}</td> 
                                        <td>{{$customer->age}}</td>
                                        <td>{{$customer->gender}}</td>                               
                                        <td>{{$customer->mobileNumber}}</td>                               
                                        <td>{{$customer->address}}</td>                               
                                        <td>{{$customer->email}}</td>                               
                                        <td><button type="button" class="btn btn-rounded btn-outline-success"><i class="fa fa-edit"></i></td>
                                        <!-- user delete -->
                                        <form action="{{url ('deleteUser').$customer->id}}" method ="get">
                                                    @csrf
                                            <td><button type="submit" class="btn btn-danger btn-circle-sm"><i class="fa fa-trash"></i> </button></td> 
                                        </form>                            
                                    </tr> 
                                @endif 
                            @endforeach                          
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>


@endsection
