<?php
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
$projects = DB::table('projects')->where('type','=','program')->orderBy('id','DESC')->paginate(6);
?>
@extends('layouts.master')
@section('title')
Programs | Tamsya
@endsection
@section('slider')
  <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="/images/bg/slide1.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white">LIST OF TAMSYA PROGRAMS</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection

@section('body')
    <section id="news">
      <div class="container">
        <div class="section-content">
          <div class="row">

          @foreach($projects as $project)
            <div class="col-sm-6 col-md-4">
              <article class="post clearfix mb-30 mb-sm-30">
                <div class="entry-header">
                  <div class="post-thumb thumb"> 
                    <img src="{{ asset("uploads/".$project->image)}}" alt="" class="img-responsive img-fullwidth"> 
                  </div>
                </div>
                <div class="entry-content p-20 pr-10 bg-lighter">
                  <div class="entry-meta media mt-0 no-bg no-border">
                    <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                      <ul>
                        <li class="font-16 text-white font-weight-600 border-bottom">{{Carbon::createFromFormat('Y-m-d H:i:s', $project->created_at)->day}}</li>
                        <li class="font-12 text-white text-uppercase">{{Carbon::createFromFormat('Y-m-d H:i:s', $project->created_at)->month}}</li>
                      </ul>
                    </div>
                    <div class="media-body pl-15">
                      <div class="event-content pull-left flip">
                        <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="/activities/{{$project->slug}}">{{$project->title}}</a></h4>
                        <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-clock-o mr-5 text-theme-colored"></i> {{ Carbon::parse($project->created_at)->diffForHumans() }}</span>                                           
                      </div>
                    </div>
                  </div>
                  <p class="mt-10">{!! str_limit(html_entity_decode($project->description),$limit=150, $end=' ')!!}</p>
                  <a class="btn btn-theme-colored2 btn-sm text-white" href="/activities/{{$project->slug}}"> Read More</a>
                  <div class="clearfix"></div>
                </div>
              </article>
            </div>
           @endforeach


          </div>
        </div>
      </div>
    </section>
@endsection