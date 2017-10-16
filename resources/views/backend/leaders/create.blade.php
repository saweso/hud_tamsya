@extends('layouts.backend')
@section('title')
Leader | Tamsya
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
				<li><a href="{{url('/leaders/create')}}"><i class="icon-plus3 position-left"></i> Create</a></li>
				<li><a href="{{url('/leaders')}}"><i class=" icon-paragraph-justify3 position-left"></i> List</a></li>
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
        <form class="form-horizontal" action="/leaders" method="POST" enctype="multipart/form-data">
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
                                <legend class="text-semibold"><i class="icon-office position-left"></i> TAARIFA ZA KIONGOZI</legend>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">JINA LA KWANZA:</label>
                                    <div class="col-md-6">
                                        <input type="text" name="first_name"  class="form-control" placeholder="Ingiza Jina la kwanza" value="{{ old('first_name') }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">JINA LA KATI:</label>
                                    <div class="col-md-6">
                                        <input type="text" name="middle_name"  class="form-control" placeholder="Ingiza Jina la Kati" value="{{ old('middle_name') }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">JINA LA MWISHO:</label>
                                    <div class="col-md-6">
                                        <input type="text" name="last_name"  class="form-control" placeholder="Ingiza Jina la Mwisho" value="{{ old('last_name') }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">CHEO:</label>
                                    <div class="col-md-6">
                                        <input type="text"  name="cheo"  class="form-control" placeholder="Ingiza cheo cha kiongozi" value="{{ old('cheo') }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">NAMBA YA SIMU:</label>
                                    <div class="col-md-6">
                                        <input type="text"  name="mobile"  class="form-control" placeholder="Ingiza namba ya simu" value="{{ old('mobile') }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">BARUA PEPE:</label>
                                    <div class="col-md-6">
                                        <input type="text"  name="email"  class="form-control" placeholder="Ingiza barua pepe" value="{{ old('email') }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">AINA YA UONGOZI:</label>
                                    <div class="col-md-6">
                                        <select  name="category" class="form-control select" >
                                            <option value="">CHAGUA AINA YA UONGOZI</option>
                                            <option value="executive_member">Exacutive Member</option> 
                                            <option value="board_member">Board Member</option> 
                                            <option value="secretariety">Secretariety</option>  
                                        </select>
                                    </div>
                                </div>

                                
                                <div class="form-group">
                                    <label class="col-md-3 control-label">PICHA YA KIONGOZI:(1MB Max)</label>
                                    <div class="col-md-6">
                                        <input type="file" name="image" class="file-styled">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label"></label>
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-primary">{{substr(Route::currentRouteName(),8)}}<i class="icon-arrow-right14 position-right"></i></button>
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