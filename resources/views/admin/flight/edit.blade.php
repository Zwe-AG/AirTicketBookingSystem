@extends('admin.layouts.master')
@section('myContent')
<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <!-- Layout container -->
        <div class="layout-page">
            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->
                <div class="container-xxl flex-grow-1 container-p-y">
                    <h4 class="fw-bold py-3 mb-4">Update Flight</h4>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <form action="{{route('admin#flightupdate',$flight['id'])}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                                            @if ($flight['image'] == null)
                                            <img src="{{asset('profile/noImage.png')}}" class="d-block rounded" width="100" style="object-fit: cover"/>
                                            @else
                                            <img src="{{ asset('storage/'.$flight['image']) }}"  class="d-block rounded" width="100" style="object-fit: cover"/>
                                            @endif
                                        <div class="button-wrapper">
                                            <label for="upload" class="btn btn-primary me-2 mb-0" tabindex="0">
                                                <span class="d-none d-sm-block">Upload new photo</span>
                                                <i class="bx bx-upload d-block d-sm-none"></i>
                                                <input type="file" id="upload" class="account-file-input" hidden
                                                    accept="image/png, image/jpeg" name="image"/>
                                            </label>
                                            <p class="text-muted mb-0">Allowed JPG, JPEG or PNG.</p>
                                        </div>
                                     </div>
                                     <hr class="mb-3" />
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label for="name" class="form-label">Flight Name</label>
                                                <input class="form-control" type="text" name="name" value="{{old('name',$flight['name'])}}"/>
                                                @error('name')
                                                     <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="airline" class="form-label">Airline</label>
                                                <select id="language" class="select2 form-select" name="airline">
                                                    <option value="">Choose Airline</option>
                                                    @foreach ($airline as $a)
                                                        <option value="{{$a->id}}" @if($flight->airline_id == $a->id) selected @endif>{{$a->name}}</option>
                                                    @endforeach
                                                </select>
                                                @error('airline')
                                                     <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Price</label>
                                                <input class="form-control" type="number" name="price" value="{{old('price',$flight['price'])}}"/>
                                                @error('price')
                                                     <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="html5-datetime-local-input" class="form-label">Departure Time</label>
                                                <input class="form-control" type="datetime-local" id="html5-datetime-local-input" name="departureTime" value="{{old('departureTime',$flight['departure_time'])}}"/>
                                                @error('departureTime')
                                                     <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="html5-datetime-local-input" class="form-label">Arrival Time</label>
                                                <input class="form-control" type="datetime-local" id="html5-datetime-local-input" name="arrivalTime" value="{{old('arrivalTime',$flight['arrival_time'])}}"/>
                                                @error('arrivalTime')
                                                     <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="html5-datetime-local-input" class="form-label">Return Date</label>
                                                <input class="form-control" type="datetime-local" id="html5-datetime-local-input" name="returnDate" value="{{old('returnDate',$flight['return_date'])}}"/>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Class</label>
                                                <select id="language" class="select2 form-select" name="flightClass">
                                                    <option value="first" @if($flight->class == 'first') selected @endif>First</option>
                                                    <option value="economy" @if($flight->class == 'economy') selected @endif>Economy</option>
                                                    <option value="bussiness" @if($flight->class == 'bussiness') selected @endif>Bussiness</option>
                                                </select>
                                                @error('flightClass')
                                                     <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Type</label>
                                                <select id="language" class="select2 form-select" name="styleTrip">
                                                    <option value="oneway" @if($flight->type == 'oneway') selected @endif>One Way</option>
                                                    <option value="roundtrip" @if($flight->type == 'roundtrip') selected @endif>Round Trip</option>
                                                </select>
                                                @error('styleTrip')
                                                     <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="organization" class="form-label">Duration</label>
                                                <input type="text" class="form-control" id="organization" name="duration" value="{{old('duration',$flight['duration'])}}"/>
                                                @error('duration')
                                                     <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="html5-datetime-local-input" class="form-label">Boarding Time</label>
                                                  <input class="form-control" type="datetime-local"  id="html5-datetime-local-input" name="boardingTime" value="{{old('boardingTime',$flight['boarding_time'])}}"/>
                                                  @error('boardingTime')
                                                    <small class="text-danger">{{$message}}</small>
                                                 @enderror
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">From</label>
                                                <select class="select2 form-select" name="from">
                                                    <option value="">Choose City</option>
                                                    @foreach ($city as $c)
                                                        <option value="{{$c->id}}" @if($flight->from == $c->id) selected @endif>{{$c->name}}</option>
                                                    @endforeach
                                                </select>
                                                @error('from')
                                                    <small class="text-danger">{{$message}}</small>
                                                 @enderror
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="airline" class="form-label">To</label>
                                                <select id="language" class="select2 form-select" name="to">
                                                    <option value="">Choose City</option>
                                                    @foreach ($city as $c)
                                                        <option value="{{$c->id}}" @if($flight->to == $c->id) selected @endif>{{$c->name}}</option>
                                                    @endforeach
                                                </select>
                                                @error('to')
                                                    <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="airline" class="form-label">Departure Airport</label>
                                                <select id="language" class="select2 form-select" name="departureAirport">
                                                    <option value="">Choose Airport</option>
                                                    @foreach ($city as $c)
                                                        <option value="{{$c->id}}" @if($flight->departure_airport == $c->id) selected @endif>{{$c->airport}}</option>
                                                    @endforeach
                                                </select>
                                                @error('departureAirport')
                                                    <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="airline" class="form-label">Arrival Airport</label>
                                                <select id="language" class="select2 form-select" name="arrivalAirport">
                                                    <option value="">Choose Airport</option>
                                                    @foreach ($city as $c)
                                                        <option value="{{$c->id}}" @if($flight->arrival_airport == $c->id) selected @endif>{{$c->airport}}</option>
                                                    @endforeach
                                                </select>
                                                @error('arrivalAirport')
                                                    <small class="text-danger">{{$message}}</small>
                                                 @enderror
                                            </div>
                                            <div class="mt-2">
                                                <button type="submit" class="btn btn-primary me-2">Save Update</button>
                                                <a href="{{route('admin#flightlist')}}" class="btn btn-outline-secondary">Go to back</a>
                                                {{-- <button onclick="history.back()" class="btn btn-outline-secondary">Go to back</button> --}}
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / Content -->
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>
</div>
<!-- / Layout wrapper -->
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
