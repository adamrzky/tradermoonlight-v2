@extends('admin.layouts.app-admin')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Product</h2>
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


    <form action="{{ route('products.store') }}" method="POST">
        @csrf
    
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
                <div class="form-group">
                    <strong>Detail:</strong>
                    <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>
                </div>
                <div class="form-group">
                    <strong>Duration (Durasi):</strong>
                    <input type="text" name="durasi" class="form-control" placeholder="Duration">
                </div>
                <div class="form-group">
                    <strong>Variant:</strong>
                    <input type="text" name="variant" class="form-control" placeholder="Variant">
                </div>
            </div>
    
            @foreach(range(1, 5) as $i)
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <strong>Description {{$i}} (Desc{{$i}}):</strong>
                    <textarea class="form-control" style="height:100px" name="desc{{$i}}" placeholder="Description {{$i}}"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <strong>Title for Description {{$i}} (Judul_desc{{$i}}):</strong>
                    <input type="text" name="judul_desc{{$i}}" class="form-control" placeholder="Title for Description {{$i}}">
                </div>
            </div>
            @endforeach
    
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
    


<p class="text-center text-primary"><small>xdamz</small></p>
@endsection