@extends('user.layouts.app')
@section('title', 'User - Profile')
@section('content')
<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="iq-card">
                    <div class="iq-card-body p-0">
                        <div class="iq-edit-list">
                            <ul class="iq-edit-profile d-flex nav nav-pills">
                                <li class="col-md-3 p-0">
                                    <a class="nav-link active" data-toggle="pill" href="#personal-information">
                                        Personal Information
                                    </a>
                                </li>
                                <li class="col-md-3 p-0">
                                    <a class="nav-link" data-toggle="pill" href="#chang-pwd">
                                        Change Password
                                    </a>
                                </li>
                                <li class="col-md-3 p-0">
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="iq-edit-list-data">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Personal Information</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <form method="post" enctype="multipart/form-data" action="{{ url('user/profile') }}">
                                        @csrf
                                        

                                        <div class="form-group row align-items-center">
                                            <div class="col-md-12">
                                                <div class="profile-img-edit">
                                                    @if (empty(auth::user()->image))
                                                        <img class="profile-pic" src="{{ asset('backend/images/user/11.png') }}" alt="profile-pic">
                                                    @else
                                                        <img class="profile-pic" src="{{ asset('backend/user/profile/'.auth::user()->image) }}" alt="profile-pic">
                                                    @endif
                                                    <div class="p-image">
                                                        <i class="ri-pencil-line upload-button"></i>
                                                        <input class="file-upload" name="profile" type="file" accept="image/*"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" row align-items-center">
                                            <div class="form-group col-sm-4">
                                                <label>Name:</label>
                                                <input type="text" class="form-control" name="name" value="{{ auth::user()->name }}">
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>Email:</label>
                                                <input type="text" class="form-control" name="email" value="{{ auth::user()->email }}">
                                            </div>


                                            <div class="form-group col-sm-4">
                                                <label>Phone:</label>
                                                <input type="text" class="form-control" name="phone" value="{{ auth::user()->phone }}">
                                            </div>


                                            <div class="form-group col-sm-6">
                                                <label>Country:</label>
                                                <input type="text" class="form-control" name="country" value="{{ auth::user()->country }}">
                                            </div>

                                            <div class="form-group col-sm-6">
                                                <label>City:</label>
                                                <input type="text" class="form-control" name="city" value="{{ auth::user()->city }}">
                                            </div>


                                            <div class="form-group col-sm-12">
                                                <label>Address:</label>
                                                <input type="text" class="form-control" name="address" value="{{ auth::user()->address }}">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2 btn-block">Update Profile</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="chang-pwd" role="tabpanel">
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Change Password</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <form method="post"  action="{{ url('/user/update_password') }}">
                                        @csrf
                                        
                                        <div class="form-group">
                                            <label for="cpass">Current Password:</label>
                                            <input type="Password" class="form-control" name="current_password" id="current_password">
                                            <span id="change"></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="npass">New Password:</label>
                                            <input type="Password" class="form-control" name="new_password">
                                        </div>
                                        <div class="form-group">
                                            <label for="vpass">Verify Password:</label>
                                            <input type="Password" class="form-control" name="con-password">
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2 btn-block">Update Password</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script type="text/javascript">
    $("#current_password").on('change', function(){
        var current_password = $(this).val();
        // alert(current_password);
        var url = "{{ url('/user/check-pwd')}}";
        $.ajax({
            type: 'get',
            url: url,
            data: {current_password:current_password},
            success:function(resp){
                $("#change").html(resp);

            },
            error:function(resp){
                alert("Opps Try Agian...");
            }

        });
    });
</script>

@endsection