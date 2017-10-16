@extends('layouts.backend')
@section('title')
Background | Tamsya
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
				<li><a href="{{url('/backgrounds/create')}}"><i class="icon-plus3 position-left"></i> Create</a></li>
				<li><a href="{{url('/backgrounds')}}"><i class=" icon-paragraph-justify3 position-left"></i> List</a></li>
			</ul>
		</div>
	</div>
	<!-- /page header -->
@endsection
@section('')
@section('body')
<!-- Content area -->
    <div class="content">
        @include('partials.errors')
        @include('partials.msg')
        <!-- 2 columns form -->
        <form class="form-horizontal" action="/backgrounds" method="POST" enctype="multipart/form-data">
           {{ csrf_field() }}
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
                        <div class="col-md-12">
                            <fieldset>
                                <legend class="text-semibold"><i class="icon-office position-left"></i> BACKGROUND DETAIL</legend>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">NAME:</label>
                                    <div class="col-md-6">
                                        <input type="text" name="name"  class="form-control" placeholder="Ingiza jina" value="{{ old('name') }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">TYPE OF BACKGROUND:</label>
                                    <div class="col-md-6">
                                        <select  name="type" class="form-control select" >
                                            <option value="">SELECT TAMSYA BACKGROUND</option>
                                            <option value="about_us">About Us</option> 
                                            <option value="privacy_policy">Privacy Policy</option> 
                                            <option value="term_of_use">Term of Use</option>  
                                            <option value="supports">Supports</option> 
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">DESCRIPTION:</label>
                                    <div class="col-md-8">
                                        <textarea class="form-control" id="ckview" name="description" rows="5" column="50">{{old('description')}}</textarea>
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
        <script>
		var ckview = document.getElementById("ckview");
		CKEDITOR.replace(ckview,{
			language:'en-gb'
		});
   </script>
@endsection