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
 <div class="row">
            <div class="col-lg-12">
                <div class="panel ">
                    <div class="panel-body">
                      @include('partials.errors')
                      @include('partials.msg')
                        <div class="table-responsive">
                            <table id="mytable" class="table table-bordred table-striped">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Jina Kwa Kifupi</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>country</th>
                                    <th>region</th>
                                    <th colspan="2">Option</th>
                                </tr>
                                </thead>
                                <tbody>
                                  @foreach($settings as $setting)

                                <tr>
                                    <td>{{$setting->title}}</td>
                                    <td>{{$setting->abbr}}</td>
                                    <td>{{$setting->email}}</td>
                                    <td>{{$setting->phone}}</td>
                                    <td>{{$setting->country}}</td>
                                    <td>{{$setting->region}}</td>
                                    <td>
                                        <p>
                                            <a href="{{'/settings/'.$setting->id.'/edit'}}" class="btn btn-success btn-xs" ><span
                                                    class="icon-pencil6"></span></a>
                                        </p>
                                    </td>
                                    
                                </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- second row ends here -->
@endsection