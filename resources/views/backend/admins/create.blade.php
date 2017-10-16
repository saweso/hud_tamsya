@extends('layouts.backend')
@section('title')
Users | Tamsya
@endsection
@section('page-header')
	<!-- Page header -->
	<div class="page-header">
		<div class="breadcrumb-line">
			<ul class="breadcrumb">
				<li><a href="{{url('/admin')}}"><i class="icon-home2 position-left"></i> Home</a></li>
				<li class="active">Users</li>
			</ul>

			<ul class="breadcrumb-elements">
				<li><a href="{{url('/admins/create')}}"><i class="icon-plus3 position-left"></i> Create</a></li>
				<li><a href="{{url('/admins')}}"><i class=" icon-paragraph-justify3 position-left"></i> List</a></li>
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
        <form class="form-horizontal" action="/admins" method="POST" enctype="multipart/form-data">
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
                                <legend class="text-semibold"><i class="icon-office position-left"></i> USERS DETAILS</legend>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">JINA:</label>
                                    <div class="col-md-6">
                                        <input type="text" name="name"  class="form-control" placeholder="name" value="{{ old('name') }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">MOBILE:</label>
                                    <div class="col-md-6">
                                        <input type="text"  name="mobile"  class="form-control" placeholder="Mobile" value="{{ old('mobile') }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">EMAIL:</label>
                                    <div class="col-md-6">
                                        <input type="text" name="email"  class="form-control" placeholder="Email" value="{{ old('slogan') }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">PASSWORD:</label>
                                    <div class="col-md-6">
                                        <input type="password" name="password"  class="form-control" placeholder="Enter Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">CONFIRM PASSWORD:</label>
                                    <div class="col-md-6">
                                        <input type="password" name="password_confirmation"  class="form-control" placeholder="Enter Confirm Password" >
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-md-3 control-label"></label>
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-primary">{{substr(Route::currentRouteName(),7)}}<i class="icon-arrow-right14 position-right"></i></button>
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