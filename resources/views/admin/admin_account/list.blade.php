@extends('admin.layouts.master')
@section('myContent')
<div class="col-md-5 col-lg-3 offset-9 order-3 order-md-2 mt-4">
    <div class="xp-searchbar">
        <form action="{{route('admin#list')}}" method="get">
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
							    <h2 class="ml-lg-2">Admin List</h2>
							 </div>
                             <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
                                <a href="#" class="btn btn-danger">
                                 <i class="material-icons">groups</i>
                                 <span>Total Admins -  {{$admins->total()}}</span>
                                 </a>
                                </a>
                              </div>
					     </div>
					   </div>

					   @if (count($admins) != 0)
                       <table class="table table-striped table-hover">
                        <thead>
                           <tr>
                           <th>ID</th>
                           <th>Image</th>
                           <th>Name</th>
                           <th>Email</th>
                           <th>Gender</th>
                           <th>Role</th>
                           <th>Created Date</th>
                           <th>Actions</th>
                           </tr>
                        </thead>

                        <tbody>
                            @foreach ($admins as $admin)
                            <tr>
                              <th>{{ $admin->id }}</th>
                              <th>
                                <div class="d-flex align-items-start align-items-sm-center gap-4">
                                    @if ($admin->image == null)
                                    @if ($admin->gender == 'male')
                                    <img src="{{asset('profile/male.jpeg')}}" class="d-block rounded" height="100" width="100" id="uploadedAvatar"/>
                                    @else
                                    <img src="{{asset('profile/female.jpeg')}}" class="d-block rounded" height="100" width="100" id="uploadedAvatar"/>
                                    @endif
                                    @else
                                    <img src="{{ asset('storage/'.$admin->image) }}"  class="d-block rounded" height="100" width="100" id="uploadedAvatar"/>
                                    @endif
                             </div>
                              </th>
                              <input type="hidden" class="adminID" value="{{ $admin->id }}">
                              <th style="text-transform: lowercase">{{$admin->name}}</th>
                              <th style="text-transform: lowercase">{{$admin->email}}</th>
                              <th style="text-transform: lowercase">{{$admin->gender}}</th>
                              <th style="text-transform: lowercase">
                                <select class="select2 form-select roleChange" style="width:100px">
                                    <option value="admin" @if($admin->role == 'admin') selected @endif>Admin</option>
                                    <option value="user" @if($admin->role == 'user') selected @endif>User</option>
                                </select>
                             </th>
                              <th>{{date('d-m-Y',strtotime($admin->created_at))}}</th>
                              <th>
                                @if (Auth::user()->id == $admin->id)

                                @else
                                <a href="{{route('admin#delete',$admin->id)}}" class="delete" style="margin-left: 20px">
                                    <i class="fa-solid fa-trash"></i>
                                    </a>
                                @endif
                              </th>
                              </tr>
                            @endforeach
                        </tbody>
                     </table>
                     {{ $admins->links()}}
                       @else
                           <h3 class="text-center mt-4 ">
                              There is no admin here
                           </h3>
                       @endif
                    </div>
					</div>
			     </div>
			  </div>
@endsection

@section('scriptSource')
<script>
    // jquery for status change by using ajax
    $(document).ready(function(){
            $('.roleChange').change(function(){
                $currentRole = $(this).val();
                $parentNode = $(this).parents('tr');
                $adminId = $parentNode.find('.adminID').val();

                $data = {
                    'role' : $currentRole,
                    'adminID' : $adminId,
                };
                $.ajax({
                    type: "get",
                    url: "/admin/ajax/role/adminchange",
                    data: $data,
                    dataType: "json",
                });
                location.reload();
            });
        });
</script>
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
