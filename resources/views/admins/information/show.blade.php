@extends('admins.information.base')


@section('action-content')

<div class="row">
	<div class="col-md-10">
		<h3>Information</h3>
	</div>
	<div class="col-md-2">
		<a href="{{ route('information.create') }}" class="bth bth-lg bth-block bth-primary" style="font-size: 15px;">Enter a new Information</a>
	</div>
	<hr>

</div>
<div class="row">
	<div class="col-md-12">
		<table class="table">
			<thead>
				<tc>
					<th>Sn</th>
					<th>{{$information->id}}</th>
				</tc>
			</thead>
			<tbody>
				<tc>
					<td>Company Name </td>
					<td>{{$information->company_name}}</td>
				</tc>
			</tbody>

			<tbody>
				<tc>
					<td> Email  </td>
					<td>{{$information->email}}</td>
				</tc>
			</tbody>
			
			<tbody>
				<tc>
					<td>Website Url </td>
					<td>{{$information->website_url}}</td>
				</tc>
			</tbody>
			<tbody>
				<tc>
					<td>Contact Number </td>
					<td>{{$information->contact_number}}</td>
				</tc>
			</tbody>
			<tbody>
				<tc>
					<td> Mobile Number </td>
					<td>{{$information->mobile_number}}</td>
				</tc>
			</tbody>
			
			<tbody>
				<tc>
					<td>Location </td>
					<td>{{$information->location}}</td>
				</tc>
			</tbody>
			<tbody>
				<tc>
					<td>Facebook Url </td>
					<td>{{$information->facebook_url}}</td>
				</tc>
			</tbody>
			<tbody>
				<tc>
					<td> Twitter Url </td>
					<td>{{$information->twitter_url}}</td>
				</tc>
			</tbody>
			<tbody>
				<tc>
					<td> Instagram Url </td>
					<td>{{$information->instagram}}</td>
				</tc>
			</tbody>
			


			<tbody>
				
				<td><a href="{{route('information.edit',$information->id)}}" style="padding-right: 8px">Edit</a><a href="" style="padding-right: 8px">Delete</a></td>
			</tbody>

			</tbody>
			
		</table>
		
	</div>
</div>

@endsection