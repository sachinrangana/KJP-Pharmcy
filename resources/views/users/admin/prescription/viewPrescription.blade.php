@extends('layout.admin.adminLayout')
@section('adminLayout')
<!-- content -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">View User Prescription</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="adminDashboard" class="text-muted">Home</a></li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">User Prescription</li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">View Prescription</li>
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


                <h4 class="card-title">Chaneled Doctors</h4>
                <h6 class="card-subtitle">Write some text here</h6>

                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered display no-wrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>User Name</th>
                                <th>Age</th>
                                <th>Gender</th>
                                <th>Mobile Number</th>
                                <th>Home Address</th>
                                <th>Street</th>
                                <th>City</th>
                                <th>Postal Code</th>
                                <th>Prescription Date</th>
                                <th>Prescription</th>
                                <th>Reply</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>User Name</th>
                                <th>Age</th>
                                <th>Gender</th>
                                <th>Mobile Number</th>
                                <th>Home Address</th>
                                <th>Street</th>
                                <th>City</th>
                                <th>Postal Code</th>
                                <th>Prescription Date</th>
                                <th>Prescription</th>
                                <th>Reply</th>
                                <th>Delete</th>
                            </tr>
                        </tfoot>
                        <tbody>

                            @foreach($prescriptions as $pre)
                            <tr>
                                <td>{{$pre->userName}}</td>
                                <td>{{$pre->age}}</td>
                                <td>{{$pre->gender}}</td>
                                <td>{{$pre->phone}}</td>
                                <td>{{$pre->address}}</td>
                                <td>{{$pre->street}}</td>
                                <td>{{$pre->city}}</td>
                                <td>{{$pre->postalCode}}</td>
                                <td>{{$pre->prescriptionDate}}</td>
                                <td><a href="{{url('preViewPrescription'.$pre->id)}}"><img
                                            src="/File/{{$pre->prescription }}" width="70px" height="70px"
                                            alt="Image"></a></td>
                                <td></td>
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


@endsection
