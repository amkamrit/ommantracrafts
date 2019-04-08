@extends('admins.User.base')

@section('action-content')

<div class="row">
	<div class="col-md-10">
		<h3>All Users</h3>
	</div>
	<hr>

</div>
<div class="row">
	<div class="col-md-12">
		<table class="table">
			<thead>
				<th>Sn</th>
				<th> User Name</th>
				<th>User Email</th>
				<th>Action</th>
			</thead>
			<tbody>
				@foreach($User as $Users)

				<tr>
					<th>{{$Users->id}}</th>
					<td>{{$Users->name}}</td>
					<td>{{$Users->email}}</td>
					<td>



						<a href="{{route('User.show',$Users->id)}}" style="margin: 10px;"  class="btn btn-primary a-btn-slide-text">  <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
        <span><strong>View Detail</strong></span></a>


						{!! Form::open(['route' => ['User.destroy', $Users->id], 'method' => 'delete']) !!}

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