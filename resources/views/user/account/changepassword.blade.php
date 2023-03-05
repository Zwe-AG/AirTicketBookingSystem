@extends('user.layouts.master')
@section('myContent')
<!-- start banner Area -->
<section class="relative about-banner">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                   Change Password
                </h1>
                <p class="text-white link-nav"><a href="{{route('user#home')}}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{route('user#accountchangepasswordpage')}}"> Change Password</a></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->
<div class="main-content">
    <!----edit-modal start--------->
        <h3 class="lnr lnr-arrow-left" onclick="history.back()" style="cursor: pointer;margin-left:300px;margin-top:100px;color:black;width:50%;font-weight:bolder"></h3>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Change Password</h5>
            </div>
            <div class="modal-body">
                <form action="{{route('user#accountchangepassword')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Old Password</label>
                        <input type="password" class="form-control" name="oldPassword" value="">
                        @error('oldPassword')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>New Password</label>
                        <input type="password" class="form-control" name="newPassword" value="">
                        @error('newPassword')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control" name="confirmPassword" value="">
                        @error('confirmPassword')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success">Change Password</button>
                </form>
            </div>
            </div>
        </div>
        </div>
@endsection
