@extends('admin.layouts.master')
@section('myContent')
<div class="col-md-5 col-lg-3 offset-9 order-3 order-md-2 mt-4">
    <div class="xp-searchbar">
        <form action="{{route('admin#airlinelist')}}" method="get">
            @csrf
           <div class="input-group">
             <input type="search" class="form-control" placeholder="Search" name="searchKey" value="{{request('searchKey')}}">
             <div class="input-group-append">
                <button class="btn" type="submit" id="button-addon2">Go</button>
             </div>
           </div>
        </form>
    </div>
</div>
<div class="main-content">
			     <div class="row">
				    <div class="col-md-12">
					   <div class="table-wrapper">
					   <div class="table-title">
					     <div class="row">
						     <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
							    <h2 class="ml-lg-2">AirLine Management</h2>
							 </div>
							 <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
							   <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal">
							   <i class="material-icons">&#xE147;</i>
							   <span>Add Airline</span>
							   </a>
							   <a href="#" class="btn btn-danger" data-toggle="modal">
                                <i class="material-icons">local_airport</i>
                                <span>Total Airline -  {{count($datas)}}</span>
                                </a>
							   </a>
							 </div>
					     </div>
					   </div>

					   @if (count($datas) != 0)
                       <table class="table table-striped table-hover">
                        <thead>
                           <tr>
                           <th>ID</th>
                           <th>Name</th>
                           <th>Seats</th>
                           <th>Created Date</th>
                           <th>Actions</th>
                           </tr>
                        </thead>

                        <tbody>
                            @foreach ($datas as $data)
                            <tr>
                              <th>{{ $data->id }}</th>
                              <th>{{$data->name}}</th>
                              <th>{{$data->seats}}</th>
                              <th>{{date('d-m-Y',strtotime($data->created_at))}}</th>
                              <th>
                                <a href="{{ route('admin#airlineeditpage',$data->id) }}" class="edit">
                                    <i class="material-icons" title="Edit">&#xE254;</i>
                                </a>
                                <a href="{{route('admin#airlinedelete',$data->id)}}" class="delete">
                                <i class="material-icons" title="Delete">&#xE872;</i>
                                </a>
                              </th>
                              </tr>
                            @endforeach
                        </tbody>
                     </table>
                     {{ $datas->links()}}
                       @else
                           <h3 class="text-center mt-4 ">
                              There is no airline here
                           </h3>
                       @endif
                    </div>
					</div>
									   <!----add-modal start--------->
		        <div class="modal fade" tabindex="-1" id="addEmployeeModal" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Airline</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('admin#airlinecreate')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="airlineName" value="{{ old('airlineName') }}">
                                @error('airlineName')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Seats</label>
                                <input type="number" class="form-control" name="airlineSeats" value="{{ old('airlineSeats') }}">
                                @error('airlineSeats')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-success">Add</button>
                        </form>
                    </div>
                    </div>
                </div>
                </div>

                <!----edit-modal start--------->
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
