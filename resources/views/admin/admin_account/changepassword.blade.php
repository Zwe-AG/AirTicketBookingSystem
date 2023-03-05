@extends('admin.layouts.master')
@section('myContent')
<div class="main-content">
                <!----edit-modal start--------->
                    <h5 class="material-icons" onclick="history.back()" style="cursor: pointer">arrow_back</h5>
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Change Password</h5>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('admin#accountchangepassword')}}" method="post">
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
