@extends('layout.admin.adminLayout')
@section('adminLayout')

<form class="user" method="POST" action="" enctype="multipart/form-data">
    {{ csrf_field() }}



    <div class="form-group">
        <input type="text" class="form-control form-control-user" id="" name="mobileNumber"
            placeholder="Enter User Mobile Number" value="" required>

    </div>

    <div class="form-group">
        <textarea name="message" id="" class="form-control form-control-user" placeholder="Enter Message Content"
            required></textarea>

    </div>




    <hr>

    <!-- Add Subject button -->
    <button class="btn btn-primary btn-user btn-block" type="submit">Send Message</button>

    <hr>

    <!-- Back & Reset Button -->
    <div class="row">
        <div class="col-md-6">
            <button class="btn btn-warning btn-user btn-block" type="reset">Reset</button>
        </div>

        <div class="col-md-6">
            <a href="/viewUserRequest" class="btn btn-danger btn-user btn-block">Cancel</a>
        </div>
    </div>


</form>
@endsection
