<?php
use Illuminate\Support\Facades\DB;
?>
  <header id="header" class="header modern-header modern-header-theme-colored">
    <div class="header-top bg-theme-colored sm-text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="widget text-white">
              <i class="fa fa-clock-o text-theme-colored2"></i> Tanzania Muslim Student and Youth Association
            </div>
          </div>
          <div class="col-md-4">
            <div class="widget">
              <ul class="list-inline  text-right flip sm-text-center">
                <li class="m-0 pl-10"> <a href="http://www.tamsya.or.tz:2095"><i class="fa fa-envelope-o mr-5 text-theme-colored2"></i>STAFF MAIL</a> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-middle p-0 bg-light xs-text-center">
      <div class="container pt-30 pb-30">
        <div class="row">
          <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="widget sm-text-center">
              <i class="fa fa-envelope text-theme-colored2 font-32 mt-5 mr-sm-0 sm-display-block pull-left flip sm-pull-none"></i>
              <a href="#" class="font-12 text-gray text-uppercase">Mail Us Today</a>
              <h5 class="font-13 text-black m-0"> {{DB::table('settings')->where('id','=',1)->value('email')}}</h5>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-6">
            <div class="widget text-center">
              <a class="" href="{{url('/')}}"><img src="{{ asset("uploads/".DB::table('settings')->where('id','=',1)->value('logo'))}}" alt=""></a>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="widget sm-text-center">
              <i class="fa fa-building-o text-theme-colored2 font-32 mt-5 mr-sm-0 sm-display-block pull-left flip sm-pull-none"></i>
              <a href="#" class="font-12 text-gray text-uppercase">Call Us</a>
              <h5 class="font-13 text-black m-0"> {{DB::table('settings')->where('id','=',1)->value('phone')}}</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed">
        <div class="container">
          <nav id="menuzord" class="menuzord blue">
            <ul class="menuzord-menu">
              <li class="home"><a href="{{url('/')}}"><i class="fa fa-home font-28"></i></a></li>
              <li class="active"><a href="#home">About Us</a>
                <ul class="dropdown">
                  <li><a href="/history/about_us">Who are We</a></li>
                  <li><a href="/matawi">Tamsya Branches</a></li>
                  <li><a href="#">Leaders</a>
                    <ul class="dropdown">
                      <li><a href="/viongozi/executive_member">Executive Members</a></li>
                      <li><a href="/viongozi/board_member">Board Members</a></li>
                      <li><a href="/viongozi/secretariety">Secretariety</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a href="{{url('/events')}}">Events</a></li>
              <li><a href="{{url('/programs')}}">Programs</a></li>
              <li><a href="{{url('/miradi')}}">Projects</a></li>
              <li><a href="#">Online System</a>
                <ul class="dropdown">
                  <li><a href="#">Certificate</a></li>
                  <li><a href="#">Library</a></li>
                  <li><a href="#">Volunteer</a></li>
                </ul>
              </li>
              <li><a href="{{url('/contacts')}}">Contact Us</a></li>
               <li class="active pull-right"><a href="#" class="font-20 line-height-1">DONATE</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>