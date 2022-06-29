@extends('layout.admin.adminLayout')
@section('adminLayout')

<!-- content -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Update Product Details</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="adminDashboard" class="text-muted">Home</a></li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">Products</li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">Update Product Details</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<br>

<div class="card w-75">
    <div class="card-body ">
        <h4 class="card-title">Update Product Details</h4>
        <form class="pl-3 pr-3" action="{{url('updateProduct'.$products->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
           @method('PUT')
            <div class="row">
                <div class=col-md-6>
                    <div class="form-group">
                        <label for="catid">Product ID</label>
                        <select name="catid" id="catid" class="custom-select">
                            <option value="">{{$products->catergory->name}}</option>
                          
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Product Name</label>
                        <input class="form-control" type="text" value="{{$products->name}}" id="name" name="name" required
                            placeholder="Enter Product Name">
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="description">Product Descrption</label>
                        <textarea name="description" id="description" class="form-control">{{$products->description}}</textarea>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="buyingPrice">Buying Price</label>
                        <input class="form-control" type="number" value="{{$products->buyingPrice}}" id="buyingPrice" name="buyingPrice" required
                            placeholder="Enter Product Name">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="sellingPrice">Selling Price</label>
                        <input class="form-control" type="number" value="{{$products->sellingPrice}}" id="sellingPrice" name="sellingPrice" required
                            placeholder="Enter Product Name">
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="qty">Prodcut Qty</label>
                        <input class="form-control" type="number" value="{{$products->qty}}" id="qty" name="qty" required
                            placeholder="Enter Product Name">
                    </div>
                </div>
            </div>

            <div class="row">       
                <div class="col-md-6">
                @if($products->image)
                    <img src="/productImage/{{$products->image }}" width= "70px" height ="70px" alt = "Image" alt="">
                @endif
                    <div class="form-group">
                        <label for="image">Product Image</label>
                        <input class="form-control" type="file" id="image" name="image" 
                            placeholder="Enter Product Name">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label" for="status">Status</label>&nbsp;&nbsp;
                        <input class="form-check-input" type="checkbox" id="status" name="status" {{$products->status == "1"? 'checked': ''}}>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label" for="trending">Trending</label>&nbsp;&nbsp;
                        <input class="form-check-input" type="checkbox" id="trending" name="trending" {{$products->trending == "1"? 'checked': ''}}>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="meta_title">Meta_title</label>
                        <input class="form-control" type="text" value="{{$products->meta_title}}" id="meta_title" name="meta_title" required
                            placeholder="Enter Product Name">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="meta_keyWord">Meta_keyWord</label>
                        <input class="form-control" type="text" value="{{$products->meta_keyWord}}" id="meta_keyWord" name="meta_keyWord" required
                            placeholder="Enter Product Name">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="meta_description">Meta_description</label>
                        <textarea name="meta_description"  id="meta_description" class="form-control">{{$products->name}}</textarea>
                    </div>
                </div>
            </div>



            <hr>

            <div class="form-group text-center">
                <button class="btn btn-primary" type="submit">Add New Product</button>
            </div>

        </form>

    </div>
</div>
@endsection
