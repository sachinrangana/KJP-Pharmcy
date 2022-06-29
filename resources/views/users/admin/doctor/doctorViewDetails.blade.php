@extends('layout.admin.adminLayout')
@section('adminLayout')

<!-- content -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">View Doctor Details</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="adminDashboard" class="text-muted">Home</a></li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">Users</li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">Doctors</li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">View Doctor Details</li>
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

          
                <h4 class="card-title">View Doctors Details</h4>
                <h6 class="card-subtitle">Write some text here</h6>

                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered display no-wrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>Doctor Photo</th>
                                <th>Doctor Name </th>
                                <th>Doctor Hospital</th>
                                <th>Doctor Catergory</th>
                                <th>Doctor Qulification</th>
                                <th>Active/Inactive</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>

                        <tfoot>
                            <tr>
                                <th>Doctor Photo</th>
                                <th>Doctor Name </th>
                                <th>Doctor Hospital</th>
                                <th>Doctor Catergory</th>
                                <th>Doctor Qulification</th>
                                <th>Active/Inactive</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </tfoot>

                        <tbody>

                            @foreach($docDetail as $doc)
                                @if($doc->status ==1)
                                    <tr>
                                        <td><img src="/docImg/{{$doc->docPhoto }}" width= "70px" height ="70px" alt = "Image" alt=""></td>
                                        <td>{{$doc->docName}}</td>
                                        <td>{{$doc->docHospital}}</td> 
                                        <td>{{$doc->docCatergory}}</td>
                                        <td>{{$doc->docQulification}}</td>                                
                                        <td>
                                            @if($doc->isActive ==1)
                                                <p class=" font-weight-bold text-success"> Active</p>
                                            @else
                                                <p class=" font-weight-bold text-danger"> Inactive</p>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{url ('editDoctorDetail').$doc->id}}" class="btn btn-primary">Edit</a>
                                        </td>
                                        <td>
                                            <form action="{{url('deleteDoctorDetail'.$doc->id)}}" method="get">
                                                @csrf                                                
                                                    <button type="submit" class="btn btn-danger btn-circle-sm"><i
                                                            class="fa fa-trash"></i> </button>
                                                
                                            </form>
                                        </td>
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







@endsection
