@extends('layout.doctor.doctorLayout')
@section('doctorLayout')

<!-- content -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">View Appointment</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="adminDashboard" class="text-muted">Home</a></li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">E-Chanelling</li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">View Appointment</li>
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

                <h4 class="card-title">Patient Appointment Details</h4>
                <h6 class="card-subtitle">Write some text here</h6>

                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered display no-wrap"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th>Doctor Name</th>
                                <th>Patient Name</th>
                                <th>Patient Age</th>
                                <th>Patient Mobile Number</th>
                                <th>Patient Address</th>
                                <th>Patient Gender</th>
                                <th>Patient Status</th>
                                <th>Appoinymnent Date</th>
                                <th>Appoinymnent Time</th>

                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Doctor Name</th>
                                <th>Patient Name</th>
                                <th>Patient Age</th>
                                <th>Patient Mobile Number</th>
                                <th>Patient Address</th>
                                <th>Patient Gender</th>
                                <th>Patient Status</th>
                                <th>Appoinymnent Date</th>
                                <th>Appoinymnent Time</th>

                            </tr>
                        </tfoot>
                        <tbody>
                            
                            @foreach($viewAppointment as $appointment)
                                <tr>
                                    <td>{{$appointment->docName}}</td>
                                    <td>{{$appointment->pName}}</td>
                                    <td>{{$appointment->pAge}}</td>
                                    <td>{{$appointment->pMobile}}</td>
                                    <td>{{$appointment->pAddress}}</td>
                                    <td>{{$appointment->pGender}}</td>
                                    <td>{{$appointment->pStatus}}</td>
                                    <td>{{$appointment->appointmentDate}}</td>
                                    <td>{{$appointment->appointmentTime}}</td>
        
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
