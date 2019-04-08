@extends('admins.review.base')

@section('action-content')

<div class="row">
	<div class="col-md-10">
		<h3>All Product Review</h3>
	</div>
	<hr>

</div>
<div class="row">
	<div class="col-md-12">
		<table class="table">
			<thead>
				<th>Sn</th>
				<th>User Name</th>
				<th>Produc Id</th>
				<th>Action</th>
			</thead>
			<tbody>
				@foreach($review as $reviews)

				<tr>
					<th>{{$reviews->id}}</th>
					<td>{{$reviews->user_name}}</td>
					<td>{{$reviews->product_id}}</td>
					<td><a href="{{route('review.show',$reviews->id)}}" style="padding-right: 15px" class="btn btn-primary a-btn-slide-text"> <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
        <span><strong>View</strong></span> </a><br><br>

        			{!! Form::open(['route' => ['category.destroy', $reviews->id], 'method' => 'delete']) !!}

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