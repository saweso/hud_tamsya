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
                                    <th>mobile</th>
                                    <th>Email</th>
                                    <th colspan="2">Option</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $x=1; ?>
                                  @foreach($admins as $admin)

                                <tr>
                                    <td>{{$x}}</td>
                                    <td>{{$admin->name}}</td>
                                    <td>{{$admin->mobile}}</td>
                                    <td>{{$admin->email}}</td>
                                    <td>
                                        <p>
                                            <a href="{{'/admins/'.$admin->id.'/edit'}}" class="btn btn-success btn-xs" ><span
                                                    class="icon-pencil6"></span></a>
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            <a href="{{'/admins/'.$admin->id.'/edit'}}" class="btn btn-danger btn-xs" ><span
                                                    class="icon-bin2"></span></a>
                                        </p>
                                    </td>
                                    
                                </tr>
                                <?php $x++; ?>
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