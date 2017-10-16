
<?php
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
?>
@extends('layouts.master')
@section('title')
Home | Tamsya
@endsection

@section('slider')
<!-- Section: home -->
    <section id="home">
      <div class="container-fluid p-0">
        
        <!-- Slider Revolution Start -->
        <div class="rev_slider_wrapper">
          <div class="rev_slider" data-version="5.0">
            <ul>

               <!-- SLIDE 2 -->
              <li data-index="rs-2" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/bg/bg9.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide 2" data-description="">
                <!-- MAIN IMAGE -->
                <img src="/images/bg/bg9.jpg"  alt=""  data-bgposition="center 40%" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-uppercase bg-theme-colored-transparent text-white font-raleway pl-30 pr-30"
                  id="rs-2-layer-2"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['-20']"
                  data-fontsize="['48']"
                  data-lineheight="['70']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:700; border-radius: 30px;">title
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-center text-black-222" 
                  id="rs-2-layer-3"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['50']"
                  data-fontsize="['16']"
                  data-lineheight="['28']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">sub title
                </div>
              </li>

            </ul>
          </div>
          <!-- end .rev_slider -->
        </div>
        <!-- end .rev_slider_wrapper -->
        <script>
          $(document).ready(function(e) {
            $(".rev_slider").revolution({
              sliderType:"standard",
              sliderLayout: "auto",
              dottedOverlay: "none",
              delay: 5000,
              navigation: {
                  keyboardNavigation: "off",
                  keyboard_direction: "horizontal",
                  mouseScrollNavigation: "off",
                  onHoverStop: "off",
                  touch: {
                      touchenabled: "on",
                      swipe_threshold: 75,
                      swipe_min_touches: 1,
                      swipe_direction: "horizontal",
                      drag_block_vertical: false
                  },
                arrows: {
                  style:"zeus",
                  enable:true,
                  hide_onmobile:true,
                  hide_under:600,
                  hide_onleave:true,
                  hide_delay:200,
                  hide_delay_mobile:1200,
                  tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                  left: {
                    h_align:"left",
                    v_align:"center",
                    h_offset:30,
                    v_offset:0
                  },
                  right: {
                    h_align:"right",
                    v_align:"center",
                    h_offset:30,
                    v_offset:0
                  }
                },
                bullets: {
                  enable:true,
                  hide_onmobile:true,
                  hide_under:600,
                  style:"metis",
                  hide_onleave:true,
                  hide_delay:200,
                  hide_delay_mobile:1200,
                  direction:"horizontal",
                  h_align:"center",
                  v_align:"bottom",
                  h_offset:0,
                  v_offset:30,
                  space:5,
                  tmp:'<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title"></span>'
                }
              },
              responsiveLevels: [1240, 1024, 778],
              visibilityLevels: [1240, 1024, 778],
              gridwidth: [1170, 1024, 778, 480],
              gridheight: [650, 768, 960, 720],
              lazyType: "none",
              parallax: {
                  origo: "slidercenter",
                  speed: 1000,
                  levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                  type: "scroll"
              },
              shadow: 0,
              spinner: "off",
              stopLoop: "on",
              stopAfterLoops: 0,
              stopAtSlide: -1,
              shuffle: "off",
              autoHeight: "off",
              fullScreenAutoWidth: "off",
              fullScreenAlignForce: "off",
              fullScreenOffsetContainer: "",
              fullScreenOffset: "0",
              hideThumbsOnMobile: "off",
              hideSliderAtLimit: 0,
              hideCaptionAtLimit: 0,
              hideAllCaptionAtLilmit: 0,
              debugMode: false,
              fallbacks: {
                  simplifyAll: "off",
                  nextSlideOnWindowFocus: "off",
                  disableFocusListener: false,
              }
            });
          });
        </script>
        <!-- Slider Revolution Ends -->
      </div>
    </section>
@endsection

@section('body')
<section>
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <article class="post pb-30">
              <div class="entry-content">
                <h3 class="entry-title text-uppercase mt-0"><a href="#">Welcome To TAMSYA </a></h3>
                <p>TAMSYA is an independent national organization of Muslim students and youths of Tanzania. 
                  The call of TAMSYA, is in Qur’anic verse “Let their arise out of you a band of people inviting to all that is good, 
                   enjoining what is right, and forbidding what is wrong they are the one to attain felicity”  (Quran 3:104)</p>
                <a href="#" class="pull-right flip text-gray font-13"><i class="fa fa-angle-double-right text-theme-color-2"></i> Read more</a>
                <div class="clearfix"></div>
              </div>
            </article>
            <hr>
            <div class="row">
              
              <div class="col-xs-12 col-sm-6 col-md-6">
                <h4 class="widget-title title-dots mt-30"><span>TAMSYA ACTIVITIES</span></h4>
                @foreach(DB::table('projects')->orderBy('id','DESC')->limit(4)->get() as $project)
                 <article class="post media-post clearfix pb-0 mb-10">
                  <div class="post-right">
                    <h5 class="post-title mt-0 mb-5"><a class="font-13" href="/activities/{{$project->slug}}">{{$project->title}}</a><a href="#" class="post-date mb-0 font-12 pull-right">{{ Carbon::parse($project->created_at)->diffForHumans() }}</a></h5>
                    <p class="post-date mb-0 font-12">{!! str_limit(html_entity_decode($project->description),$limit=110, $end=' ')!!}</p>
                    <a href="/activities/{{$project->slug}}" class="pull-right flip text-gray font-13"><i class="fa fa-angle-double-right text-theme-color-2"></i> Read more</a>
                  </div>
                </article>
                @endforeach
              </div>

              <div class="col-xs-12 col-sm-6 col-md-6">
                <h4 class="widget-title title-dots mt-30"><span>WORD FROM THE TAMSYA PRESIDENT</span></h4>
                 
               <div class="item">
                <div class="testimonial pt-10">
                  <div class="thumb pull-left mb-0 mr-0 pr-20">
                    <img class="img-thumbnail" width="100" alt="" src="images/testimonials/1.jpg">
                  </div>
                  <div class="ml-100 ">
                    <p class="text-black mt-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore. consectetur adipisicing elit. Quas vel sint doloremque</p>
                    <p class="author mt-10">- <span class="text-theme-colored2">RAMADHANI ULENDE,</span> <small><em class="text-gray-lightgray">PRESIDENT</em></small></p>
                  </div>
                </div>
              </div>
              <div class="widget">
                <h4 class="widget-title title-dots mt-30"><span>IMPORTANT LINKS</span></h4>
                <div class="services-list">
                  <ul class="list list-border">
                    <li><a href="#">TAMSYA ONLINE LIBRARY SYSTEM</a></li>
                    <li><a href="#">TAMSYA ONLINE CERTIFICATE APPLICATION</a></li>
                    
                    
                  </ul>
                </div>
              </div>
              </div>
              

            </div>
          </div>
          <div class="col-sm-12 col-md-3">
            <div class="sidebar sidebar-left mt-sm-30">
              <div class="widget">
                <h5 class="widget-title title-dots small"><span>LATEST NEWS</span></h5>
                
                <div class="latest-posts">
                @foreach(DB::table('blogs')->orderBy('id','DESC')->limit(3)->get() as $blog)
                  <article class="post media-post clearfix pb-0 mb-5">
                    <a class="post-thumb" href="/blogs/{{$blog->slug}}"><img src="{{ asset("uploads/".$blog->image)}}" alt=""></a>
                    <div class="post-right">
                      <h5 class="post-title mt-0"><a href="/blogs/{{$blog->slug}}">{{$blog->title}}</a></h5>
                      <p>{!! str_limit(html_entity_decode($blog->body),$limit=100, $end=' ')!!}</p>
                    </div>
                  </article>
                  @endforeach
                </div>
              </div>

              <div class="clearfix"></div>
              <div class="widget">
                <h4 class="widget-title title-dots small"><span >DOWNLOADS</span></h4>
                <hr class="mt-0">
                <ul class="nav nav-pills nav-stacked nav-sidebar">
                  <li><a href="#"><i class="fa fa-file-pdf-o text-theme-colored2"></i> TAMSYA CONSTITUTION</a></li>
                  <li><a href="#"><i class="fa fa-file-pdf-o text-theme-colored2"></i> TAMSYA BROCHURE </a></li>
                  <li><a href="#"><i class="fa fa-file-pdf-o text-theme-colored2"></i> TAMSYA BROCHURE</a></li>
                </ul>
              </div

              <div class="widget">
                <h4 class="widget-title title-dots small"><span>VISITOR COUNTER</span></h4>
                <div class="opening-hours">
                  <ul class="list-border">
                    <li class="clearfix"> <span> TODAY :  </span>
                      <div class="value pull-right"> 2034 </div>
                    </li>
                    <li class="clearfix"> <span> WEEKLY :</span>
                      <div class="value pull-right"> 65401 </div>
                    </li>
                    <li class="clearfix"> <span> MONTHLY : </span>
                      <div class="value pull-right"> 169727 </div>
                    </li>
                    <li class="clearfix"> <span> TOTAL : </span>
                      <div class="value pull-right"> 3478099901 </div>
                    </li>
                  </ul>
                </div>
              </div>
              
              </div>
          </div>
        </div>
      </div>
    </section>
@endsection