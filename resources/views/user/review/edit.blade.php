@extends('user.layouts.master')
@section('myContent')
<!-- start banner Area -->
<section class="relative about-banner">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Customer Review Chatting Page
                </h1>
                <p class="text-white link-nav"><a href="{{route('user#home')}}"> Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{route('user#reviewpage')}}"> Customer Review Chat </a></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

	<!--================Product Description Area =================-->
	<section class="about-info-area section-gap">
		<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="comment_list">
                                @foreach ($reviews as $r)
                                <div class="review_item">
									<div class="media">
										<div class="d-flex">
											@if ($r->user_image == null)
                                            @if ($r->user_gender == 'male')
                                                <img src="{{asset('profile/male.jpeg')}}" class="rounded-circle me-2" height="50" width="50">
                                            @else
                                                <img src="{{asset('profile/female.jpeg')}}" class="rounded-circle me-2" height="50" width="50"/>
                                            @endif
                                            @else
                                                <img src="{{ asset('storage/'.$r->user_image) }}" class="rounded-circle me-2" height="50" width="50" style="object-fit:cover"/>
                                            @endif
										</div>
										<div class="media-body">
											<h4>{{$r->name}}</h4>
											<h5>{{$r->created_at->format('d-m-Y')}} at {{$r->created_at->format('h:s')}}</h5>
                                            {{-- <a class="reply_btn me-6" href="#">Waiting....</a> --}}
										</div>
									</div>
									<p>{{Str::words($r->review, 20,'......')}}</p>
								</div>
                                @endforeach
							</div>
						</div>
						<div class="col-lg-6">
							<div class="review_box">
								<h4>Update a review</h4>
								<form class="row contact_form" action="{{route('user#reviewupdate',$data[0]->id)}}" method="post" id="contactForm" novalidate="novalidate">
									@csrf
									<div class="col-md-12">
										<div class="form-group">
											<textarea class="form-control" name="message" id="message" rows="10" cols="10" placeholder="Message" rows="20">{{old('message',$data[0]->review)}}</textarea>
										</div>
									</div>
									<div class="col-md-12 text-right">
										<button type="submit" value="submit" class="btn primary-btn">Update Review</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
	</section>
	<!--================End Product Description Area =================-->
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
