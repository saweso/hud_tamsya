@extends('layouts.backend')
@section('title')
contacted Us | Tamsya
@endsection
@section('page-header')
	<!-- Page header -->
	<div class="page-header">
		<div class="breadcrumb-line">
			<ul class="breadcrumb">
				<li><a href="{{url('/admin')}}"><i class="icon-home2 position-left"></i> Home</a></li>
				<li class="active">contacts</li>
			</ul>

			<ul class="breadcrumb-elements">
				<!-- <li><a href="{{url('/admins/create')}}"><i class="icon-plus3 position-left"></i> Create</a></li>
				<li><a href="{{url('/admins')}}"><i class=" icon-paragraph-justify3 position-left"></i> List</a></li> -->
			</ul>
		</div>
	</div>
	<!-- /page header -->
@endsection
@section('body')
            <div class="panel panel-flat">
					<div class="panel-heading">
						<h5 class="panel-title">List of people contacted us</h5>
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
                                    <th>Name</th>
                                    <th>mobile</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $x=1; ?>
                                  @foreach($contacts as $contact)

                                <tr>
                                    <td>{{$x}}</td>
                                    <td>{{$contact->name}}</td>
                                    <td>{{$contact->mobile}}</td>
                                    <td>{{$contact->email}}</td>
                                    <td>{{$contact->message}}</td>
                                    
                                </tr>
                                <?php $x++; ?>
                                @endforeach

                                </tbody>
                            </table>
                            {{$contacts->links()}}
                        </div>
                    </div>  
          </div>
@endsection