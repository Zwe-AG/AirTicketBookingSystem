@extends('admin.layouts.master')
@section('myContent')
<div class="col-md-5 col-lg-3 offset-9 order-3 order-md-2 mt-4">
    <div class="xp-searchbar">
        <form action="{{route('user#list')}}" method="get">
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
							    <h2 class="ml-lg-2">User List</h2>
							 </div>
                             <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
                                <a href="#" class="btn btn-danger">
                                 <i class="material-icons">groups</i>
                                 <span>Total Users -  {{$users->total()}}</span>
                                 </a>
                                </a>
                              </div>
					     </div>
					   </div>

					   @if (count($users) != 0)
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
                            @foreach ($users as $user)
                            <tr>
                              <th>{{ $user->id }}</th>
                              <th>
                                <div class="d-flex align-items-start align-items-sm-center gap-4">
                                    @if ($user->image == null)
                                    @if ($user->gender == 'male')
                                    <img src="{{asset('profile/male.jpeg')}}" class="d-block rounded" height="100" width="100" id="uploadedAvatar"/>
                                    @else
                                    <img src="{{asset('profile/female.jpeg')}}" class="d-block rounded" height="100" width="100" id="uploadedAvatar"/>
                                    @endif
                                    @else
                                    <img src="{{ asset('storage/'.$user->image) }}"  class="d-block rounded" height="100" width="100" id="uploadedAvatar" style="object-fit:cover"/>
                                    @endif
                             </div>
                              </th>
                              <input type="hidden" class="userID" value="{{ $user->id }}">
                              <th style="text-transform: lowercase">{{$user->name}}</th>
                              <th style="text-transform: lowercase">{{$user->email}}</th>
                              <th style="text-transform: lowercase">{{$user->gender}}</th>
                              <th style="text-transform: lowercase">
                                <select class="select2 form-select roleChange" style="width:100px">
                                    <option value="admin" @if($user->role == 'admin') selected @endif>Admin</option>
                                    <option value="user" @if($user->role == 'user') selected @endif>User</option>
                                </select>
                             </th>
                              <th>{{date('d-m-Y',strtotime($user->created_at))}}</th>
                              <th>
                                <a href="#" class="delete">
                                <i class="material-icons" title="Delete">&#xE872;</i>
                                </a>
                              </th>
                              </tr>
                            @endforeach
                        </tbody>
                     </table>
                     {{ $users->links()}}
                       @else
                           <h3 class="text-center mt-4 ">
                              There is no user here
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
                // console.log($currentRole);
                $parentNode = $(this).parents('tr');
                $userId = $parentNode.find('.userID').val();

                $data = {
                    'role' : $currentRole,
                    'userId' : $userId,
                };
                $.ajax({
                    type: "get",
                    url: "/admin/ajax/role/userchange",
                    data: $data,
                    dataType: "json",
                });
                location.reload();
            });
        });
</script>
<script>
    // javascript
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
