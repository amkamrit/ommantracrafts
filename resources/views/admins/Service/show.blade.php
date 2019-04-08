@extends('admins.category.base')


@section('action-content')

<div class="row">
	<div class="col-md-10">
		<h3>Show Single Service</h3>
	</div>
	<div class="col-md-2">
		<a href="{{ route('Service.create') }}" class="btn btn-primary a-btn-slide-text" style="font-size: 15px;"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
        <span><strong>Create</strong></span> </a>
	</div>
	<hr>

</div>
<div class="row">
	<div class="col-md-12">
		<table class="table">
			<thead>
				<tc>
					<th>Sn</th>
					<th>{{$service->id}}</th>
				</tc>
			</thead>
			<tbody>
				<tc>
					<td>Category Name </td>
					<td>{{$service->title}}</td>
				</tc>
			</tbody>
			<tbody>
				<tc>
					<td>Category Picture </td>
					<td>{{$service->content}}</td>
				</tc>
			</tbody>
			<tbody>
				
				<td><a href="{{route('Service.edit',$service->id)}}" style="padding-right: 8px;" class="btn btn-primary a-btn-slide-text"> <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
        <span><strong>Edit</strong></span> </a>

        <br><br>


						{!! Form::open(['route' => ['Service.destroy', $service->id], 'method' => 'delete']) !!}

						{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-small']) !!}

						{!! Form::close() !!}
				</td>
			</tbody>

			</tbody>
			
		</table>
		
	</div>
</div>

@endsection