@extends('layout.admin.adminLayout')
@section('adminLayout')

<!-- content -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Add Doctor Details</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="adminDashboard" class="text-muted">Home</a></li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">Users</li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">Doctors</li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">Add Doctor Details</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<br>

<div class="card w-75">
    <div class="card-body ">
        <h4 class="card-title">Add Doctor Details</h4>

        <form class="mt-4" action="{{url ('addDoctorDetail')}}" method="POST" enctype="multipart/form-data"> 
            @csrf
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label for="" class="text-secondary">Doctor Name :</label>
                        <input type="text" class="form-control" id="docName" name="docName" value="{{$doctor->name}}" readonly
                            data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
                    </div>

                    <div class="col-md-6">
                        <label for="" class="text-secondary">Doctor Hospital Name :</label>
                        <input type="text" class="form-control" id="docHospital" name="docHospital"  placeholder="Enter Doctor Hospital Name"
                            data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-md-6">
                        <label for="" class="text-secondary">Doctor Catergory :</label>
                        <input type="text" class="form-control" id="docCatergory" name="docCatergory"  placeholder="Doctor Catergory"
                            data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
                    </div>

                    <div class="col-md-6">
                        <label for="" class="text-secondary">Doctor Qulification :</label>
                        <input type="text" class="form-control" id="docQulification" name="docQulification"  placeholder="Doctor Quelification"
                            data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-md-6">
                        <label for="" class="text-secondary">Doctor Photo :</label>
                        <input type="file" class="form-control" id="docPhoto" name="docPhoto"  placeholder="Placeholder Text"
                            data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
                    </div>
                </div>

                <hr>
                <button class="btn btn-rounded btn btn-primary" type="submit">Add Details</button>
            </div>
        </form>
    </div>
</div>




@endsection
