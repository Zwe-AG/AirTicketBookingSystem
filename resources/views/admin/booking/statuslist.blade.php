@extends('admin.layouts.master')
@section('myContent')

 <div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Status /</span> Booking Status Tables</h4>

        {{--  pending status table --}}
        <div class="card">
            <h5 class="card-header">Pending Status</h5>
            <div class="table-responsive text-nowrap">
              <table class="table">
                <thead class="table-dark">
                  <tr>
                    <th>Flight Name</th>
                    <th>Client</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Passenger</th>
                    <th>Total Price</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($bookings as $b)
                    @if ($b->status == 0)
                    <tr>
                        <td><strong>{{$b->flight_name}}</strong></td>
                        <td><strong>{{$b->name}}</strong></td>
                        <td><strong>{{$b->city_from}}</strong></td>
                        <td><strong>{{$b->city_to}}</strong></td>
                        <td><strong>{{$b->passenger_qty}} People</strong></td>
                        <td><strong>{{$b->total_price}}MMK</strong></td>
                        <td>
                            @if ($b->status == 0)
                            <span class="badge bg-label-warning me-1 fs-6">Pending</span>
                            @endif
                        </td>
                      </tr>
                    @endif
                    @endforeach
                  </tbody>
              </table>
            </div>
        </div>

        {{--  accept status table --}}
        <div class="card" style="margin-top:50px">
            <h5 class="card-header">Accept Status</h5>
            <div class="table-responsive text-nowrap">
              <table class="table">
                <thead class="table-dark">
                  <tr>
                    <th>Flight Name</th>
                    <th>Client</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Passenger</th>
                    <th>Total Price</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($bookings as $b)
                    @if ($b->status == 2)
                    <tr>
                        <td><strong>{{$b->flight_name}}</strong></td>
                        <td><strong>{{$b->name}}</strong></td>
                        <td><strong>{{$b->city_from}}</strong></td>
                        <td><strong>{{$b->city_to}}</strong></td>
                        <td><strong>{{$b->passenger_qty}} People</strong></td>
                        <td><strong>{{$b->total_price}}MMK</strong></td>
                        <td>
                            @if ($b->status == 2)
                            <span class="badge bg-label-success me-1 fs-6">Accept</span>
                            @endif
                        </td>
                      </tr>
                    @endif
                    @endforeach
                  </tbody>
              </table>
            </div>
        </div>

        {{-- cancel status table --}}
        <div class="card" style="margin-top:50px">
            <h5 class="card-header">Cancel Status</h5>
            <div class="table-responsive text-nowrap">
              <table class="table">
                <thead class="table-dark">
                  <tr>
                    <th>Flight Name</th>
                    <th>Client</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Passenger</th>
                    <th>Total Price</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($bookings as $b)
                    @if ($b->status == 1)
                    <tr>
                        <td><strong>{{$b->flight_name}}</strong></td>
                        <td><strong>{{$b->name}}</strong></td>
                        <td><strong>{{$b->city_from}}</strong></td>
                        <td><strong>{{$b->city_to}}</strong></td>
                        <td><strong>{{$b->passenger_qty}} People</strong></td>
                        <td><strong>{{$b->total_price}}MMK</strong></td>
                        <td>
                            @if ($b->status == 1)
                            <span class="badge bg-label-danger me-1 fs-6">Cancel</span>
                            @endif
                        </td>
                      </tr>
                    @endif
                    @endforeach
                  </tbody>
              </table>
            </div>
        </div>
    </div>
 </div>


@endsection

