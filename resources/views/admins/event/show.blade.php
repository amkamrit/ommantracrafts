@extends('admins.event.base')


@section('action-content')

<div class="row">
	<div class="col-md-10">
		<h3>Show single Event</h3>
	</div>
	<div class="col-md-2">
		<a href="{{ route('event.create') }}" class="bth bth-lg bth-block bth-primary" style="font-size: 15px;" class="btn btn-primary a-btn-slide-text"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
        <span><strong>Create</strong></span></a>
	</div>
	<hr>

</div>
<div class="row">
	<div class="col-md-12">
		<table class="table">
			<thead>
				<tc>
					<th>Sn</th>
					<th>{{$event->id}}</th>
				</tc>
			</thead>
			<tbody>
				<tc>
					<td>Event Name </td>
					<td>{{$event->event_title}}</td>
				</tc>
			</tbody>
			<tbody>
				<tc>
					<td>Content </td>
					<td>{{$event->event_content}}</td>
				</tc>
			</tbody>
			<tbody>
				<tc>
					<td>Picture </td>
					<td>{{$event->event_image}}</td>
				</tc>
			</tbody>
			

			<tbody>
				
				<td><a href="{{route('event.edit',$event->id)}}" class="btn btn-primary a-btn-slide-text"> <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
        <span><strong>Edit</strong></span> </a></td>
			</tbody>

			</tbody>
			
		</table>
		
	</div>
</div>

@endsection