@extends('layouts.master')
@section('title')
{{$project ? $project->name :' '}} | Tamsya
@endsection
@section('slider')
  <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="/images/bg/slide1.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white">{{$project ? $project->name :' '}}</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
@section('body')
<section>
      <div class="container">
        <div class="row">
          <div class="col-md-8 blog-pull-right">
            <div class="single-service">
              
              <h3 class="text-theme-colored line-bottom text-theme-colored">{{$project ? $project->name :' '}}</h3>
              <p>{{$project ? $project->description :'NO RESULT FOUND '}}</p>
              
            </div>
          </div>
          <div class="col-sm-12 col-md-4">

           <div class="sidebar sidebar-left mt-sm-30 ml-40">
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
      </div>
    </section>
@endsection