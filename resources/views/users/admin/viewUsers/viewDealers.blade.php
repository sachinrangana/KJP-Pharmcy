@extends('layout.admin.adminLayout')
@section('adminLayout')

<!-- content -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">View Dealers</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="adminDashboard" class="text-muted">Home</a></li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">Users</li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">Dealers</li>
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
                    <button type="button" class=" btn btn-rounded dButton" data-toggle="modal" data-target="#signup-modal">Register New Dealer</button>
                </div>
                <br>
                <h4 class="card-title">Registered Dealers</h4>
                <h6 class="card-subtitle">Write some text here</h6>

                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered display no-wrap"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Last Name</th>
                                <th>Age</th>
                                <th>Gender</th>
                                <th>Mobile Number</th>
                                <th>Address</th>
                                <th>Email</th>    
                                <th>Edit</th>
                                <th>Delte</th>                                                            
                            </tr>
                        </thead>

                        <tfoot>                           
                            <tr>
                                <th>Name</th>
                                <th>Last Name</th>
                                <th>Age</th>
                                <th>Gender</th>
                                <th>Mobile Number</th>
                                <th>Address</th>
                                <th>Email</th> 
                                <th>Edit</th>
                                <th>Delte</th>                                          
                            </tr>                           
                        </tfoot>

                        <tbody>
                            @foreach($dealers as $dealer)
                                @if($dealer->status=='1')
                                    <tr>
                                        <td>{{$dealer->name}}</td>
                                        <td>{{$dealer->Lname}}</td>  
                                        <td>{{$dealer->age}}</td>  
                                        <td>{{$dealer->gender}}</td>  
                                        <td>{{$dealer->mobileNumber}}</td>  
                                        <td>{{$dealer->address}}</td>  
                                        <td>{{$dealer->email}}</td>  
                                        <td></td>
                                        <form action="{{url ('deleteUser').$dealer->id}}" method="get">
                                            @csrf
                                            <td><button type="submit" class="btn btn-danger btn-circle-sm"><i
                                                class="fa fa-trash"></i> </button>
                                            </td>
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

                <!-- Dealer register form -->
                <form class="pl-3 pr-3" method="POST" action="{{ url('newUserReg')}}">
                    @csrf

                    <div class="form-group">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Dealer First Name" id="name" name="name"
                                :value="old('name')">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Dealer Last Nname" id="Lname" name="Lname"
                                :value="old('Lname')">
                        </div>
                    </div>

                    
                    <div class="form-group">
                        <div class="form-group">
                            <input class="form-control" type="number" placeholder="Dealer Age" id="mobileNumber" name="age"
                                :value="old('mobileNumber')">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-group">
                            <select name="gender" id="gender" class ='custom-select'>
                                <option value="">--Select Dealer Gender--</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="form-group">
                            <input class="form-control" type="number" placeholder="Dealer Mobile Number" id="mobileNumber" name="mobileNumber"
                                :value="old('mobileNumber')">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Dealer Address" id="address" name="address"
                                :value="old('address')">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-group">
                            <input class="form-control" type="email" placeholder="email address" id="email" name="email"
                                :value="old('email')">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-group">
                            <input class="form-control" type="password" placeholder="password" id="password"
                                name="password">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-group">
                            <input class="form-control" type="password" placeholder="Confirm Your Password"
                                id="password_confirmation" name="password_confirmation">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="form-group">
                            <select name="role_id" class="custom-select">
                                <option value="">Select your role</option>
                                <option value="dealer">Dealer</option>

                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-group">
                            <input name="userRole" id="userRole" type='hidden' value="dealer">                         
                            </input>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">I
                                accept <a href="#">Terms and Conditions</a></label>
                        </div>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary">Register New Dealer</button>
                    </div>


                </form>


            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



@endsection
