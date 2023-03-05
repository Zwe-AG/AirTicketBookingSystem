@extends('admin.layouts.master')
@section('myContent')

<div class="main-container" style="margin:100px">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12" style="margin-bottom:10px">
                        <div class="title">
                            <h4>Booking Management</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin#mainpage')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">DataTable</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <a class="btn btn-secondary" href="#">
                            Total Booking - {{ $bookings->total()}}
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
                                <th>User Name</th>
                                <th>Flight Name</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Passenger Qty</th>
                                <th>Total Price</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bookings as $b)
                            <tr>
                                <input type="hidden" class="bookingID" value="{{$b->id}}">
                                <td class="table-plus">{{$b->id}}</td>
                                <td>{{$b->name}}</td>
                                <td>{{$b->flight_name}}</td>
                                <td>{{$b->city_from}}</td>
                                <td>{{$b->city_to}}</td>
                                <td>{{$b->passenger_qty}}-People</td>
                                <td>{{$b->total_price}}MMK</td>
                                <td>
                                    <select class="select2 form-select pe-2 statusChange" style="width:100px">
                                        <option value="0" @if($b->status == 0) selected @endif>Pending</option>
                                        <option value="1" @if($b->status == 1) selected @endif>Cancel</option>
                                        <option value="2" @if($b->status == 2) selected @endif>Accept</option>
                                    </select>
                                </td>
                                <td>
                                    <a href="{{route('admin#airticketpage',$b->id)}}" class="edit">
                                        <i class="material-icons fs-5">airplane_ticket</i></i>
                                    </a>
                                    <a href="{{route('admin#airticketdownload',$b->id)}}" class="edit">
                                        <i class="material-icons fs-5">picture_as_pdf</i></i>
                                    </a>
                                    <a href="{{route('admin#emailpage',$b->id)}}" class="delete">
                                        <i class="material-icons fs-5">email</i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                         {{ $bookings->links()}}
                    </table>
                </div>
            </div>
            <!-- Export Datatable End -->
        </div>
    </div>
</div>

@endsection

@section('scriptSource')
<script>
    $(document).ready(function(){
        $('.statusChange').change(function(){
            $status = $(this).val();
            $parentNode = $(this).parents('tr')
            $bookingID = $parentNode.find('.bookingID').val();
            $data = {'status' : $status,'bookingId' : $bookingID,};
            $.ajax({
                type: "get",
                url: "/admin/ajax/status/change",
                data: $data,
                dataType: "json",
            });
            window.location.href = "http://localhost:8000/admin/booking/list";
        })
    })
</script>
@endsection
