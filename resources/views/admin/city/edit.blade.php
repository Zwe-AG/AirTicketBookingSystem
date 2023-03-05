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
                            <form action="{{route('admin#cityupdate')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <input type="hidden" value="{{ old('cityId',$cities->id) }}" name="cityId">
                                    <label>City Name</label>
                                    <input type="text" class="form-control" name="cityName" value="{{ old('cityName',$cities->name) }}">
                                    @error('cityName')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Airport</label>
                                    <input type="text" class="form-control" name="airportName" value="{{ old('airportName',$cities->airport) }}">
                                    @error('airportName')
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

