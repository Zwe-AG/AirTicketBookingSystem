@extends('admin.layouts.master')
@section('myContent')
                <div class="main-content">
                <!----edit-modal start--------->
                <h5 class="material-icons" onclick="history.back()" style="cursor: pointer">arrow_back</h5>
                <div class="row">
                    <div class="col-5 offset-4">
                        <h6 class="mt-2 text-muted">Feedback Message</h6>
                        <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">{{$data[0]->name}}</h5>
                            <div class="card-subtitle text-muted mb-3">{{$data[0]->email}}</div>
                            <p class="card-text">
                                {{$data[0]->message}}
                            </p>
                            <small class="text-muted">{{date('d-m-Y h:i',strtotime($data[0]->created_at))}}</small>
                        </div>
                        </div>
                    </div>
                </div>
                </div>
@endsection
