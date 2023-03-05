@extends('admin.layouts.master')
@section('myContent')
<div class="main-content">
                <!----edit-modal start--------->
                    <h5 class="material-icons" onclick="history.back()" style="cursor: pointer">arrow_back</h5>
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Update Airline</h5>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('admin#airlineupdate')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <input type="hidden" value="{{ old('airlineId',$airlines->id) }}" name="airlineId">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="airlineName" value="{{ old('airlineName',$airlines->name) }}">
                                    @error('airlineName')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Seats</label>
                                    <input type="number" class="form-control" name="airlineSeats" value="{{ old('airlineSeats',$airlines->seats) }}">
                                    @error('airlineSeats')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-success">Update</button>
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>
@endsection

