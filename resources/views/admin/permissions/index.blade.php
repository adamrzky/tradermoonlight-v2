@extends('admin.layouts.app-admin')

@section('title', 'Dashboard')



@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <h2>Permission</h2>
            </div>
            <div class="pull-right">
                @can('permission-create')
                <a class="btn btn-success" href="{{ route('permissions.create') }}"> Create New Permission</a>
                @endcan
            </div>
            <br>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
           
            <th width="280px">Action</th>
        </tr>
	    @foreach ($permissions as $permission)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $permission->name }}</td>
	      
	        <td>
                <form action="{{ route('permissions.destroy', $permission->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('permissions.show',Crypt::encrypt ($permission->id)) }}">Show</a>
                    @can('permission-edit')
                    <a class="btn btn-primary" href="{{ route('permissions.edit',Crypt::encrypt ($permission->id)) }}">Edit</a>
                    @endcan


                    @csrf
                    @method('DELETE')
                    @can('permission-delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    @endcan
                </form>
	        </td>
	    </tr>
	    @endforeach
    </table>


    {!! $permissions->links() !!}




@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!'); 
</script>
@stop

