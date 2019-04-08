@extends('admins.category.base')

@section('action-content')

<div class="row">
	<div class="col-md-10">
		<h3>All Category</h3>
	</div>
	<div class="col-md-2">
		<a href="{{ route('information.create') }}" class="btn btn-primary a-btn-slide-text" style="font-size: 15px;"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
        <span><strong>Create</strong></span></a>
	</div>
	<hr>

</div>
<div class="row">
	<div class="col-md-12">
		<table class="table">
			<thead>
				<th>Company Name</th>
				<th>Wbsite Url</th>
				<th>Contact Numaber</th>
				<th>Mobline Number</th>
			</thead>
			<tbody>
				@foreach($information as $informations)

				<tr>
					<td>{{$informations->company_name}}</td>
					<th>{{$informations->website_url}}</th>
					<td>{{$informations->contact_number}}</td>
					<td>{{$informations->mobile_number}}</td>
					

				</tr>
				@endforeach
			</tbody>
			
		</table>
		
	</div>
</div>

@endsection