@extends('admin.layouts.master')
@section('myContent')

 <!-- Content wrapper -->
 <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <div class="row">
        <div class="col-lg-8 mb-4 order-0">
          <div class="card">
            <div class="d-flex align-items-end row">
              <div class="col-sm-7">
                <div class="card-body">
                  <h5 class="card-title text-primary">Welcome to  {{Auth::user()->name}}! 🎉</h5>
                  <p class="mb-4">
                    You have done <span class="fw-bold">100%</span> more sales today. Check your update
                    your profile.
                  </p>
                  <a href="{{route('admin#accountprofilepage')}}" class="btn btn-sm btn-outline-primary">View Profile</a>
                </div>
              </div>
              <div class="col-sm-5 text-center text-sm-left">
                <div class="card-body pb-0 px-0 px-md-4">
                  <img
                    src="{{asset('accountSetting/assets/img/illustrations/man-with-laptop-light.png')}}"
                    height="140"
                    alt="View Badge User"
                    data-app-dark-img="illustrations/man-with-laptop-dark.png"
                    data-app-light-img="illustrations/man-with-laptop-light.png"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 order-1">
          <div class="row">
            <div class="col-lg-6 col-md-12 col-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="card-title d-flex align-items-start justify-content-between">
                    <div class="avatar flex-shrink-0">
                      <img src="{{asset('accountSetting/assets/img/icons/unicons/bxl-facebook.png')}}"
                        alt="chart success"
                        class="rounded"
                      />
                    </div>
                  </div>
                  <span class="fw-semibold d-block mb-1 text-primary">Fackbook</span>
                  <h3 class="card-title mb-2">10.4 M</h3>
                  <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +34%</small>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12 col-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="card-title d-flex align-items-start justify-content-between">
                    <div class="avatar flex-shrink-0">
                      <img
                        src="{{asset('accountSetting/assets/img/icons/unicons/bxl-instagram.png')}}"
                        alt="Credit Card"
                        class="rounded"
                      />
                    </div>
                  </div>
                  <span class="text-primary fw-semibold">Instagran</span>
                  <h3 class="card-title text-nowrap mb-1">304.5 k</h3>
                  <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-12 order-1">
            <div class="row">
              <div class="col-lg-2 col-md-4 col-6 mb-4">
                <div class="card">
                  <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                      <div class="avatar flex-shrink-0">
                        <img
                          src="{{asset('accountSetting/assets/img/icons/unicons/bx-like.png')}}"
                          alt="Credit Card"
                          class="rounded"
                        />
                      </div>
                    </div>
                    <span class="text-primary fw-semibold">Like</span>
                    <h3 class="card-title text-nowrap mb-1">500.2 k</h3>
                    <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 col-md-4 col-6 mb-4">
                <div class="card">
                  <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                      <div class="avatar flex-shrink-0">
                        <img src="{{asset('accountSetting/assets/img/icons/unicons/bxl-twitter.png')}}"
                          alt="chart success"
                          class="rounded"
                        />
                      </div>
                    </div>
                    <span class="fw-semibold d-block mb-1 text-primary">Twitter</span>
                    <h3 class="card-title mb-2">15.1 M</h3>
                    <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +34%</small>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-6 mb-4">
                <div class="card">
                  <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                      <div class="avatar flex-shrink-0">
                        <img
                          src="{{asset('accountSetting/assets/img/icons/unicons/bx-message-dots.png')}}"
                          alt="Credit Card"
                          class="rounded"
                        />
                      </div>
                    </div>
                    <span class="text-primary fw-semibold">Reviews</span>
                    <h3 class="card-title text-nowrap mb-1">{{count($reviews)}}</h3>
                    <span class="text-success fw-semibold"> Positive <i class="bx bx-up-arrow-alt"></i> +11.42%</span> |
                    <span class="text-danger fw-semibold"> Negative <i class="bx bx-down-arrow-alt"></i> 2.1%</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 col-md-4 col-6 mb-4">
                <div class="card">
                  <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                      <div class="avatar flex-shrink-0">
                        <img
                          src="{{asset('accountSetting/assets/img/icons/unicons/bx-male-female.png')}}"
                          alt="Credit Card"
                          class="rounded"
                        />
                      </div>
                    </div>
                    <span class="text-primary fw-semibold">Customer</span>
                    <h3 class="card-title text-nowrap mb-1">{{count($customers)}}</h3>
                    <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +3.02%</small>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 col-md-4 col-6 mb-4">
                <div class="card">
                  <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                      <div class="avatar flex-shrink-0">
                        <img src="{{asset('accountSetting/assets/img/icons/unicons/bxs-plane-alt.png')}}"
                          alt="chart success"
                          class="rounded"
                        />
                      </div>
                    </div>
                    <span class="fw-semibold d-block mb-1 text-primary">Flight</span>
                    <h3 class="card-title mb-2">{{count($flights)}}</h3>
                    <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +3%</small>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <!-- Booking-->
        <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
          <div class="card">
            <h5 class="card-header">Booking</h5>
            <div class="table-responsive text-nowrap">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Passenger</th>
                    <th>Booking Code</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($bookings as $b)
                    <tr>
                        <td>{{$b->id}}</td>
                        <td>{{$b->name}}</td>
                        <td>
                            {{$b->email}}
                        </td>
                        <td><span class="text-danger">{{$b->passenger_qty}}</span> people</td>
                        <td>{{$b->booking_code}}</td>
                        <td>
                            @if ($b->status == 0)
                            <span class="badge bg-label-warning me-1 fs-6">Pending</span>
                            @elseif($b->status == 1)
                            <span class="badge bg-label-danger me-1 fs-6">Cancel</span>
                            @elseif($b->status == 2)
                            <span class="badge bg-label-success me-1 fs-6">Accepted</span>
                            @endif
                        </td>
                      </tr>
                    @endforeach
                </tbody>
              </table>
              {{$bookings->links()}}
            </div>
          </div>
        </div>

        <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
          <div class="row">
            <div class="col-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="card-title d-flex align-items-start justify-content-between">
                    <div class="avatar flex-shrink-0">
                      <img src="{{asset('accountSetting/assets/img/icons/unicons/paypal.png')}}" alt="Credit Card" class="rounded" />
                    </div>
                  </div>
                  <span class="d-block mb-1 text-primary">Payments</span>
                  <h3 class="card-title text-nowrap mb-2">$2,456</h3>
                  <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> -14.82%</small>
                </div>
              </div>
            </div>
            <div class="col-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="card-title d-flex align-items-start justify-content-between">
                    <div class="avatar flex-shrink-0">
                      <img src="{{asset('accountSetting/assets/img/icons/unicons/cc-success.png')}}" alt="Credit Card" class="rounded" />
                    </div>
                  </div>
                  <span class="fw-semibold d-block mb-1 text-primary">Sales</span>
                  <h3 class="card-title mb-2">{{$totalPrice}}</h3>
                  <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.14%</small>
                </div>
              </div>
            </div>
        </div>


    <div class="row">
            <div class="col-12 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                    <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                      <div class="card-title">
                        <h5 class="text-nowrap mb-2">Sales Report</h5>
                        <span class="badge bg-label-warning rounded-pill">Year 2023</span>
                      </div>
                      <div class="mt-sm-auto">
                        <small class="text-success text-nowrap fw-semibold"
                          ><i class="bx bx-chevron-up"></i> 68.2%</small
                        >
                        <h3 class="mb-0">{{$totalPrice}} MMK</h3>
                      </div>
                    </div>
                    <div id="profileReportChart"></div>
                  </div>
                </div>
              </div>
            </div>
    </div>

    </div>
      </div>
      <div class="row">
        <!-- Order Statistics -->
        <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
          <div class="card h-100">
            <div class="card-header d-flex align-items-center justify-content-between pb-0">
              <div class="card-title mb-0">
                <h5 class="m-0 me-2">Booking Statistics</h5>
                <small class="text-muted">Total Ticket Sales</small>
              </div>
              <div class="dropdown">
                <button
                  class="btn p-0"
                  type="button"
                  id="orederStatistics"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex flex-column align-items-center gap-1">
                  <h2 class="mb-4">8,258</h2>
                  {{-- <span>Total Orders</span> --}}
                </div>
                {{-- <div id="orderStatisticsChart"></div> --}}
              </div>
              <ul class="p-0 m-0">
                <li class="d-flex mb-4 pb-1">
                  <div class="avatar flex-shrink-0 me-3">
                    <span class="avatar-initial rounded bg-label-success"
                      ><i class="bx bx-happy-alt"></i
                    ></span>
                  </div>
                  <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                    <div class="me-2">
                      <h6 class="mb-0">Accept</h6>
                      <small class="text-muted">welcome to my travel world</small>
                    </div>
                    <div class="user-progress">
                      <small class="fw-semibold">82.5k</small>
                    </div>
                  </div>
                </li>
                <li class="d-flex mb-4 pb-1">
                  <div class="avatar flex-shrink-0 me-3">
                    <span class="avatar-initial rounded bg-label-danger"><i class="bx bx-error-alt"></i></span>
                  </div>
                  <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                    <div class="me-2">
                      <h6 class="mb-0">Cancel</h6>
                      <small class="text-muted">Try again! Let's Go</small>
                    </div>
                    <div class="user-progress">
                      <small class="fw-semibold">23.8k</small>
                    </div>
                  </div>
                </li>
                <li class="d-flex mb-4 pb-1">
                  <div class="avatar flex-shrink-0 me-3">
                    <span class="avatar-initial rounded bg-label-warning"><i class="bx bx-loader"></i></span>
                  </div>
                  <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                    <div class="me-2">
                      <h6 class="mb-0">Pending</h6>
                      <small class="text-muted">waiting for you Good luck</small>
                    </div>
                    <div class="user-progress">
                      <small class="fw-semibold">849k</small>
                    </div>
                  </div>
                </li>
                <li class="d-flex">
                  <div class="avatar flex-shrink-0 me-3">
                    <span class="avatar-initial rounded bg-label-info"
                      ><i class="bx bx-mail-send"></i
                    ></span>
                  </div>
                  <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                    <div class="me-2">
                      <h6 class="mb-0">Mail</h6>
                      <small class="text-muted">let's check your email</small>
                    </div>
                    <div class="user-progress">
                      <small class="fw-semibold">99</small>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!--/ Order Statistics -->

        <!-- Expense Overview -->
        <div class="col-md-6 col-lg-4 order-1 mb-4">
          <div class="card h-100">
            <div class="card-header">
              <ul class="nav nav-pills" role="tablist">
                <li class="nav-item">
                  <button
                    type="button"
                    class="nav-link active"
                    role="tab"
                    data-bs-toggle="tab"
                    data-bs-target="#navs-tabs-line-card-income"
                    aria-controls="navs-tabs-line-card-income"
                    aria-selected="true"
                  >
                    Income
                  </button>
                </li>
                <li class="nav-item">
                  <button type="button" class="nav-link" role="tab">Expenses</button>
                </li>
                <li class="nav-item">
                  <button type="button" class="nav-link" role="tab">Profit</button>
                </li>
              </ul>
            </div>
            <div class="card-body px-0">
              <div class="tab-content p-0">
                <div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel">
                  <div class="d-flex p-4 pt-3">
                    <div class="avatar flex-shrink-0 me-3">
                      <img src="{{asset('accountSetting/assets/img/icons/unicons/wallet.png')}}" alt="User" />
                    </div>
                    <div>
                      <small class="text-muted d-block">Total Balance</small>
                      <div class="d-flex align-items-center">
                        <h6 class="mb-0 me-1">$459.10</h6>
                        <small class="text-success fw-semibold">
                          <i class="bx bx-chevron-up"></i>
                          42.9%
                        </small>
                      </div>
                    </div>
                  </div>
                  <div id="incomeChart"></div>
                  <div class="d-flex justify-content-center pt-4 gap-2">
                    <div class="flex-shrink-0">
                      <div id="expensesOfWeek"></div>
                    </div>
                    <div>
                      <p class="mb-n1 mt-1">Expenses This Week</p>
                      <small class="text-muted">$39 less than last week</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/ Expense Overview -->

        <!-- Transactions -->
        <div class="col-md-6 col-lg-4 order-2 mb-4">
          <div class="card h-100">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h5 class="card-title m-0 me-2">Transactions</h5>
              <div class="dropdown">
                <button
                  class="btn p-0"
                  type="button"
                  id="transactionID"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <ul class="p-0 m-0">
                <li class="d-flex mb-4 pb-1">
                  <div class="avatar flex-shrink-0 me-3">
                    <img src="{{asset('accountSetting/assets/img/icons/unicons/paypal.png')}}" alt="User" class="rounded" />
                  </div>
                  <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                    <div class="me-2">
                      <small class="text-muted d-block mb-1">Paypal</small>
                      <h6 class="mb-0">Send money</h6>
                    </div>
                    <div class="user-progress d-flex align-items-center gap-1">
                      <h6 class="mb-0">+82.6</h6>
                      <span class="text-muted">USD</span>
                    </div>
                  </div>
                </li>
                <li class="d-flex mb-4 pb-1">
                  <div class="avatar flex-shrink-0 me-3">
                    <img src="{{asset('accountSetting/assets/img/icons/unicons/wallet.png')}}" alt="User" class="rounded" />
                  </div>
                  <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                    <div class="me-2">
                      <small class="text-muted d-block mb-1">Wallet</small>
                      <h6 class="mb-0">Collect money</h6>
                    </div>
                    <div class="user-progress d-flex align-items-center gap-1">
                      <h6 class="mb-0">+270.69</h6>
                      <span class="text-muted">USD</span>
                    </div>
                  </div>
                </li>
                <li class="d-flex mb-4 pb-1">
                  <div class="avatar flex-shrink-0 me-3">
                    <img src="{{asset('accountSetting/assets/img/icons/unicons/chart.png')}}" alt="User" class="rounded" />
                  </div>
                  <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                    <div class="me-2">
                      <small class="text-muted d-block mb-1">Transfer</small>
                      <h6 class="mb-0">Refund</h6>
                    </div>
                    <div class="user-progress d-flex align-items-center gap-1">
                      <h6 class="mb-0">+637.91</h6>
                      <span class="text-muted">USD</span>
                    </div>
                  </div>
                </li>
                <li class="d-flex mb-4 pb-1">
                  <div class="avatar flex-shrink-0 me-3">
                    <img src="{{asset('accountSetting/assets/img/icons/unicons/cc-success.png')}}" alt="User" class="rounded" />
                  </div>
                  <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                    <div class="me-2">
                      <small class="text-muted d-block mb-1">Credit Card</small>
                      <h6 class="mb-0">booked Ticket</h6>
                    </div>
                    <div class="user-progress d-flex align-items-center gap-1">
                      <h6 class="mb-0">-838.71</h6>
                      <span class="text-muted">USD</span>
                    </div>
                  </div>
                </li>
                <li class="d-flex">
                  <div class="avatar flex-shrink-0 me-3">
                    <img src="{{asset('accountSetting/assets/img/icons/unicons/cc-warning.png')}}" alt="User" class="rounded" />
                  </div>
                  <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                    <div class="me-2">
                      <small class="text-muted d-block mb-1">Mastercard</small>
                      <h6 class="mb-0">can do everything</h6>
                    </div>
                    <div class="user-progress d-flex align-items-center gap-1">
                      <h6 class="mb-0">-92.45</h6>
                      <span class="text-muted">USD</span>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!--/ Transactions -->
      </div>
    </div>
    <!-- / Content -->

    <div class="container">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Visitors by Countries</h4>
              <div class="row">
                <div class="col-md-6">
                  <div class="table-responsive">
                    <table class="table">
                      <tbody>
                        <tr>
                          <td>
                            <i class="flag-icon flag-icon-hk"></i>
                          </td>
                          <td>Hong Kong</td>
                          <td class="text-right"> 300 </td>
                          <td class="text-right font-weight-medium fs-6"> 31.05% </td>
                        </tr>
                        <tr>
                          <td>
                            <i class="flag-icon flag-icon-jp"></i>
                          </td>
                          <td>Japan</td>
                          <td class="text-right"> 120 </td>
                          <td class="text-right font-weight-medium fs-6"> 9.53% </td>
                        </tr>
                        <tr>
                          <td>
                            <i class="flag-icon flag-icon-kr"></i>
                          </td>
                          <td>korea</td>
                          <td class="text-right"> 880 </td>
                          <td class="text-right font-weight-medium fs-6"> 30.15% </td>
                        </tr>
                        <tr>
                          <td>
                            <i class="flag-icon flag-icon-pt"></i>
                          </td>
                          <td>Portugal</td>
                          <td class="text-right"> 319 </td>
                          <td class="text-right font-weight-medium fs-6"> 50.10% </td>
                        </tr>
                        <tr>
                          <td>
                            <i class="flag-icon flag-icon-es"></i>
                          </td>
                          <td>Spain</td>
                          <td class="text-right"> 120 </td>
                          <td class="text-right font-weight-medium fs-6"> 41.25% </td>
                        </tr>
                        <tr>
                          <td>
                            <i class="flag-icon flag-icon-mm"></i>
                          </td>
                          <td>Myanmar</td>
                          <td class="text-right"> 200 </td>
                          <td class="text-right font-weight-medium fs-6"> 54.12% </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="col-md-6">
                    <div class="table-responsive">
                      <table class="table">
                        <tbody>
                          <tr>
                            <td>
                              <i class="flag-icon flag-icon-us"></i>
                            </td>
                            <td>USA</td>
                            <td class="text-right"> 1500 </td>
                            <td class="text-right font-weight-medium fs-6"> 56.35% </td>
                          </tr>
                          <tr>
                            <td>
                              <i class="flag-icon flag-icon-de"></i>
                            </td>
                            <td>Germany</td>
                            <td class="text-right"> 800 </td>
                            <td class="text-right font-weight-medium fs-6"> 33.25% </td>
                          </tr>
                          <tr>
                            <td>
                              <i class="flag-icon flag-icon-au"></i>
                            </td>
                            <td>Australia</td>
                            <td class="text-right"> 760 </td>
                            <td class="text-right font-weight-medium fs-6"> 15.45% </td>
                          </tr>
                          <tr>
                            <td>
                              <i class="flag-icon flag-icon-gb"></i>
                            </td>
                            <td>United Kingdom</td>
                            <td class="text-right"> 450 </td>
                            <td class="text-right font-weight-medium fs-6"> 25.00% </td>
                          </tr>
                          <tr>
                            <td>
                              <i class="flag-icon flag-icon-ro"></i>
                            </td>
                            <td>Romania</td>
                            <td class="text-right"> 620 </td>
                            <td class="text-right font-weight-medium fs-6"> 10.25% </td>
                          </tr>
                          <tr>
                            <td>
                              <i class="flag-icon flag-icon-br"></i>
                            </td>
                            <td>Brazil</td>
                            <td class="text-right"> 230 </td>
                            <td class="text-right font-weight-medium fs-6"> 75.00% </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
     </div>
      <!-- Footer -->
    <footer class="content-footer footer bg-footer-theme">
      <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
        <div class="mb-2 mb-md-0">
          ©
          <script>
            document.write(new Date().getFullYear());
          </script>
          , made with ❤️ by
          <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">ThemeSelection</a>
        </div>
        <div>
          <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
          <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

          <a
            href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
            target="_blank"
            class="footer-link me-4"
            >Documentation</a
          >

          <a
            href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
            target="_blank"
            class="footer-link me-4"
            >Support</a
          >
        </div>
      </div>
    </footer>
    <!-- / Footer -->

  </div>
  <!-- Content wrapper -->
@endsection
