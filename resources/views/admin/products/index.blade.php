@extends('admin.layouts.app-admin')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Products</h2>
            </div>
            <div class="pull-right">
                @can('product-create')
                    <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
                @endcan
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <th class="no-col">No</th>
                <th>Name</th>
                <th>Harga</th>
                <th>Duration</th>
                <th>Variant</th>
                @foreach (range(1, 5) as $i)
                    <th>Title Desc</th>
                    <th>Description</th>
                @endforeach
                <th class="action-col">Action</th>
            </tr>
            @foreach ($products as $key => $product)
                <tr>
                    <td class="no-col">{{ ++$key }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->harga }}</td>
                    <td>{{ $product->durasi }}</td>
                    <td>{{ $product->variant }}</td>
                    @foreach (range(1, 5) as $i)
                        <td>{{ $product["judul_desc{$i}"] }}</td>
                        <td>{{ $product["desc{$i}"] }}</td>
                    @endforeach
                    <td class="action-col">
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('products.show', $product->id) }}">Show</a>
                            @can('product-edit')
                                <a class="btn btn-primary" href="{{ route('products.edit', $product->id) }}">Edit</a>
                            @endcan

                            @csrf
                            @method('DELETE')
                            @can('product-delete')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            @endcan
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

    </div>


        {!! $products->links() !!}


        {{-- <p class="text-center text-primary"><small>xdamz</small></p> --}}
    @endsection



    {{-- <style>
        .table-bordered {
            width: 100%;
            border-collapse: collapse;
        }

        .table-bordered th,
        .table-bordered td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }

        .action-col {
            width: 280px;
        }

        .no-col {
            width: 40px;
        }

        .table-responsive {
            overflow-x: auto;
        }
    </style> --}}
