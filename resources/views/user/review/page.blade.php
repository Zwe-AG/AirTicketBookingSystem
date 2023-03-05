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
			<ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Description</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
					 aria-selected="false">Specification</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
					 aria-selected="false">Review</a>
				</li>
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
					<p>Beryl Cook is one of Britain’s most talented and amusing artists .Beryl’s pictures feature women of all shapes
						and sizes enjoying themselves .Born between the two world wars, Beryl Cook eventually left Kendrick School in
						Reading at the age of 15, where she went to secretarial school and then into an insurance office. After moving to
						London and then Hampton, she eventually married her next door neighbour from Reading, John Cook. He was an
						officer in the Merchant Navy and after he left the sea in 1956, they bought a pub for a year before John took a
						job in Southern Rhodesia with a motor company. Beryl bought their young son a box of watercolours, and when
						showing him how to use it, she decided that she herself quite enjoyed painting. John subsequently bought her a
						child’s painting set for her birthday and it was with this that she produced her first significant work, a
						half-length portrait of a dark-skinned lady with a vacant expression and large drooping breasts. It was aptly
						named ‘Hangover’ by Beryl’s husband and</p>
					<p>It is often frustrating to attempt to plan meals that are designed for one. Despite this fact, we are seeing
						more and more recipe books and Internet websites that are dedicated to the act of cooking for one. Divorce and
						the death of spouses or grown children leaving for college are all reasons that someone accustomed to cooking for
						more than one would suddenly need to learn how to adjust all the cooking practices utilized before into a
						streamlined plan of cooking that is more efficient for one person creating less</p>
				</div>
				<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr>
									<td>
										<h5>Width</h5>
									</td>
									<td>
										<h5>128mm</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Height</h5>
									</td>
									<td>
										<h5>508mm</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Depth</h5>
									</td>
									<td>
										<h5>85mm</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Weight</h5>
									</td>
									<td>
										<h5>52gm</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Quality checking</h5>
									</td>
									<td>
										<h5>yes</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Freshness Duration</h5>
									</td>
									<td>
										<h5>03days</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>When packeting</h5>
									</td>
									<td>
										<h5>Without touch of hand</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Each Box contains</h5>
									</td>
									<td>
										<h5>60pcs</h5>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
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
											@if (Auth::user()->id != $r->user_id)

                                            @else
                                            <div class="d-inline">
                                                <a class="reply_btn" href="{{route('user#reviewdelete',$r->id)}}"><i class="fa fa-trash-o text-danger" aria-hidden="true"></i></a>
                                                <a class="reply_btn_1" href="{{route('user#reviewedit',$r->id)}}"><i class="fa fa-pencil text-danger" aria-hidden="true"></i></a>
                                            </div>
                                            @endif
										</div>
									</div>
									<p>{{Str::words($r->review, 20,'......')}}</p>
								</div>
                                @endforeach
                                <div class="col-4 offset-8 mt-5">
                                    <a href="{{route('user#reviewList')}}" class="btn btn-danger">See Details</a>
                                </div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="review_box">
								<h4>Post a comment</h4>
								<form class="row contact_form" action="{{route('user#reviewcreate')}}" method="post" id="contactForm" novalidate="novalidate">
									@csrf
                                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                    <div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="name" name="name" value="{{old('name',Auth::user()->name)}}" placeholder="Your Full name">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="email" class="form-control" id="email" name="email" value="{{old('email',Auth::user()->email)}}" placeholder="Email Address">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<textarea class="form-control" name="message" id="message" rows="10" cols="10" placeholder="Message" rows="20"></textarea>
										</div>
									</div>
									<div class="col-md-12 text-right">
										<button type="submit" value="submit" class="btn primary-btn">Submit Now</button>
									</div>
								</form>
							</div>
						</div>
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
