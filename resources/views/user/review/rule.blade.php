@extends('user.layouts.master')
@section('myContent')
<!-- start banner Area -->
<section class="relative about-banner">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Customer Review Chatting Rule Page
                </h1>
                <p class="text-white link-nav"><a href="{{route('user#home')}}"> Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{route('user#rulepage')}}"> Customer Review Chat Rule </a></p>
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
					<a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">English</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
					 aria-selected="false">Myanmar</a>
				</li>
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="col-lg-12 insurence-right">
                        <h6 class="text-uppercase">Need to know</h6>
                        <h1>Chatting Honest Review</h1>
                        <p>
                            You Must obey below the information. If not, the admin team can remove your account
                        </p>
                        <div class="list-wrap">
                            <ul>
                                <li>Start the chat conversation with a friendly greeting.</li>
                                <li>Mind the communication environment</li>
                                <li>Remember you are talking to people</li>
                                <li>Don’t be distracted and don’t distract others</li>
                                <li>No Gossiping</li>
                                <li>Start the chat conversation with a friendly greeting.</li>
                                <li>Be Patient With Others in a Group Chat</li>
                                <li>Don't Give Out Sensitive Information</li>
                                <li>Avoid Private Conversations in a Group Chat</li>
                                <li>Avoid telling Rude words</li>
                                <li>Review Your Texts.</li>
                                <li>Be respectful to anyone in the chat</li>
                                <li>No offensive slurs and racist remark</li>
                            </ul>
                        </div>
                    </div>
				</div>
				<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
					<div class="col-lg-12 insurence-right">
                        <h6 class="text-uppercase">သိရန်</h6>
                        <h1>ရိုးသားစွာ သုံးသပ်ခြင်း</h1>
                        <p>
                            အောက်ဖော်ပြပါအချက်အလက်များကို လိုက်နာရပါမည်။ မဟုတ်ပါက စီမံခန့်ခွဲသူအဖွဲ့သည် သင့်အကောင့်ကို ဖယ်ရှားနိုင်ပါသည်။
                        </p>
                        <div class="list-wrap">
                            <ul>
                                <li>ဖော်ရွေသောနှုတ်ဆက်ခြင်းဖြင့် ချတ်စကားဝိုင်းကို စတင်ပါ။</li>
                                 <li>ဆက်သွယ်ရေးပတ်ဝန်းကျင်ကို သတိထားပါ။</li>
                                 <li>လူများနှင့် စကားပြောနေသည်ကို သတိရပါ</li>
                                 <li>စိတ်အနှောက်အယှက်မဖြစ်စေနှင့် အခြားသူများကို အာရုံမပြောင်းပါနှင့်</li>
                                 <li>အတင်းအဖျင်းမလုပ်ပါ</li>
                                 <li>ဖော်ရွေသောနှုတ်ဆက်ခြင်းဖြင့် ချတ်စကားဝိုင်းကို စတင်ပါ။</li>
                                 <li>Group Chatတွင် အခြားသူများနှင့် စိတ်ရှည်ပါ</li>
                                 <li>အရေးကြီးသောအချက်အလက်(ကိုယ်ရေးကိုယ်တာအချက်အလက်)ကို မပေးပါနှင့်</li>
                                 <li>Group Chatတွင် သီးသန့် စကားဝိုင်းများကို ရှောင်ကြဉ်ပါ</li>
                                 <li>ရိုင်းစိုင်းသော စကားလုံးများ ပြောခြင်းကို ရှောင်ကြဉ်ပါ</li>
                                 <li>သင်၏ စာသားများကို ပြန်လည်သုံးသပ်ပါ။</li>
                                 <li>Group Chatရှိမည်သူ့ကိုမဆို လေးစားပါ</li>
                                 <li>ရိုင်းစိုင်းသော ဆဲဆိုမှုများနှင့် လူမျိုးရေးခွဲခြားမှု မှတ်ချက်များ မရှိပါ။</li>
                            </ul>
                        </div>
                    </div>
				</div>
			</div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="myCheck" onclick="myFunction()">
                <label class="form-check-label"  id="myCheck">
                  Do you Agree this rules & regulations?
                </label>
            </div>
            <div class="mt-5">
                <a href="{{route('user#joinpage')}}" class="btn btn-danger btn-sm" id="text" style="display:none;width:200px">Go To Next</a>
            </div>
		</div>
	</section>
	<!--================End Product Description Area =================-->
@endsection
@section('scriptSource')
<script>
    function myFunction() {
      var checkBox = document.getElementById("myCheck");
      var text = document.getElementById("text");
      if (checkBox.checked == true){
        text.style.display = "block";
      } else {
         text.style.display = "none";
      }
    }
    </script>
@endsection
