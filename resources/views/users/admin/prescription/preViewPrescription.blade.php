@extends('layout.admin.adminLayout')
@section('adminLayout')

<div class="container">
<iframe src="/File/{{$pre->prescription}}" frameborder="0" width="100%" height="1000px"></iframe>
<img src="/File/{{$pre->prescription}}"  width="100%" height="1000px" alt="">
</div>
@endsection