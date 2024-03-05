@extends('admin.layouts.app')
@section('title', 'Loans')
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
                            <h4 class="card-title">
                                Loans
                                <span class="float-right" style="float: right !important;">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddLoan">
                                    Add Loan
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="AddLoan">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Add Loan</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" enctype="multipart/form-data" action="{{ url('admin/loan/store') }}">
                                                        @csrf
                                                        <div class=" row align-items-center">
                                                            <div class="form-group col-sm-12">
                                                                <label>Loan Title:</label>
                                                                <input type="text" class="form-control" name="loan_title" id="cat_name" required>
                                                            </div>

                                                            <div class="form-group col-sm-12">
                                                                <label>Loan Description:</label>
                                                                <textarea class="form-control" name="loan_description"></textarea>
                                                            </div>
                                                            
                                                            <div class="form-group col-sm-12">
                                                                <label>Loan Image:</label>
                                                                <input type="file" class="form-control" name="loan_image" required>
                                                            </div>

                                                          

                                                        </div>

                                                        <button type="submit" class="btn btn-primary mr-2 btn-block">Add Loan</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </span>
                            </h4>

                        </div>
                    </div>
                    <div class="iq-card-body">
                        <div class="table-responsive">
                                <table id="example" class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($loans as $loan)
                                            <tr>
                                                
                                                <td>
                                                    @if (empty($loan->loan_image))
                                                        <img style="width: 80px;" src="{{ asset('backend/images/user/user.png') }}" class="img-fluid img-thumbnail rounded-circle">
                                                    @else
                                                        <img style="width: 80px;" src="{{ asset('backend/admin/loan/'.$loan->loan_image) }}" class="img-fluid img-thumbnail rounded-circle">
                                                    @endif
                                                </td>
                                                <td>{{ $loan->loan_title }}</td>
                                                
                                                <td>{{ mb_strimwidth($loan->loan_description, 0, 50, "...") }}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <!-- Button trigger modal -->
                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#UpdateLoan{{ $loan->id }}">
                                                        Update
                                                        </button>
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="UpdateLoan{{ $loan->id }}">
                                                            <div class="modal-dialog modal-lg">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Update Loan</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form method="post" enctype="multipart/form-data" action="{{ url('admin/loan/update/'.$loan->id) }}">
                                                                            @csrf
                                                                            <div class=" row align-items-center">
                                                                                <div class="form-group col-sm-12">
                                                                                    <label>Loan Title:</label>
                                                                                    <input type="text" class="form-control" name="loan_title" value="{{ $loan->loan_title }}" required>
                                                                                </div>

                                                                                <div class="form-group col-sm-12">
                                                                                    <label>Loan Description:</label>
                                                                                    <textarea class="form-control" name="loan_description">{{ $loan->loan_description }}</textarea>
                                                                                </div>
                                                                                
                                                                                <div class="form-group col-sm-10">
                                                                                    <label>Loan Image:</label>
                                                                                    <input type="file" class="form-control" name="loan_image">
                                                                                </div>

                                                                                <div class="form-group col-sm-2">
                                                                                    <label>Image:</label>
                                                                                    @if (empty($loan->loan_image))
                                                                                        <img style="width: 80px;" src="{{ asset('backend/images/user/user.png') }}" class="img-fluid img-thumbnail">
                                                                                    @else
                                                                                        <img style="width: 80px;" src="{{ asset('backend/admin/loan/'.$loan->loan_image) }}" class="img-fluid img-thumbnail">
                                                                                    @endif
                                                                                </div>




                                                                            </div>

                                                                            <button type="submit" class="btn btn-primary mr-2 btn-block">Update Loan</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        

                                                        <a rel="{{ $loan->id }}" rel1="admin/loan/delete" class="btn btn-danger Delete" href="javascript::">Delete</a>
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
