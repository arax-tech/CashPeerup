
@extends('admin.layouts.app')
@section('title', 'Users')
@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
<style type="text/css">
    label{font-size: 14px;}

</style>
@endsection
@section('content')

<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="pl-4 pt-4 pr-4">
                        <div class="iq-header-title">
                            <h4 class="card-title">Users</h4>

                        </div>
                    </div>
                    <div class="iq-card-body">
                        <div class="table-responsive">
                                <table id="example" class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>City</th>
                                            <th>Address</th>
                                            <th>RegisterAt</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                
                                                <td>
                                                    @if (empty($user->image))
                                                        <img style="width: 80px;" src="{{ asset('placeholder.png') }}" class="img-fluid img-thumbnail rounded-circle">
                                                    @else
                                                        <img style="width: 80px;" src="{{ asset('backend/user/profile/'.$user->image) }}" class="img-fluid img-thumbnail rounded-circle">
                                                    @endif
                                                </td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->city }}</td>
                                                <td>{{ $user->address }}</td>
                                                <td>{{ $user->created_at->format('d M Y') }}</td>
                                                
                                                <td>
                                                    <div class="btn-group">
                                                       
                                                        

                                                        <a rel="{{ $user->id }}" rel1="admin/user/delete" class="btn btn-danger Delete" href="javascript::">Delete</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
<script>
    window.onload = function() {
      document.getElementById("cat_name").focus();
    };
</script>
@endsection
