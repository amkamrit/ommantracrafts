@extends('admins.User.base')


@section('action-content')

<div class="row">
	<div class="col-md-10">
		<h3>Detail User</h3>
	</div>
	<hr>

</div>
<div class="row">
	<div class="col-md-12">
		<table class="table">
			<thead>
				<tc>
					<th>Sn</th>
					<th>{{$User->id}}</th>
				</tc>
			</thead>
			<tbody>
				<tc>
					<td>User Name </td>
					<td>{{$User->fname}},{{$User->lname}}</td>
				</tc>
			</tbody>
			<tbody>
				<tc>
					<td>User Email </td>
					<td>{{$User->email}}</td>
				</tc>
			</tbody>
			<tbody>
				<tc>
					<td>Current Address </td>
					<td>{{$User->country}},{{$User->city}}</td>
				</tc>
			</tbody>
			
			<tbody>
				<tc>
					<td> Mobile Number </td>
					<td>{{$User->ContactNumber}}</td>
				</tc>
			</tbody>
			
		</table>
		
	</div>
</div>

@endsection