@extends('admin.layouts.master')
@section('myContent')
<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <!-- Layout container -->
        <div class="layout-page">
            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->
                <div class="container-xxl flex-grow-1 container-p-y">
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account Profile /</span>
                        Account</h4>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card mb-4">
                                <h5 class="card-header">Profile Details</h5>
                                <!-- Account -->
                                <div class="card-body">
                                    <form id="formAccountSettings">
                                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                                            @if (Auth::user()->image == null)
                                            @if (Auth::user()->gender == 'male')
                                            <img src="{{asset('profile/male.jpeg')}}" class="d-block rounded" height="100" width="100" id="uploadedAvatar"/>
                                            @else
                                            <img src="{{asset('profile/female.jpeg')}}" class="d-block rounded" height="100" width="100" id="uploadedAvatar"/>
                                            @endif
                                            @else
                                            <img src="{{ asset('storage/'.Auth::user()->image) }}"  class="d-block rounded" height="100" width="100" id="uploadedAvatar"  style="object-fit:cover"/>
                                            @endif
                                    </div>
                                    <hr class="mb-3" />
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label for="firstName" class="form-label">User Name</label>
                                                <input class="form-control" type="text" name="name" value="{{old('name',Auth::user()->name)}}" disabled/>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Phone Number</label>
                                                <input class="form-control" type="number" name="phone" value="{{old('phone',Auth::user()->phone)}}" disabled/>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="email" class="form-label">E-mail</label>
                                                <input class="form-control" type="email" id="email" name="email" value="{{old('email',Auth::user()->email)}}" disabled/>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="organization" class="form-label">Address</label>
                                                <input type="text" class="form-control" id="organization" name="address" value="{{old('address',Auth::user()->address)}}" disabled/>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label" for="country">Country</label>
                                                <select id="country" class="select2 form-select" name="country" disabled>
                                                    <option value="">No Choose Country</option>
                                                    <option value="Australia"  @if(Auth::user()->country == 'Australia') selected @endif>Australia</option>
                                                    <option value="Bangladesh" @if(Auth::user()->country == 'Bangladesh') selected @endif>Bangladesh</option>
                                                    <option value="Belarus" @if(Auth::user()->country == 'Belarus') selected @endif>Belarus</option>
                                                    <option value="Brazil" @if(Auth::user()->country == 'Brazil') selected @endif>Brazil</option>
                                                    <option value="Canada"  @if(Auth::user()->country == 'Canada') selected @endif>Canada</option>
                                                    <option value="China"  @if(Auth::user()->country == 'China') selected @endif>China</option>
                                                    <option value="France"  @if(Auth::user()->country == 'France') selected @endif>France</option>
                                                    <option value="Germany"  @if(Auth::user()->country == 'Germany') selected @endif>Germany</option>
                                                    <option value="India"  @if(Auth::user()->country == 'India') selected @endif>India</option>
                                                    <option value="Indonesia"  @if(Auth::user()->country == 'Indonesia') selected @endif>Indonesia</option>
                                                    <option value="Israel"  @if(Auth::user()->country == 'Israel') selected @endif>Israel</option>
                                                    <option value="Italy"  @if(Auth::user()->country == 'Italy') selected @endif>Italy</option>
                                                    <option value="Japan"  @if(Auth::user()->country == 'Japan') selected @endif>Japan</option>
                                                    <option value="Korea"  @if(Auth::user()->country == 'Korea') selected @endif>Korea</option>
                                                    <option value="Mexico"  @if(Auth::user()->country == 'Mexico') selected @endif>Mexico</option>
                                                    <option value="Philippines"  @if(Auth::user()->country == 'Philippines') selected @endif>Philippines</option>
                                                    <option value="Russia"  @if(Auth::user()->country == 'Russia') selected @endif>Russian Federation</option>
                                                    <option value="Myanmar"  @if(Auth::user()->country == 'Myanmar') selected @endif>Myanmar</option>
                                                    <option value="Thailand"  @if(Auth::user()->country == 'Thailand') selected @endif>Thailand</option>
                                                    <option value="Turkey"  @if(Auth::user()->country == 'Turkey') selected @endif>Turkey</option>
                                                    <option value="Ukraine"  @if(Auth::user()->country == 'Ukraine') selected @endif>Ukraine</option>
                                                    <option value="UAE"  @if(Auth::user()->country == 'UAE') selected @endif>UAE
                                                    </option>
                                                    <option value="England"  @if(Auth::user()->country == 'England') selected @endif>England</option>
                                                    <option value="USA"  @if(Auth::user()->country == 'USA') selected @endif>USA</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="language" class="form-label">Language</label>
                                                <select id="language" class="select2 form-select" name="language" disabled>
                                                    <option value="">No Choose Language</option>
                                                    <option value="english" @if(Auth::user()->language == 'english') selected @endif>English</option>
                                                    <option value="burmese" @if(Auth::user()->language == 'burmese') selected @endif>Burmese</option>
                                                    <option value="french" @if(Auth::user()->language == 'french') selected @endif>French</option>
                                                    <option value="german" @if(Auth::user()->language == 'german') selected @endif>German</option>
                                                    <option value="korean" @if(Auth::user()->language == 'korean') selected @endif>Korean</option>
                                                    <option value="portuguese" @if(Auth::user()->language == 'portuguese') selected @endif>Portuguese</option>
                                                    <option value="japanese" @if(Auth::user()->language == 'japanese') selected @endif>Japanese</option>
                                                    <option value="chinese" @if(Auth::user()->language == 'chinese') selected @endif>Chinese</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="language" class="form-label">Gender</label>
                                                <select id="language" class="select2 form-select" name="gender" disabled>
                                                    <option value="">No Choose Gender</option>
                                                    <option value="male" @if(Auth::user()->gender == 'male') selected @endif>Male</option>
                                                    <option value="female" @if(Auth::user()->gender == 'female') selected @endif>Female</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="organization" class="form-label">Role</label>
                                                <input type="text" class="form-control" id="organization" name="role" value="{{old('role',Auth::user()->role)}}" disabled/>
                                            </div>
                                        </div>
                                        <div class="mt-2">
                                            <a href="{{route('admin#accountprofileedit')}}" class="btn btn-primary me-2">Edit Profile</a>
                                            <button onclick="history.back()" class="btn btn-outline-secondary">Go to back</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- /Account -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / Content -->
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>
</div>
<!-- / Layout wrapper -->
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
