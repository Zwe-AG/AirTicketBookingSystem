@extends('admin.layouts.master')
@section('myContent')
<div class="col-md-5 col-lg-3 offset-9 order-3 order-md-2 mt-4">
    <div class="xp-searchbar">
        <form action="{{route('admin#citylist')}}" method="get">
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
							    <h2 class="ml-lg-2">City Management</h2>
							 </div>
							 <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
							   <a href="{{route('admin#citycreatepage')}}" class="btn btn-success">
							   <i class="material-icons">&#xE147;</i>
							   <span>Add City</span>
							   </a>
							   <a href="#" class="btn btn-danger">
                                <i class="material-icons">location_city</i>
                                <span>Total City -  {{count($datas)}}</span>
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
                           <th>Airport</th>
                           <th>Created Date</th>
                           <th>Actions</th>
                           </tr>
                        </thead>

                        <tbody>
                            @foreach ($datas as $data)
                            <tr>
                              <th>{{ $data->id }}</th>
                              <th>{{$data->name}}</th>
                              <th>{{$data->airport}}</th>
                              <th>{{date('d-m-Y',strtotime($data->created_at))}}</th>
                              <th>
                                <a href="{{route('admin#cityeditpage',$data->id)}}" class="edit">
                                    <i class="material-icons" title="Edit">&#xE254;</i>
                                </a>
                                <a href="{{route('admin#citydelete',$data->id)}}" class="delete">
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
                              There is no city here
                           </h3>
                       @endif
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
