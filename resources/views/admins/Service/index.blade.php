@extends('admins.Service.base')

@section('action-content')

<div class="row">
	<div class="col-md-10">
		<h3>All Serivces</h3>
	</div>
	<div class="col-md-2">
		<a href="{{ route('Service.create') }}" class="btn btn-primary a-btn-slide-text" style="font-size: 15px;"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
        <span><strong>Create</strong></span></a>

	</div>
	<hr>

</div>
<div class="row">
	<div class="col-md-12">
		<table class="table">
			<thead>
				<th>Sn</th>
				<th>Service Title</th>
				<th>Action</th>
			</thead>
			<tbody>
				@foreach($service as $services)

				<tr>
					<th>{{$services->id}}</th>
					<td>{{$services->title}}</td>
					<td><a href="{{route('Service.show',$services->id)}}" style="padding-right: 15px" class="btn btn-primary a-btn-slide-text"> <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
        <span><strong>View</strong></span></a><a href="{{route('Service.edit',$services->id)}}"  style="padding-right: 15px" class="btn btn-primary a-btn-slide-text"> <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
        <span><strong>Edit</strong></span></a>


        	{!! Form::open(['route' => ['Service.destroy', $services->id], 'method' => 'delete']) !!}

						{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-small']) !!}

						{!! Form::close() !!}
    </td>

				</tr>
				@endforeach
			</tbody>
			
		</table>
		
	</div>
</div>

@endsection