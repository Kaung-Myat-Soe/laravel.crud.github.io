@extends('products.layout')

@section('content')

<div class="row ">
   <div class="col-lg-12 margin-tb" >
    <div class="pull-left">
        <h2>Add New Product</h2>
        
    </div>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('products.index')}}" >Back</a>
    </div>
    
   </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong>There problem with your input! <br> <br>
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    
</div>
@endif

    <form action="{{ route('products.store') }}" method='POST' enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text"  name="name" class="form-control" value="Kaung Myat Soe" placeholder="Name">
                   </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Detail:</strong>
                        <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>
                        
                    </div>
                    
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Detail:</strong>
                        <input class="form-control" type="file" style="height:150px" name="image" id="image" placeholder="Image">
                        
                    </div>
                    
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

        </div>
    </form>

@endsection