@extends('layouts.backend')
@section('title')
Leaders | Tamsya
@endsection
@section('page-header')
	<!-- Page header -->
	<div class="page-header">
		<div class="breadcrumb-line">
			<ul class="breadcrumb">
				<li><a href="{{url('/admin')}}"><i class="icon-home2 position-left"></i> Home</a></li>
				<li class="active">Tamsya Leaders</li>
			</ul>

			<ul class="breadcrumb-elements">
				 <li><a href="{{url('/leaders/create')}}"><i class="icon-plus3 position-left"></i> Create</a></li>
				<li><a href="{{url('/leaders')}}"><i class=" icon-paragraph-justify3 position-left"></i> List</a></li> 
			</ul>
		</div>
	</div>
	<!-- /page header -->
@endsection
@section('body')
            <div class="panel panel-flat">
					<div class="panel-heading">
						<h5 class="panel-title">List of Tamsya Leaders</h5>
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
                                    <th>Jina</th>
                                    <th>Cheo</th>
                                    <th>Aina ya Uongozi</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Option</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $x=1; ?>
                                  @foreach($leaders as $leader)

                                <tr>
                                    <td>{{$x}}</td>
                                    <td>{{$leader->first_name}} {{$leader->middle_name}} {{$leader->last_name}}</td>
                                    <td>{{$leader->cheo}}</td>
                                    <td>{{$leader->category}}</td>
                                    <td>{{$leader->mobile}}</td>
                                    <td>{{$leader->email}}</td>
                                    <td>
                                        <p>
                                            <a href="{{'/leaders/'.$leader->email.'/edit'}}" class="btn btn-success btn-xs" ><span
                                                    class="icon-pencil6"></span></a>
                                        </p>
                                    </td>
                                </tr>
                                <?php $x++; ?>
                                @endforeach

                                </tbody>
                            </table>
                            {{$leaders->links()}}
                        </div>
                    </div>  
          </div>
@endsection