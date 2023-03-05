@extends('admin.layouts.master')
@section('myContent')
{{-- <div class="col-md-5 col-lg-3 offset-9 order-3 order-md-2 mt-4">
    <div class="xp-searchbar">
        <form action="" method="get">
            @csrf
           <div class="input-group">
             <input type="search" class="form-control" placeholder="Search" name="searchKey" value="{{request('searchKey')}}">
             <div class="input-group-append">
                <button class="btn" type="submit" id="button-addon2">Go</button>
             </div>
           </div>
        </form>
    </div>
</div> --}}
{{-- <div class="container" style="margin-top: 50px">
    <div class="row">
        <div class="col-lg-12">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                       <h2 class="ml-lg-2">Flight Management</h2>
                    </div>
                    <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
                      <a href="#" class="btn btn-success">
                      <i class="material-icons">&#xE147;</i>
                      <span>Add Flight</span>
                      </a>
                      <a href="#" class="btn btn-danger">
                       <i class="material-icons">location_city</i>
                       <span>Total Flight -  </span>
                       </a>
                      </a>
                    </div>
                </div>
              </div>
          <div class="users-table table-wrapper">
            <-- @if (count($datas) != 0) -->
            <table class="posts-table">
              <thead>
                <tr class="users-table-info">
                  <th class="pl-4">Flight Image</th>
                  <th>Flight ID</th>
                  <th>Airline ID</th>
                  <th>Price</th>
                  <th>Departure Time</th>
                  <th>Arrival Time</th>
                  <th>From</th>
                  <th>To</th>
                  <th>Class</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    <td>
                      <img src="{{asset('accountSetting/assets/img/avatars/1.png')}}" width="300px">
                    </td>
                    <td>1</td>
                    <td>1</td>
                    <td>$1000</td>
                    <td>1.10.2002</td>
                    <td>2.10.2002</td>
                    <td>Yangon</td>
                    <td>Japan</td>
                    <td>Economy</td>
                    <th>
                        <a href="#" class="edit">
                            <i class="material-icons fs-5" title="Edit">&#xE254;</i>
                        </a>
                        <a href="#" class="delete">
                        <i class="material-icons fs-5" title="Delete">&#xE872;</i>
                        </a>
                      </th>
                  </tr>
              </tbody>
            </table>
            {{-- {{ $datas->links()}}
             @else
                <h3 class="text-center mt-4 ">
                    There is no airline here
                </h3>
            @endif -->
          </div>
        </div>
      </div>
</div> --}}

<div class="main-container" style="margin:100px">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12" style="margin-bottom:10px">
                        <div class="title">
                            <h4>Flight Management</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin#mainpage')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">DataTable</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-5 col-sm-6 text-right">
                        <a class="btn btn-secondary" href="#">
                            Total Flights - {{$flights->total()}}
                        </a>
                </div>
                    <div class="col-md-1 col-sm-6 text-right">
                            <a class="btn btn-primary" href="{{route('admin#flightcreatepage')}}">
                                Create Flight
                            </a>
                    </div>
                </div>
            </div>
            <!-- Export Datatable start -->
            <div class="card-box mb-30">
                <div class="pb-20">
                    <table class="table hover multiple-select-row data-table-export nowrap">
                        <thead>
                            <tr>
                                <th class="table-plus datatable-nosort">ID</th>
                                <th>Flight Image</th>
                                <th>Name</th>
                                <th>Airline</th>
                                <th>Price</th>
                                <th>Departure Time</th>
                                <th>Arrival Time</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Class</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        @if (count($flights) != 0)
                        <tbody>
                            @foreach ($flights as $f)
                            <tr>
                                <td class="table-plus">{{$f->id}}</td>
                                <td>
                                    @if ($f->image == null)
                                    <img src="{{asset('profile/noImage.png')}}" class="d-block rounded" width="100" style="object-fit: cover"/>
                                    @else
                                    <img src="{{ asset('storage/'.$f->image) }}"  class="d-block rounded" width="100" style="object-fit: cover"/>
                                    @endif
                                </td>
                                <td>{{$f->name}}</td>
                                <td>{{$f->airline_name}}</td>
                                <td>{{$f->price}}</td>
                                <td>{{$f->departure_time}}</td>
                                <td>{{$f->arrival_time}}</td>
                                <td>{{$f->city_from}}</td>
                                <td>{{$f->city_to}}</td>
                                <td>{{$f->class}}</td>
                                <td>
                                    <a href="{{route('admin#flightedit',$f->id)}}" class="edit">
                                        <i class="material-icons fs-5" title="Edit">&#xE254;</i>
                                    </a>
                                    <a href="{{route('admin#flightdelete',$f->id)}}" class="delete">
                                        <i class="material-icons fs-5" title="Delete">&#xE872;</i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                         {{ $flights->links()}}
                       @else
                           <h3 class="text-center mt-4 ">
                              There is no flight here
                           </h3>
                       @endif
                    </table>
                </div>
            </div>
            <!-- Export Datatable End -->
        </div>
        {{-- <div class="footer-wrap pd-20 mb-20 card-box">
            DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit
                Hingarajiya</a>
        </div> --}}
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
