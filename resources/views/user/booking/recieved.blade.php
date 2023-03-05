@extends('user.layouts.master')
@section('myContent')
<!-- start banner Area -->
<section class="relative about-banner">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Booking Recieved
                </h1>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->
<section class="order_details section_gap">
    <div class="container">
        <h3 class="title_confirmation">Thank you. Your booking has been received.</h3>
    </div>
</section>
<canvas id="my-canvas"></canvas>
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
<script>
    let celebration = document.querySelector("#my-canvas");
    var confettiSettings = { target: "my-canvas" };
    var confetti = new ConfettiGenerator(confettiSettings);
    confetti.render();
  </script>
@endsection
