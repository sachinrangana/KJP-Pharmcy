@extends('layout.admin.adminLayout')
@section('adminLayout')

<!-- content -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">View Admin </h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="adminDashboard" class="text-muted">Home</a></li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">Users</li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">Admin</li>
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
                <h4 class="card-title">Registered Staff Members</h4>
                <h6 class="card-subtitle">Write some text here</h6>

                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered display no-wrap" style="width:100%"
                        cellspacing="0">
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
                            </tr>
                        </tfoot>

                        <tbody>
                            @foreach($admins as $admin)
                            <tr>
                                <td>{{$admin->name}}</td>
                                <td>{{$admin->Lname}}</td>
                                <td>{{$admin->age}}</td>
                                <td>{{$admin->gender}}</td>
                                <td>{{$admin->mobileNumber}}</td>
                                <td>{{$admin->address}}</td>
                                <td>{{$admin->email}}</td>
                                <td><button type="button" class="btn btn-rounded btn-outline-success"><i
                                            class="fa fa-edit"></i></td>

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
