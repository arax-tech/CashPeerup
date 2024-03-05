
@extends('admin.layouts.app')
@section('title', 'Reviews')
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
                            <h4 class="card-title">Reviews</h4>

                        </div>
                    </div>
                    <div class="iq-card-body">
                        <div class="table-responsive">
                                <table id="example" class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th style="width: 20%">Email</th>
                                            <th>Comment</th>
                                            <th style="width: 20%">Ratings</th>
                                            <th>Date</th>
                                            <th class="text-center">Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($reviews as $review)
                                            <tr>
                                                <td>{{ $review->name }}</td>
                                                <td>{{ $review->email }}</td>
                                                <td>{{ mb_strimwidth($review->comment, 0, 20, "...") }}</td>
                                                <td>
                                                    @if($review->ratings == 1)

                                                        <span><i class="fa fa-star text-warning"></i></span>
                                                        <span><i class="fa fa-star" ></i></span>
                                                        <span><i class="fa fa-star" ></i></span>
                                                        <span><i class="fa fa-star" ></i></span>
                                                        <span><i class="fa fa-star" ></i></span>
                                                    @elseif($review->ratings == 2)
                                                        <span><i class="fa fa-star text-warning"></i></span>
                                                        <span><i class="fa fa-star text-warning"></i></span>
                                                        <span><i class="fa fa-star" ></i></span>
                                                        <span><i class="fa fa-star" ></i></span>
                                                        <span><i class="fa fa-star" ></i></span>
                                                    @elseif($review->ratings == 3)
                                                        <span><i class="fa fa-star text-warning"></i></span>
                                                        <span><i class="fa fa-star text-warning"></i></span>
                                                        <span><i class="fa fa-star text-warning"></i></span>
                                                        <span><i class="fa fa-star" ></i></span>
                                                        <span><i class="fa fa-star" ></i></span>
                                                    @elseif($review->ratings == 4)
                                                        <span><i class="fa fa-star text-warning"></i></span>
                                                        <span><i class="fa fa-star text-warning"></i></span>
                                                        <span><i class="fa fa-star text-warning"></i></span>
                                                        <span><i class="fa fa-star text-warning"></i></span>
                                                        <span><i class="fa fa-star" ></i></span>
                                                    @elseif($review->ratings == 5)
                                                        <span><i class="fa fa-star text-warning"></i></span>
                                                        <span><i class="fa fa-star text-warning"></i></span>
                                                        <span><i class="fa fa-star text-warning"></i></span>
                                                        <span><i class="fa fa-star text-warning"></i></span>
                                                        <span><i class="fa fa-star text-warning"></i></span>
                                                    @endif
                                                </td>
                                                <td>{{ date('d M Y', strtotime($review->created_at)) }}</td>
                                                <td class="align-middle text-center">
                                                    <div class="btn-group">
                                                        <a class="btn btn-primary" href="javascript::" data-toggle="modal" data-target="#Update{{ $review->id }}">Update</a>
                                                        <a  class="btn btn-danger Delete" href="{{ url('admin/review/delete/'.$review->id) }}" onclick="return confirm('are you sure to delete ?');">Delete</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- Modal -->
                                            <div class="modal fade" id="Update{{ $review->id }}">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Update Review</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="post" action="{{ url('admin/review/update/'.$review->id) }}">
                                                                @csrf
                                                                <div class="row mb-3">
                                                                 
                                                                    <div class="col-lg-6">
                                                                        <label>Name</label>
                                                                        <input type="text" class="form-control" name="name" value="{{ $review->name }}" required>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <label>Email</label>
                                                                        <input type="email" class="form-control" name="email" value="{{ $review->email }}" required>
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    
                                                                    <div class="col-lg-6">
                                                                        <label>Comment</label>
                                                                        <input type="text" class="form-control" name="comment" value="{{ $review->comment }}">
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <label>Ratings</label>
                                                                        <input type="text" class="form-control" name="ratings" value="{{ $review->ratings }}">
                                                                    </div>


                                                                 
                                                                    
                                                                </div>


                                                                <div class="row mb-3">
                                                                    
                                                                    <div class="col-lg-12">
                                                                        <label>Date</label>
                                                                        <input type="datetime-local" class="form-control" name="created_at" value="{{ $review->created_at }}">
                                                                    </div>
                                                                   
                                                                    
                                                                </div>

                                                                
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <input type="submit" class="btn btn-primary btn-block" value="Update">
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
