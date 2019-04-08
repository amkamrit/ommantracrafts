@extends('admins.review.base')


@section('action-content')

<div class="row">
	<div class="col-md-10">
		<h3>Show Single Review</h3>
	</div>
	<hr>

</div>
<div class="row">
	<div class="col-md-12">
		<table class="table">
			<thead>
				<tc>
					<th>Sn</th>
					<th>{{$review->id}}</th>
				</tc>
			</thead>
			<tbody>
				<tc>
					<td>Product id </td>
					<td>{{$review->product_id}}</td>
				</tc>
			</tbody>
			<tbody>
				<tc>
					<td>User Name </td>
					<td>{{$review->user_name}}</td>
				</tc>
			</tbody>
			<tbody>
				<tc>
					<td>Description </td>
					<td>{{$review->description}}</td>
				</tc>
			</tbody>
			

			

			</tbody>
			
		</table>
		
	</div>
</div>

@endsection