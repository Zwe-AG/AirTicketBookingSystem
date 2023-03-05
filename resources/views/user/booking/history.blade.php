@extends('user.layouts.master')
@section('myContent')
<!-- start banner Area -->
<section class="relative about-banner">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Booking History
                </h1>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->
<section class="order_details section_gap">
    <div class="container">
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>Booking History</h4>
                  {{-- <div class="card-header-form">
                    <form action="{{route('user#bookinghistory')}}" method="get">
                        @csrf
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search" name="searchKey" value="{{request('searchKey')}}">
                        <div class="input-group-btn">
                          <button type="submit" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true" style="font-size: 12px;padding:4px 0px"></i></button>
                        </div>
                      </div>
                    </form>
                  </div> --}}
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive">
                    @if (count($bookings) != 0)
                    <table class="table table-striped">
                      <tr>
                        <th>ID</th>
                        <th>Flight Name</th>
                        <th>From</th>
                        <th>To</th>
                        <th>Booking Date</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                      @foreach ($bookings as $b)
                      <tr>
                        <td>{{$b->id}}</td>
                        <td>{{$b->flight_name}}</td>
                        <td>{{$b->city_from}}</td>
                        <td>{{$b->city_to}}</td>
                        <td>{{date('j F Y',strtotime($b->created_at))}}</td>
                        <td>
                            @if ($b->status == 0)
                            <div class="badge badge-warning">Pending</div>
                            @elseif($b->status == 1)
                            <div class="badge badge-danger">Cancel</div>
                            @elseif($b->status == 2)
                            <div class="badge badge-success">Accepted</div>
                            @endif
                        </td>
                        <td>
                            @if ($b->status == 2)
                            <a href="{{route('user#bookingdetail',$b->id)}}" class="btn btn-secondary">Detail</a>
                            @endif
                        </td>
                      </tr>
                      @endforeach
                    </table>
                    {{ $bookings->links()}}
                       @else
                           <h3 class="text-center mt-4 ">
                              There is no booking here
                           </h3>
                       @endif
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection

