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
        <form class="form-horizontal" action="/settings" method="POST" enctype="multipart/form-data">
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
                                <legend class="text-semibold"><i class="icon-office position-left"></i> MAELEZO</legend>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">JINA:</label>
                                    <div class="col-md-6">
                                        <input type="text" name="title"  class="form-control" placeholder="Ingiza Jina la taasisi" value="{{ old('title') }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">KIFUPI(ABBRIVIATION):</label>
                                    <div class="col-md-6">
                                        <input type="text"  name="abbr"  class="form-control" placeholder="Ingiza Jina la taasisi kwa kifupi" value="{{ old('abbr') }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">SLOGAN:</label>
                                    <div class="col-md-6">
                                        <input type="text" name="slogan"  class="form-control" placeholder="Slogan ya taasisi" value="{{ old('slogan') }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">SIMU:</label>
                                    <div class="col-md-6">
                                        <input type="text" name="phone"  class="form-control" placeholder="Ingiza namba ya simu ya ofisini" value="{{ old('phone') }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">BARUA PEPE:</label>
                                    <div class="col-md-6">
                                        <input type="text" name="email"  class="form-control" placeholder="Ingiza Barua Pepe" value="{{ old('email') }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">NCHI:</label>
                                    <div class="col-md-6">
                                        <input type="text" name="country"  class="form-control" placeholder="Ingiza nchi" value="{{ old('country') }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">JIJI/MKOA:</label>
                                    <div class="col-md-6">
                                        <input type="text" name="region"  class="form-control" placeholder="Ingiza jiji/mkoa" value="{{ old('city') }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">FACEBOOK:</label>
                                    <div class="col-md-6">
                                        <input type="text" name="facebook"  class="form-control" placeholder="Ingiza kiungo cha facebook" value="{{ old('facebook') }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">TWITTER:</label>
                                    <div class="col-md-6">
                                        <input type="text" name="twitter"  class="form-control" placeholder="Ingiza Kiungo cha Twitter" value="{{ old('twitter') }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">INSTAGRAM:</label>
                                    <div class="col-md-6">
                                        <input type="text" name="instagram"  class="form-control" placeholder="Ingiza Kiungo cha Instagram" value="{{ old('instagram') }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">ANWANI YA KAMPUNI:</label>
                                    <div class="col-md-6">
                                <textarea class="form-control" name="address" rows="5">{{ old('address') }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">LOGO YA KAMPUNI:(1MB Max)</label>
                                    <div class="col-md-6">
                                        <input type="file" name="logo" class="file-styled" required>
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