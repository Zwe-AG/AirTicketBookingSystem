<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\AirlineController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MainShowContoller;
use App\Http\Controllers\AirTicketController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\User\ReviewController;
use App\Http\Controllers\VerifiedCodeController;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\AccountController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['admin_auth'])->group(function(){
    // login Page
    Route::redirect('/', 'loginPage');
    Route::get('loginPage',[AuthController::class,'loginPage'])->name('auth#loginPage');
    // Register Page
    Route::get('registerPage',[AuthController::class,'registerPage'])->name('auth#registerPage');

    // OTP Process if your password forgot
    Route::prefix('otp')->group(function () {
        Route::get('page',[VerifiedCodeController::class,'otpPage'])->name('otp#page');
        Route::get('verified/{user_id}',[VerifiedCodeController::class,'otpVerifiedPage'])->name('otp#verifiedpage');
        Route::post('generate',[VerifiedCodeController::class,'otpGenerate'])->name('otp#generate');
        Route::post('otpLogin',[VerifiedCodeController::class,'otpLogin'])->name('otp#login');
    });
});


Route::middleware(['auth'])->group(function () {
    // admin & user authentication
    Route::get('/dashboard',[AuthController::class,'dashboard'])->name('dashboard');

    // For Admin
    Route::group(['prefix'=>'admin','middleware'=>'admin_auth'],function(){

        // main page
        Route::get('mainpage',[MainShowContoller::class,'mainPage'])->name('admin#mainpage');

        // airline
        Route::prefix('airline')->group(function(){
            Route::get('list',[AirlineController::class,'list'])->name('admin#airlinelist');
            Route::post('create',[AirlineController::class,'airlineCreate'])->name('admin#airlinecreate');
            Route::get('delete/{id}',[AirlineController::class,'airlineDelete'])->name('admin#airlinedelete');
            Route::get('editPage/{id}',[AirlineController::class,'airlineEditPage'])->name('admin#airlineeditpage');
            Route::post('update',[AirlineController::class,'airlineUpdate'])->name('admin#airlineupdate');
        });

        // city
        Route::prefix('city')->group(function(){
            Route::get('list',[CityController::class,'list'])->name('admin#citylist');
            Route::get('createPage',[CityController::class,'cityCreatePage'])->name('admin#citycreatepage');
            Route::post('create',[CityController::class,'cityCreate'])->name('admin#citycreate');
            Route::get('delete/{id}',[CityController::class,'cityDelete'])->name('admin#citydelete');
            Route::get('editPage/{id}',[CityController::class,'cityEditPage'])->name('admin#cityeditpage');
            Route::post('update',[CityController::class,'cityUpdate'])->name('admin#cityupdate');
        });

        // contact  for admin dashboard
        Route::prefix('contact')->group(function(){
            Route::get('list',[ContactController::class,'list'])->name('admin#contactpage');
            Route::get('delete/{id}',[ContactController::class,'conatctDelete'])->name('admin#contactdelete');
            Route::get('detail/{id}',[ContactController::class,'conatctDetail'])->name('admin#contactdetail');
        });

        // admin account
        Route::prefix('account')->group(function(){
            Route::get('change/password/page',[AdminController::class,'changePasswordPage'])->name('admin#accountchangepasswordpage');
            Route::post('change/password',[AdminController::class,'changePassword'])->name('admin#accountchangepassword');
            Route::get('profile/page',[AdminController::class,'profilePage'])->name('admin#accountprofilepage');
            Route::get('profile/edit',[AdminController::class,'profileEdit'])->name('admin#accountprofileedit');
            Route::post('profile/update/{id}',[AdminController::class,'profileUpdate'])->name('admin#accountprofileupdate');
        });

        // ticket
        Route::prefix('ticket')->group(function(){
            Route::get('air/page/{id}',[AirTicketController::class,'airTicketPage'])->name('admin#airticketpage');
            Route::get('air/downloadpdf/{id}',[AirTicketController::class,'airTicketDownload'])->name('admin#airticketdownload');
        });

        // flight
        Route::prefix('flight')->group(function(){
            Route::get('list',[FlightController::class,'list'])->name('admin#flightlist');
            Route::get('create/page',[FlightController::class,'flightCreatePage'])->name('admin#flightcreatepage');
            Route::post('create',[FlightController::class,'flightCreate'])->name('admin#flightcreate');
            Route::get('flight/delete/{id}',[FlightController::class,'flightDelete'])->name('admin#flightdelete');
            Route::get('flight/edit/{id}',[FlightController::class,'flightEdit'])->name('admin#flightedit');
            Route::post('flight/update/{id}',[FlightController::class,'flightUpdate'])->name('admin#flightupdate');
        });

        // Admin List
        Route::get('list',[AdminController::class,'adminList'])->name('admin#list');
        Route::get('delete/{id}',[AdminController::class,'adminDelete'])->name('admin#delete');

         // User List
        Route::get('user/list',[UserController::class,'userList'])->name('user#list');

        // ajax for change admin or user & booking status
        Route::prefix('ajax')->group(function(){
            Route::get('role/userchange',[AjaxController::class,'userChangeRole'])->name('ajax#changeUserRole');
            Route::get('role/adminchange',[AjaxController::class,'adminChangeRole'])->name('ajax#changeAdminRole');
            Route::get('status/change',[AjaxController::class,'statusChange'])->name('ajax#changestatus');
         });

        // booking
        Route::prefix('booking')->group(function(){
            Route::get('list',[BookingController::class,'bookingList'])->name('admin#bookinglist');
            Route::get('status/list',[BookingController::class,'statusList'])->name('admin#statuslist');
        });

        // email
        Route::get('email/page/{id}',[SendEmailController::class,'sendEmailPage'])->name('admin#emailpage');
        Route::post('send/email',[SendEmailController::class,'sendEmail'])->name('admin#sendemail');

    });

    // For User
    Route::group(['prefix'=>'user','middleware'=>'user_auth'],function(){

        // home page
        Route::get('home',[HomeController::class,'home'])->name('user#home');

        // about page
        Route::get('about',[HomeController::class,'about'])->name('user#about');

        // insurance page
        Route::get('insurance',[HomeController::class,'insurance'])->name('user#insurance');

        // contact page for website
        Route::get('contact',[ContactController::class,'contactPage'])->name('user#contactPage');
        Route::post('send',[ContactController::class,'sendMessage'])->name('user#sendmessage');
        Route::get('contact/success',[ContactController::class,'contactSuccess'])->name('user#contactsuccess');

        // account
        Route::prefix('account')->group(function(){
            Route::get('profile/page',[AccountController::class,'profilePage'])->name('user#accountprofilepage');
            Route::get('profile/edit',[AccountController::class,'profileEdit'])->name('user#accountprofileedit');
            Route::post('profile/update/{id}',[AccountController::class,'profileUpdate'])->name('user#accountprofileupdate');
            Route::get('change/password/page',[AccountController::class,'changePasswordPage'])->name('user#accountchangepasswordpage');
            Route::post('change/password',[AccountController::class,'changePassword'])->name('user#accountchangepassword');
        });

        // flight
        Route::prefix('flight')->group(function(){
            Route::get('list/page',[HomeController::class,'listPage'])->name('user#flightlistpage');
            // filter flight
            Route::get('fliter/{classFlight}',[HomeController::class,'filterFlight'])->name('user#filterflight');
            // filter Airline
            Route::get('fliterAirline/{airlineFlight}',[HomeController::class,'filterAirline'])->name('user#filterairline');
            // filter City
            Route::get('fliterCity/{cityFlight}',[HomeController::class,'filterCity'])->name('user#filtercity');
            // filter Price
            Route::get('fliterPrice/{priceFlight}',[HomeController::class,'filterPrice'])->name('user#filterprice');
        });

        // review
        Route::prefix('review')->group(function(){
            Route::get('rule',[ReviewController::class,'rulePage'])->name('user#rulepage');
            Route::get('join',[ReviewController::class,'joinPage'])->name('user#joinpage');
            Route::get('page',[ReviewController::class,'reviewPage'])->name('user#reviewpage');
            Route::post('create',[ReviewController::class,'reviewCreate'])->name('user#reviewcreate');
            Route::get('delete/{id}',[ReviewController::class,'reviewDelete'])->name('user#reviewdelete');
            Route::get('edit/{id}',[ReviewController::class,'reviewEdit'])->name('user#reviewedit');
            Route::post('update/{id}',[ReviewController::class,'reviewUpdate'])->name('user#reviewupdate');
            Route::get('review/list',[ReviewController::class,'reviewList'])->name('user#reviewList');
        });

        // booking
        Route::prefix('booking')->group(function(){
            Route::get('page/{id}',[BookingController::class,'bookingPage'])->name('user#bookingpage');
            Route::post('flight/book',[BookingController::class,'flightBook'])->name('user#bookingflight');
            Route::get('recieved',[BookingController::class,'bookingRecieved'])->name('user#bookingrecieved');
            Route::get('history',[BookingController::class,'bookingHistory'])->name('user#bookinghistory');
            Route::get('detail/{id}',[BookingController::class,'bookingDetail'])->name('user#bookingdetail');
        });

        Route::prefix('ajax')->group(function(){
            // ajax for sorting flights
            Route::get('flights/list',[HomeController::class,'sortFlight'])->name('ajax#sortingflights');
         });

    });
});


