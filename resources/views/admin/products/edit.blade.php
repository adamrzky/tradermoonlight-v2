@extends('admin.layouts.app-admin')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>


    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
    
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Detail:</strong>
                    <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail">{{ $product->detail }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Duration:</strong>
                    <input type="text" name="durasi" value="{{ $product->durasi }}" class="form-control" placeholder="Duration">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Variant:</strong>
                    <input type="text" name="variant" value="{{ $product->variant }}" class="form-control" placeholder="Variant">
                </div>
            </div>
            @foreach(range(1, 5) as $i)
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Title Desc {{$i}}:</strong>
                        <input type="text" name="judul_desc{{$i}}" value="{{ $product["judul_desc{$i}"] }}" class="form-control" placeholder="Title Desc {{$i}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Description {{$i}}:</strong>
                        <textarea class="form-control" style="height:150px" name="desc{{$i}}" placeholder="Description {{$i}}">{{ $product["desc{$i}"] }}</textarea>
                    </div>
                </div>
            @endforeach
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
    


{{-- <p class="text-center text-primary"><small>xdamz</small></p> --}}
@endsection