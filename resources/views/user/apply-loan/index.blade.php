
@extends('user.layouts.app')
@section('title', 'Apply For Loan')
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
                                Loan Application
                                <span class="float-right" style="float: right !important;">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddLoan">
                                    Apply For Loan
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="AddLoan">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Apply For Loan</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" enctype="multipart/form-data" action="{{ url('user/apply-loan/store') }}">
                                                        @csrf
                                                        <div class=" row align-items-center">
                                                            <div class="form-group col-sm-3">
                                                                <label>Select Loan:</label>
                                                                <select class="form-control" name="loan" required>
                                                                    <option selected disabled value="">Choose</option>
                                                                    @foreach ($allloans as $loan)
                                                                        <option value="{{ $loan->id }}">{{ $loan->loan_title }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>

                                                            <div class="form-group col-sm-3">
                                                                <label>Amount:</label>
                                                                <input type="number" class="form-control" name="amount" required>
                                                            </div>

                                                            <div class="form-group col-sm-3">
                                                                <label>Full Name:</label>
                                                                <input type="text" class="form-control" name="name" required>
                                                            </div>

                                                            <div class="form-group col-sm-3">
                                                                <label>State:</label>
                                                                <input type="text" class="form-control" name="state" required>
                                                            </div>

                                                            <div class="form-group col-sm-3">
                                                                <label>City:</label>
                                                                <input type="text" class="form-control" name="city" required>
                                                            </div>

                                                            <div class="form-group col-sm-3">
                                                                <label>Zip:</label>
                                                                <input type="text" class="form-control" name="zip" required>
                                                            </div>

                                                            <div class="form-group col-sm-3">
                                                                <label>Date of Birth:</label>
                                                                <input type="date" class="form-control" name="dob" required>
                                                            </div>

                                                            <div class="form-group col-sm-3">
                                                                <label>Gender:</label>
                                                                <input type="text" class="form-control" name="gender" required>
                                                            </div>

                                                            <div class="form-group col-sm-6">
                                                                <label>Identification:</label>
                                                                <input type="file" class="form-control" name="identification" required>
                                                            </div>

                                                            
                                                            
                                                            <div class="form-group col-sm-6">
                                                                <label>Recent Image:</label>
                                                                <input type="file" class="form-control" name="recent_image" required>
                                                            </div>

                                                            <div class="form-group col-sm-12">
                                                                <label>Address:</label>
                                                                <textarea class="form-control" name="address"></textarea>
                                                            </div>

                                                          

                                                        </div>

                                                        <button type="submit" class="btn btn-primary mr-2 btn-block">Apply Now</button>
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
                                            <th>Name</th>
                                            <th>Loan_Type</th>
                                            <th>Amount</th>
                                            <th>State</th>
                                            <th>City</th>
                                            <th>Zip</th>
                                            <th>DOB</th>
                                            <th>Gender</th>
                                            <th>Identification</th>
                                            <th>Address</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($loans as $loan)
                                            <tr>
                                                
                                                <td>
                                                    @if (empty($loan->recent_image))
                                                        <img style="width: 80px;" src="{{ asset('backend/images/user/user.png') }}" class="img-fluid img-thumbnail rounded-circle">
                                                    @else
                                                        <img style="width: 80px;" src="{{ asset('backend/user/apply/'.$loan->recent_image) }}" class="img-fluid img-thumbnail rounded-circle">
                                                    @endif
                                                </td>
                                                <td>{{ $loan->name }}</td>
                                                <td>
                                                    @php
                                                        error_reporting(0);
                                                        $getlon = DB::table('loans')->where('id', $loan->loan_id)->first();
                                                        echo $getlon->loan_title;
                                                    @endphp
                                                </td>
                                                <td>{{ $loan->amount }}</td>
                                                <td>{{ $loan->state }}</td>
                                                <td>{{ $loan->city }}</td>
                                                <td>{{ $loan->zip }}</td>
                                                <td>{{ $loan->dob }}</td>
                                                <td>{{ $loan->gender }}</td>
                                                <td>
                                                    <a target="_blank" href="{{ url('backend/user/identification/'.$loan->identification) }}">View</a>
                                                </td>
                                                <td>{{ $loan->address }}</td>
                                                <td>
                                                    @if ($loan->status == "Pending")
                                                        <span class="badge badge-primary">Pending</span>
                                                    @elseif ($loan->status == "Approved")
                                                        <span class="badge badge-success">Approved</span>

                                                    @elseif ($loan->status == "Rejected")
                                                        <span class="badge badge-danger">Rejected</span>
                                                    @elseif ($loan->status == "Back")
                                                        <span class="badge badge-dark">Back</span>
                                                    @endif
                                                </td>
                                                
                                                <td>
                                                    <div class="btn-group">
                                                        <!-- Button trigger modal -->
                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#UpdateLoan{{ $loan->id }}">
                                                        Update
                                                        </button>
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="UpdateLoan{{ $loan->id }}">
                                                            <div class="modal-dialog modal-xl">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Update Application</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form method="post" enctype="multipart/form-data" action="{{ url('user/apply-loan/update/'.$loan->id) }}">
                                                                            @csrf
                                                                            <div class=" row align-items-center">
                                                                                <div class="form-group col-sm-3">
                                                                                    <label>Select Loan:</label>
                                                                                    <select class="form-control" name="loan" required>
                                                                                        <option selected disabled value="">Choose</option>
                                                                                        @foreach ($allloans as $loan1)
                                                                                            <option value="{{ $loan1->id }}"
                                                                                                @if ($loan1->id == $getlon->id)
                                                                                                    selected 
                                                                                                @endif
                                                                                            >{{ $loan1->loan_title }}</option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>

                                                                                <div class="form-group col-sm-3">
                                                                                    <label>Amount:</label>
                                                                                    <input type="number" class="form-control" name="amount" value="{{ $loan->amount }}"  required>
                                                                                </div>

                                                                                <div class="form-group col-sm-3">
                                                                                    <label>Full Name:</label>
                                                                                    <input type="text" class="form-control" name="name" value="{{ $loan->name }}"  required>
                                                                                </div>
                                                                                <div class="form-group col-sm-3">
                                                                                    <label>State:</label>
                                                                                    <input type="text" class="form-control" name="state" value="{{ $loan->state }}" required>
                                                                                </div>


                                                                                <div class="form-group col-sm-3">
                                                                                    <label>City:</label>
                                                                                    <input type="text" class="form-control" name="city" value="{{ $loan->city }}"  required>
                                                                                </div>

                                                                                <div class="form-group col-sm-3">
                                                                                    <label>Zip:</label>
                                                                                    <input type="text" class="form-control" name="zip" value="{{ $loan->zip }}"  required>
                                                                                </div>

                                                                                <div class="form-group col-sm-3">
                                                                                    <label>Date of Birth:</label>
                                                                                    <input type="date" class="form-control" name="dob" value="{{ $loan->dob }}"  required>
                                                                                </div>

                                                                                <div class="form-group col-sm-3">
                                                                                    <label>Gender:</label>
                                                                                    <input type="text" class="form-control" name="gender" value="{{ $loan->gender }}" required>
                                                                                </div>


                                                                                <div class="form-group col-sm-6">
                                                                                    <label>Identification:</label>
                                                                                    <input type="file" class="form-control" name="identification" value="{{ $loan->identification }}">
                                                                                    <input type="hidden" class="form-control" name="previous_identification" value="{{ $loan->identification }}">
                                                                                </div>

                                                                                
                                                                                
                                                                                <div class="form-group col-sm-6">
                                                                                    <label>Recent Image:</label>
                                                                                    <input type="file" class="form-control" name="recent_image">
                                                                                    <input type="hidden" class="form-control" name="previous_recent_image" value="{{ $loan->recent_image }}">
                                                                                </div>

                                                                                <div class="form-group col-sm-12">
                                                                                    <label>Address:</label>
                                                                                    <textarea class="form-control" name="address">{{ $loan->address }}</textarea>
                                                                                </div>



                                                                            </div>

                                                                            <button type="submit" class="btn btn-primary mr-2 btn-block">Update Loan</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        

                                                        <a rel="{{ $loan->id }}" rel1="user/apply-loan/delete" class="btn btn-danger Delete" href="javascript::">Delete</a>
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
