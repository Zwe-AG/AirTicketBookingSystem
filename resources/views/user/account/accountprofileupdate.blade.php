@extends('user.layouts.master')
@section('myContent')
<!-- start banner Area -->
<section class="relative about-banner">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                   Your Profile
                </h1>
                <p class="text-white link-nav"><a href="{{route('user#home')}}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{route('user#accountprofileedit')}}"> Edit Profile</a></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

        <div class="layout-page" style="margin:100px">
            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->
                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card mb-4">
                                <h5 class="card-header">Profile Update</h5>
                                <!-- Account -->
                                <div class="card-body">
                                    <form id="formAccountSettings" action="{{route('user#accountprofileupdate',Auth::user()->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                                            @if (Auth::user()->image == null)
                                            @if (Auth::user()->gender == 'male')
                                            <img src="{{asset('profile/male.jpeg')}}" class="d-block rounded" height="100" width="100" id="uploadedAvatar"/>
                                            @else
                                            <img src="{{asset('profile/female.jpeg')}}" class="d-block rounded" height="100" width="100" id="uploadedAvatar"/>
                                            @endif
                                            @else
                                            <img src="{{ asset('storage/'.Auth::user()->image) }}"  class="d-block rounded" height="100" width="100" style="object-fit:cover" id="uploadedAvatar"/>
                                            @endif
                                        <div class="button-wrapper ml-4">
                                            <label for="upload" class="btn btn-primary me-2 mb-2" tabindex="0">
                                                <span class="d-none d-sm-block">Upload new photo</span>
                                                <i class="bx bx-upload d-block d-sm-none"></i>
                                                <input type="file" id="upload" class="account-file-input" hidden
                                                    accept="image/png, image/jpeg" name="image"/>
                                            </label>
                                            <p class="text-muted mb-0">Allowed JPG, JPEG or PNG. Max size of 800K</p>
                                        </div>
                                    </div>
                                    <hr class="mb-3" />
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label for="firstName" class="form-label">User Name</label>
                                                <input class="form-control" type="text" id="firstName"
                                                    name="name" value="{{old('name',Auth::user()->name)}}" autofocus />
                                                @error('name')
                                                    <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label" for="phoneNumber">Phone Number</label>
                                                <div class="input-group input-group-merge">
                                                    <span class="input-group-text">MYA (+95)</span>
                                                    <input type="text" id="phoneNumber" name="phone"
                                                        class="form-control" value="{{old('phone',Auth::user()->phone)}}" />
                                                    @error('phone')
                                                        <small class="text-danger">{{$message}}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="email" class="form-label">E-mail</label>
                                                <input class="form-control" type="email" id="email" name="email"
                                                value="{{old('email',Auth::user()->email)}}" />
                                                @error('email')
                                                        <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="organization" class="form-label">Address</label>
                                                <input type="text" class="form-control" id="organization"
                                                    name="address" value="{{old('address',Auth::user()->address)}}"/>
                                                @error('address')
                                                        <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label" for="country">Country</label>
                                                <select id="country" class="select2 form-select" name="country">
                                                    <option value="">Select Country</option>
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
                                                @error('country')
                                                <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="language" class="form-label">Language</label>
                                                <select id="language" class="select2 form-select" name="language">
                                                    <option value="">Select Language</option>
                                                    <option value="english" @if(Auth::user()->language == 'english') selected @endif>English</option>
                                                    <option value="burmese" @if(Auth::user()->language == 'burmese') selected @endif>Burmese</option>
                                                    <option value="french" @if(Auth::user()->language == 'french') selected @endif>French</option>
                                                    <option value="german" @if(Auth::user()->language == 'german') selected @endif>German</option>
                                                    <option value="korean" @if(Auth::user()->language == 'korean') selected @endif>Korean</option>
                                                    <option value="portuguese" @if(Auth::user()->language == 'portuguese') selected @endif>Portuguese</option>
                                                    <option value="japanese" @if(Auth::user()->language == 'japanese') selected @endif>Japanese</option>
                                                    <option value="chinese" @if(Auth::user()->language == 'chinese') selected @endif>Chinese</option>
                                                </select>
                                                @error('language')
                                                        <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="gender" class="form-label">Gender</label>
                                                <select id="gender" class="select2 form-select" name="gender">
                                                    <option value="">Select Gender</option>
                                                    <option value="male" @if(Auth::user()->gender == 'male') selected @endif>Male</option>
                                                    <option value="female" @if(Auth::user()->gender == 'female') selected @endif>Female</option>
                                                </select>
                                                @error('gender')
                                                        <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="organization" class="form-label">Role</label>
                                                <input type="text" class="form-control" id="organization" name="role" value="{{old('role',Auth::user()->role)}}" disabled/>
                                            </div>
                                        </div>
                                        <div class="mt-2">
                                            <button type="submit" class="btn btn-primary me-2">Save changes</button>
                                            <a href="{{route('user#accountprofilepage')}}" class="btn btn-outline-secondary">Go to back</a>
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

@endsection
