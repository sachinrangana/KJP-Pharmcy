@extends('layout.admin.adminLayout')
@section('adminLayout')

<!-- content -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Update Doctor Details</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="adminDashboard" class="text-muted">Home</a></li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">Users</li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">Doctors</li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">Update Doctor Details</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<br>

<div class="card w-75">
    <div class="card-body ">
        <h4 class="card-title">Update Doctor Details</h4>

        <form class="mt-4" action="{{url ('updateDoctorDetails/'.$doc->id)}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('PUT')
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label for="" class="text-secondary">Doctor Name :</label>
                        <input type="text" class="form-control" id="docName" name="docName" value="{{$doc->docName}}" 
                            data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
                    </div>

                    <div class="col-md-6">
                        <label for="" class="text-secondary">Doctor Hospital Name :</label>
                        <input type="text" class="form-control" id="docHospital" name="docHospital" value="{{$doc->docHospital}}"
                            placeholder="Enter Doctor Hospital Name" data-toggle="tooltip" data-placement="bottom"
                            title="Tooltip on bottom">
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-md-6">
                        <label for="" class="text-secondary">Doctor Catergory :</label>
                        <input type="text" class="form-control" id="docCatergory" name="docCatergory" value="{{$doc->docCatergory}}"
                            placeholder="Doctor Catergory" data-toggle="tooltip" data-placement="bottom"
                            title="Tooltip on bottom">
                    </div>

                    <div class="col-md-6">
                        <label for="" class="text-secondary">Doctor Qulification :</label>
                        <input type="text" class="form-control" id="docQulification" name="docQulification" value="{{$doc->docQulification}}"
                            placeholder="Doctor Quelification" data-toggle="tooltip" data-placement="bottom"
                            title="Tooltip on bottom">
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-md-6">
                        <label for="" class="text-secondary">Doctor Photo :</label>
                        <input type="file" class="form-control" id="docPhoto" name="docPhoto" value="{{$doc->docPhoto}}" 
                            
                            placeholder="Placeholder Text" data-toggle="tooltip" data-placement="bottom"
                            title="Tooltip on bottom"> 
                            <img src="/docImg/{{$doc->docPhoto }}" width= "70px" height ="70px" alt = "Image" alt="">
                    </div>

                    <div class="col-md-6">
                        <label for="" class="text-secondary">Doctor Details Show:</label>
                        <select name="isActive" id="isActive" value="{{$doc->isActive}}" class="custom-select">
                                @if($doc->isActive == 1)
                                    <option value="1">Active</option>
                                    <option value="0">InActive</option>

                                @else
                                    <option value="0">InActive</option>
                                    <option value="1">Active</option>

                                @endif
                        </select>
                    </div>
                </div>

                <hr>
                <button class="btn btn-rounded btn btn-primary" type="submit">Update Details</button>
            </div>
        </form>
    </div>
</div>




@endsection
