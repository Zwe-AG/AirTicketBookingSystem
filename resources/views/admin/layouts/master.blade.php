<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>Air Ticket Booking Dashboard</title>
        <!----favicon---->
        <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/128/1314/1314529.png" type="image/x-icon">
	    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">

		<!--google fonts -->
	    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

	   <!--google material icon-->
      <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">
      <!--fontawesome-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

       <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{asset('accountSetting/assets/vendor/fonts/boxicons.css')}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('accountSetting/assets/vendor/css/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('accountSetting/assets/vendor/css/theme-default.css')}}" class="template-customizer-theme-css" />

      <!--Toast css js-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

      <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

      <!----Ticket css---->
      <link rel="stylesheet" href="{{asset('ticket/style.css')}}">
      <link rel="stylesheet" href="{{asset('ticket/download.css')}}">
       <!----flight css---->
       <link rel="stylesheet" href="{{asset('flight/style.css')}}">
       <!----flag css---->
       <link rel="stylesheet" href="{{asset('map/flag-icon-css/css/flag-icon.min.css')}}">
        <!----datatable css---->
       <link rel="stylesheet" type="text/css" href="{{asset('datatable/src/plugins/datatables/css/dataTables.bootstrap4.min.css')}}">
       <link rel="stylesheet" type="text/css" href="{{asset('datatable/src/plugins/datatables/css/responsive.bootstrap4.min.css')}}">
       {{-- <link rel="stylesheet" type="text/css" href="{{asset('datatable/src/styles/style.css')}}"> --}}
      <!----css3---->
      <link rel="stylesheet" href="{{asset('admin/css/custom.css')}}">
      <link rel="stylesheet" href="{{asset('admin/mainFile/style.css')}}">
  </head>
  <body>



<div class="wrapper">

	  <div class="body-overlay"></div>

	 <!-------sidebar--design------------>

	 <div id="sidebar">
	    <div class="sidebar-header">
		   <h3><img src="https://cdn-icons-png.flaticon.com/128/744/744502.png" class="img-fluid"/><span>Go Away</span><p style="font-size:9px;margin:-15px 55px">Company Linmited</p></h3>
		</div>
		<ul class="list-unstyled component m-0">
		  <li class="active">
		        <a href="{{ route('admin#mainpage') }}" class="dashboard"><i class="material-icons">dashboard_customize</i>dashboard </a>
		  </li>

          <li>
            <a href="{{route('admin#flightlist')}}" class="dashboard"><i class="material-icons">airplanemode_active</i> Flight </a>
         </li>


          <li>
             <a href="{{ route('admin#airlinelist') }}" class="dashboard"><i class="material-icons">airlines</i> Airline </a>
          </li>

          <li>
            <a href="{{route('admin#citylist')}}" class="dashboard"><i class="material-icons">location_city</i> City </a>
         </li>

         <li>
            <a href="{{route('admin#bookinglist')}}" class="dashboard"><i class="material-icons">menu_book</i> Booking List </a>
         </li>

         <li>
            <a href="{{route('admin#statuslist')}}" class="dashboard"><i class="material-icons">assignment</i> Booking Status Table </a>
         </li>

         <li>
            <a href="{{route('admin#contactpage')}}" class="dashboard"><i class="material-icons">contact_phone</i> Contact </a>
         </li>

         <li class="dropdown">
            <a href="#homeSubmenu3" data-toggle="collapse" aria-expanded="false"
            class="dropdown-toggle">
            <i class="material-icons">groups</i> Admin & User List
            </a>
            <ul class="collapse list-unstyled menu" id="homeSubmenu3">
               <li><a href="{{route('admin#list')}}">Admin List</a></li>
               <li><a href="{{route('user#list')}}">User List</a></li>
            </ul>
            </li>

          <li>
            <a href="{{route('admin#accountprofilepage')}}" class="dashboard"><i class="material-icons">manage_accounts</i> Account Profile </a>
         </li>

         <li>
            <a href="{{route('admin#accountchangepasswordpage')}}" class="dashboard"><i class="material-icons">lock_open</i> Change Password </a>
         </li>

         <li>
            <div style="cursor: pointer;margin:10px 0px 0px 50px;" >
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger" style="padding:2px 40px"> Logout </button>
                </form>
            </div>
         </li>

		</ul>
	 </div>

   <!-------sidebar--design- close----------->

      <!-------page-content start----------->
      <div id="content">

		  <!------top-navbar-start----------->

		  <div class="top-navbar">
		     <div class="xd-topbar">
			     <div class="row">
				     <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
					    <div class="xp-menubar">
						    <span class="material-icons text-white">signal_cellular_alt</span>
						</div>
					 </div>

					 <div class="col-md-5 col-lg-3 order-3 order-md-2">
					 </div>


					 <div class="col-10 col-md-6 col-lg-8 order-1 order-md-3">
					     <div class="xp-profilebar text-right">
						    <nav class="navbar p-0">
							   <ul class="nav navbar-nav flex-row ml-auto">
							   <li class="dropdown nav-item active">
							     <a class="nav-link" href="#" data-toggle="dropdown">
								  <span class="material-icons">notifications</span>
								  <span class="notification">4</span>
								 </a>
								  <ul class="dropdown-menu">
								     <li><a href="#">You Have 4 New Messages</a></li>
									 <li><a href="#">You Have 4 New Messages</a></li>
									 <li><a href="#">You Have 4 New Messages</a></li>
									 <li><a href="#">You Have 4 New Messages</a></li>
								  </ul>
							   </li>

							   <li class="nav-item">
							     <a class="nav-link" href="#">
								   <span class="material-icons">question_answer</span>
								 </a>
							   </li>

							   <li class="dropdown nav-item">
							     <a class="nav-link" href="#" data-toggle="dropdown">
                                    @if (Auth::user()->image == null)
                                    @if (Auth::user()->gender == 'male')
                                    <img src="{{asset('profile/male.jpeg')}}" style="width:40px; border-radius:50%;"/>
                                    @else
                                    <img src="{{asset('profile/female.jpeg')}}" style="width:40px; border-radius:50%;"/>
                                    @endif
                                    @else
                                    <img src="{{ asset('storage/'.Auth::user()->image) }}" style="width:40px;height:40px;border-radius:50%;" style="object-fit:cover">
                                    @endif
								  <span class="xp-user-live"></span>
								 </a>
								  <ul class="dropdown-menu small-menu">
								     <li><a href="{{route('admin#accountprofilepage')}}">
									 <span class="material-icons">person_outline</span>
									 Profile
									 </a></li>
									 <li><a href="{{route('admin#accountchangepasswordpage')}}">
									 <span class="material-icons">vpn_key</span>
									 Password
									 </a></li>
									 <div style="cursor: pointer;margin:10px 0px 0px 15px">
                                        <form action="{{route('logout')}}" method="POST">
                                            @csrf
                                            <button type="submit" style="background-color: rgb(219, 229, 254);padding:2px 40px"> Logout </button>
                                        </form>
                                    </div>

								  </ul>
							   </li>


							   </ul>
							</nav>
						 </div>
					 </div>

				 </div>

				 <div class="xp-breadcrumbbar text-center">
				    <h4 class="page-title">Dashboard</h4>
					<ol class="breadcrumb">
					  <li class="breadcrumb-item"><a href="#">Vishweb</a></li>
					  <li class="breadcrumb-item active" aria-curent="page">Dashboard</li>
					</ol>
				 </div>


			 </div>
		  </div>
		  <!------top-navbar-end----------->

		   <!------main-content-start----------->
           @yield('myContent')
		    <!------main-content-end----------->

	  </div>
</div>
<!-------complete html----------->
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="{{asset('admin/js/jquery-3.3.1.slim.min.js')}}"></script>
   <script src="{{asset('admin/js/popper.min.js')}}"></script>
   <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
   <script src="{{asset('admin/js/jquery-3.3.1.min.js')}}"></script>
   <!-- Data table JS -->
   <script src="{{asset('datatable/vendors/scripts/core.js')}}"></script>
   <script src="{{asset('datatable/vendors/scripts/script.min.js')}}"></script>
   <script src="{{asset('datatable/vendors/scripts/process.js')}}"></script>
   <script src="{{asset('datatable/vendors/scripts/layout-settings.js')}}"></script>
   <script src="{{asset('datatable/src/plugins/datatables/js/jquery.dataTables.min.js')}}"></script>
   <script src="{{asset('datatable/src/plugins/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
   <script src="{{asset('datatable/src/plugins/datatables/js/dataTables.responsive.min.js')}}"></script>
   <script src="{{asset('datatable/src/plugins/datatables/js/responsive.bootstrap4.min.js')}}"></script>
   <!-- buttons for Export datatable -->
   <script src="{{asset('datatable/src/plugins/datatables/js/dataTables.buttons.min.js')}}"></script>
   <script src="{{asset('datatable/src/plugins/datatables/js/buttons.bootstrap4.min.js')}}"></script>
   <script src="{{asset('datatable/src/plugins/datatables/js/buttons.print.min.js')}}"></script>
   <script src="{{asset('datatable/src/plugins/datatables/js/buttons.html5.min.js')}}"></script>
   <script src="{{asset('datatable/src/plugins/datatables/js/buttons.flash.min.js')}}"></script>
   <script src="{{asset('datatable/src/plugins/datatables/js/pdfmake.min.js')}}"></script>
   <script src="{{asset('datatable/src/plugins/datatables/js/vfs_fonts.js')}}"></script>
   <!-- Datatable Setting js -->
   <script src="{{asset('datatable/vendors/scripts/datatable-setting.js')}}"></script>
   {{-- Create html2pdf  --}}
   <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js">
    <!--  Custom js  -->
  <script type="text/javascript">
       $(document).ready(function(){
	      $(".xp-menubar").on('click',function(){
		    $("#sidebar").toggleClass('active');
			$("#content").toggleClass('active');
		  });

		  $('.xp-menubar,.body-overlay').on('click',function(){
		     $("#sidebar,.body-overlay").toggleClass('show-nav');
		  });

	   });
       let getYear = new Date().getUTCFullYear();
       document.getElementById('getYear').innerHTML=getYear;
  </script>
  </body>
@yield('scriptSource')
  </html>


