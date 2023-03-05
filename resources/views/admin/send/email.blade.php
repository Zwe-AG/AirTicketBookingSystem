@extends('admin.layouts.master')
@section('myContent')
<div class="main-content">
                <!----edit-modal start--------->
                    <h5 class="material-icons" onclick="history.back()" style="cursor: pointer">arrow_back</h5>
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Send Email</h5>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('admin#sendemail')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="name" value="{{ old('name',$bookings[0]->name) }}">
                                    @error('name')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" value="{{ old('email',$bookings[0]->email) }}">
                                    @error('email')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>File</label>
                                    <input type="file" class="form-control" name="document">
                                    <small class="text-danger">*** Only PDF Upload </small>
                                    @error('document')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Subject</label>
                                    <input type="text" class="form-control" name="subject" value="{{ old('subject') }}">
                                    @error('subject')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Message</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message">{{ old('message') }}</textarea>
                                    @error('message')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-success">Send</button>
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>
@endsection
@section('scriptSource')
<script>
    @if(Session::has('success'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true,
            "positionClass": "toast-bottom-right",
        }
        toastr.success("{{ session('success') }}");
    @endif
</script>
@endsection

