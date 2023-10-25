@extends('admin.layouts.app-admin')


@section('content')
<div class="card card-height-100 table-responsive">
    <!-- cardheader -->
    <div class="card-header border-bottom-dashed align-items-center d-flex">
        <h4 class="card-title mb-0 flex-grow-1">Menu</h4>
        <div class="flex-shrink-0">
            <button type="button" class="btn btn-soft-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal-form-add-product">
                <i class="ri-add-line"></i>
                Add
            </button>
        </div>
    </div>
        <!-- end cardheader -->
        <!-- Hoverable Rows -->


      
                {{-- @can('akunlaku_dashboard_product_create')
                    <a class="btn btn-success" href="{{ route('product.create') }}"> Create New Product</a>
                @endcan
     --}}

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-hover table-nowrap mb-0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($productsType as $key => $product)
                        <tr>

                            {{-- {{ dd($product->image) }} --}}
                            <td>{{ ++$key }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->desc }}</td>
                            <td><img src="{{ asset($product->image) }}"" alt="Product Image" width="100" height="100"></td>
                            <td>
                                <form action="{{ route('productsType.destroy', $product->id) }}" method="POST">
                                    <a class="btn btn-info" href="{{ route('productsType.show', $product->id) }}">Show</a>
                                   
                                        <a class="btn btn-primary" href="{{ route('productsType.edit', $product->id) }}">Edit</a>
                                   
                                    @csrf
                                    @method('DELETE')
                                   
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                
            </table>
        </div>
        
        <div class="card-footer py-4">
        <nav aria-label="..." class="pagination justify-content-end">
            {{-- {{ $menuGroups->links() }} --}}
        </nav>
    

    </div>


    {{-- {!! $productsType->links() !!} --}}


    {{-- @include('components.form.modal.product.add') --}}
    @endsection


