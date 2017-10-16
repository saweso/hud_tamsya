<?php
use Illuminate\Support\Facades\DB;
?>
@extends('layouts.backend')
@section('title')
Setting | Tamsya
@endsection
@section('page-header')
	<!-- Page header -->
	<div class="page-header">
		<div class="breadcrumb-line">
			<ul class="breadcrumb">
				<li><a href="{{url('/admin')}}"><i class="icon-home2 position-left"></i> Home</a></li>
				<li class="active">Setting</li>
			</ul>

			<ul class="breadcrumb-elements">
				<li><a href="{{url('/settings/create')}}"><i class="icon-plus3 position-left"></i> Create</a></li>
				<li><a href="{{url('/settings')}}"><i class=" icon-paragraph-justify3 position-left"></i> List</a></li>
			</ul>
		</div>
	</div>
	<!-- /page header -->
@endsection
@section('body')
<!-- Content area -->
    <div class="content">
        @include('partials.errors')
        @include('partials.msg')
        <!-- 2 columns form -->
        <form class="form-horizontal" action="/settings/{{$setting->id}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{method_field('PUT')}}
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li><a data-action="collapse"></a></li>
                            <li><a data-action="reload"></a></li>
                            <li><a data-action="close"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-8">
                            <fieldset>
                                <legend class="text-semibold"><i class="icon-office position-left"></i> MAELEZO</legend>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">JINA:</label>
                                    <div class="col-md-6">
                                        <input type="text" name="title"  class="form-control" placeholder="Ingiza Jina la taasisi" value="{{ $setting->title }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">KIFUPI(ABBRIVIATION):</label>
                                    <div class="col-md-6">
                                        <input type="text" name="abbr"  class="form-control" placeholder="Ingiza Jina la taasisi kwa kifupi" value="{{ $setting->abbr }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">SLOGAN:</label>
                                    <div class="col-md-6">
                                        <input type="text" name="slogan"  class="form-control" placeholder="Slogan ya taasisi" value="{{ $setting->slogan }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">SIMU:</label>
                                    <div class="col-md-6">
                                        <input type="text" name="phone"  class="form-control" placeholder="Ingiza namba ya simu ya ofisini" value="{{ $setting->phone }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">BARUA PEPE:</label>
                                    <div class="col-md-6">
                                        <input type="text" name="email"  class="form-control" placeholder="Ingiza Barua Pepe" value="{{ $setting->email }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">NCHI:</label>
                                    <div class="col-md-6">
                                        <input type="text" name="country"  class="form-control" placeholder="Ingiza nchi" value="{{ $setting->country }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">JIJI/MKOA:</label>
                                    <div class="col-md-6">
                                        <input type="text" name="region"  class="form-control" placeholder="Ingiza jiji/mkoa" value="{{ $setting->region }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">FACEBOOK:</label>
                                    <div class="col-md-6">
                                        <input type="text" name="facebook"  class="form-control" placeholder="Ingiza kiungo cha facebook" value="{{ $setting->facebook }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">TWITTER:</label>
                                    <div class="col-md-6">
                                        <input type="text" name="twitter"  class="form-control" placeholder="Ingiza Kiungo cha Twitter" value="{{ $setting->twitter }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">INSTAGRAM:</label>
                                    <div class="col-md-6">
                                        <input type="text" name="instagram"  class="form-control" placeholder="Ingiza Kiungo cha Instagram" value="{{ $setting->instagram }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">ANWANI YA KAMPUNI:</label>
                                    <div class="col-md-6">
                                <textarea class="form-control" name="address" rows="5">{{ $setting->address }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">LOGO YA KAMPUNI:(1MB Max)</label>
                                    <div class="col-md-6">
                                        <input type="file" name="logo" class="file-styled">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label"></label>
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-primary">{{substr(Route::currentRouteName(),9)}}<i class="icon-arrow-right14 position-right"></i></button>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>

                </div>
            </div>
        </form>
        <!-- /2 columns form -->
        </div>
@endsection