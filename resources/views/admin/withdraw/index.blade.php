@extends('admin.layouts.app')
@section('title', 'Withdraw')
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
                                Withdraw Requests
                                
                            </h4>

                        </div>
                    </div>
                    <div class="iq-card-body">
                        <div class="table-responsive">
                                <table id="example" class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>WithdrawMethod</th>
                                            <th>Amount</th>
                                            <th>State</th>
                                            <th>City</th>
                                            <th>Zip</th>
                                            <th>DOB</th>
                                            <th>Gender</th>
                                            <th>Identification</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($withdraws as $withdraw)
                                            <tr>
                                                
                                                <td>
                                                    @if (empty($withdraw->recent_image))
                                                        <img style="width: 80px;" src="{{ asset('backend/images/user/user.png') }}" class="img-fluid img-thumbnail rounded-circle">
                                                    @else
                                                        <img style="width: 80px;" src="{{ asset('backend/user/withdraw/'.$withdraw->recent_image) }}" class="img-fluid img-thumbnail rounded-circle">
                                                    @endif
                                                </td>
                                                <td>{{ $withdraw->name }}</td>
                                                <td>{{ $withdraw->method }}</td>
                                                <td>{{ $withdraw->amount }}</td>
                                                <td>{{ $withdraw->state }}</td>
                                                <td>{{ $withdraw->city }}</td>
                                                <td>{{ $withdraw->zip }}</td>
                                                <td>{{ $withdraw->dob }}</td>
                                                <td>{{ $withdraw->gender }}</td>
                                                <td>
                                                    <a target="_blank" href="{{ url('backend/user/identification/'.$withdraw->identification) }}">View</a>
                                                </td>
                                                <td>
                                                    @if ($withdraw->status == "Pending")
                                                        <span class="badge badge-primary">Pending</span>
                                                    @elseif ($withdraw->status == "Approved")
                                                        <span class="badge badge-success">Approved</span>

                                                    @elseif ($withdraw->status == "Rejected")
                                                        <span class="badge badge-danger">Rejected</span>
                                                    @elseif ($withdraw->status == "Back")
                                                        <span class="badge badge-dark">Back</span>
                                                    @endif
                                                </td>
                                                
                                                <td>
                                                    <div class="btn-group">
                                                        <!-- Button trigger modal -->
                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#UpdateLoan{{ $withdraw->id }}">
                                                        Update
                                                        </button>
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="UpdateLoan{{ $withdraw->id }}">
                                                            <div class="modal-dialog modal-xl">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Update Withdraw</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form method="post" enctype="multipart/form-data" action="{{ url('admin/withdraw/update/'.$withdraw->id) }}">
                                                                            @csrf
                                                                            <div class=" row align-items-center">
                                                                              

                                                                                <div class="form-group col-sm-3">
                                                                                    <label>Select Method:</label>
                                                                                    <select class="form-control" name="method" required>
                                                                                        <option selected disabled value="">Choose</option>
                                                                                        <option value="Mobile Deposit"
                                                                                        @if ($withdraw->method == "Mobile Deposit")
                                                                                            selected 
                                                                                        @endif
                                                                                        >Mobile Deposit </option>
                                                                                        <option value="Cashiers Check"
                                                                                        @if ($withdraw->method == "Cashiers Check")
                                                                                            selected 
                                                                                        @endif
                                                                                        >Cashiers Check  </option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group col-sm-3">
                                                                                    <label>Full Name:</label>
                                                                                    <input type="text" class="form-control" name="name" value="{{ $withdraw->name }}"  required>
                                                                                </div>

                                                                                <div class="form-group col-sm-3">
                                                                                    <label>Amount:</label>
                                                                                    <input type="number" class="form-control" name="amount" value="{{ $withdraw->amount }}"  required>
                                                                                </div>

                                                                                

                                                                                <div class="form-group col-sm-3">
                                                                                    <label>State:</label>
                                                                                    <input type="text" class="form-control" name="state" value="{{ $withdraw->state }}"  required>
                                                                                </div>

                                                                                <div class="form-group col-sm-3">
                                                                                    <label>City:</label>
                                                                                    <input type="text" class="form-control" name="city" value="{{ $withdraw->city }}"  required>
                                                                                </div>

                                                                                <div class="form-group col-sm-3">
                                                                                    <label>Zip:</label>
                                                                                    <input type="text" class="form-control" name="zip" value="{{ $withdraw->zip }}"  required>
                                                                                </div>

                                                                                <div class="form-group col-sm-3">
                                                                                    <label>Date of Birth:</label>
                                                                                    <input type="date" class="form-control" name="dob" value="{{ $withdraw->dob }}"  required>
                                                                                </div>
                                                                                <div class="form-group col-sm-3">
                                                                                    <label>Gender:</label>
                                                                                    <input type="text" class="form-control" name="gender" value="{{ $withdraw->gender }}"  required>
                                                                                </div>


                                                                                <div class="form-group col-sm-4">
                                                                                    <label>Identification:</label>
                                                                                    <input type="file" class="form-control" name="identification" value="{{ $withdraw->identification }}" >
                                                                                     <input type="hidden" class="form-control" name="previous_identification" value="{{ $withdraw->identification }}">
                                                                                </div>

                                                                              
                                                                                <div class="form-group col-sm-4">
                                                                                    <label>Recent Image:</label>
                                                                                    <input type="file" class="form-control" name="recent_image">
                                                                                    <input type="hidden" class="form-control" name="previous_recent_image" value="{{ $withdraw->recent_image }}">
                                                                                </div>

                                                                                <div class="form-group col-sm-4">
                                                                                    <label>Select Status:</label>
                                                                                    <select class="form-control" name="status" required>
                                                                                        <option selected disabled value="">Choose</option>
                                                                                            <option value="Pending"
                                                                                            @if ($withdraw->status == "Pending")
                                                                                                selected 
                                                                                            @endif
                                                                                            >Pending</option>
                                                                                            <option value="Approved"
                                                                                            @if ($withdraw->status == "Approved")
                                                                                                selected 
                                                                                            @endif
                                                                                            >Approved</option>
                                                                                            <option value="Rejected"
                                                                                            @if ($withdraw->status == "Rejecte")
                                                                                                selected 
                                                                                            @endif
                                                                                            >Rejected</option>
                                                                                            <option value="Back"
                                                                                            @if ($withdraw->status == "Back")
                                                                                                selected 
                                                                                            @endif
                                                                                            >Back</option>
                                                                                    </select>
                                                                                </div>


                                                                            </div>

                                                                            <button type="submit" class="btn btn-primary mr-2 btn-block">Update Withdraw</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        

                                                        <a rel="{{ $withdraw->id }}" rel1="admin/withdraw/delete" class="btn btn-danger Delete" href="javascript::">Delete</a>
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
