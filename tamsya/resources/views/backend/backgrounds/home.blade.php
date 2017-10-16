@extends('layouts.backend')
@section('title')
Backgrounds | Tamsya
@endsection
@section('page-header')
	<!-- Page header -->
	<div class="page-header">
		<div class="breadcrumb-line">
			<ul class="breadcrumb">
				<li><a href="{{url('/admin')}}"><i class="icon-home2 position-left"></i> Home</a></li>
				<li class="active">Tamsya Activities</li>
			</ul>

			<ul class="breadcrumb-elements">
				 <li><a href="{{url('/backgrounds/create')}}"><i class="icon-plus3 position-left"></i> Create</a></li>
				<li><a href="{{url('/backgrounds')}}"><i class=" icon-paragraph-justify3 position-left"></i> List</a></li> 
			</ul>
		</div>
	</div>
	<!-- /page header -->
@endsection
@section('body')
            <div class="panel panel-flat">
					<div class="panel-heading">
						<h5 class="panel-title">List of Tamsya Backgrounds</h5>
						<div class="heading-elements">
							<ul class="icons-list">
		                		<li><a data-action="collapse"></a></li>
		                		<li><a data-action="reload"></a></li>
		                		<li><a data-action="close"></a></li>
		                	</ul>
	                	</div>
					</div>

					<div class="panel-body">
						
					
                    @include('partials.errors')
                      @include('partials.msg')
                        <div class="table-responsive">
                            <table id="mytable" class="table table-bordred table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>background Type</th>
                                    <th>Option</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $x=1; ?>
                                  @foreach($backgrounds as $project)

                                <tr>
                                    <td>{{$x}}</td>
                                    <td>{{$project->name}}</td>
                                    <td>{{$project->type}}</td>
                                    <td>
                                        <p>
                                            <a href="{{'/backgrounds/'.$project->id.'/edit'}}" class="btn btn-success btn-xs" ><span
                                                    class="icon-pencil6"></span></a>
                                        </p>
                                    </td>
                                </tr>
                                <?php $x++; ?>
                                @endforeach

                                </tbody>
                            </table>
                            {{$backgrounds->links()}}
                        </div>
                    </div>  
          </div>
@endsection