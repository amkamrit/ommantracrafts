@extends('admins.event.base')

@section('action-content')


<div class="row">
	<div class="col-md-10">
		<h3>All Event</h3>
	</div>
	<div class="col-md-2">
		<a href="{{ route('event.create') }}" class="btn btn-primary a-btn-slide-text" style="font-size: 15px;"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
        <span><strong>Create</strong></span></a>
	</div>
	<hr>

</div>
<div class="row">
	<div class="col-md-12">
		<table class="table">
			<thead>
				<th>ID</th>
				<th>Event Name</th>
				<th>Image</th>
			</thead>
			<tbody>
				@foreach($event as $events)

				<tr>
					<td>{{$events->id}}</td>
					<th>{{$events->event_title}}</th>
					<td>{{$events->event_image}}</td>
				<td>
						<a href="{{route('event.show',$events->id)}}" style="margin: 10px;"  class="btn btn-primary a-btn-slide-text">  <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
        <span><strong>View</strong></span></a>
        <a href="{{route('event.edit',$events->id)}}" class="btn btn-primary a-btn-slide-text"> <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
        <span><strong>Edit</strong></span> </a>


						{!! Form::open(['route' => ['event.destroy', $events->id], 'method' => 'delete']) !!}

						{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

						{!! Form::close() !!}


					</td>
					</tr>
				@endforeach
			</tbody>
			
		</table>
		
	</div>
</div>


@endsection