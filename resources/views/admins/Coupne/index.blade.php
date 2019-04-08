@extends('admins.event.base')

@section('action-content')


<div class="row">
	<div class="col-md-10">
		<h3>All Event</h3>
	</div>
	<div class="col-md-2">
		<a href="{{ route('coupne.create') }}" class="btn btn-primary a-btn-slide-text" style="font-size: 15px;"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
        <span><strong>Create</strong></span></a>
	</div>
	<hr>

</div>
<div class="row">
	<div class="col-md-12">
		<table class="table">
			<thead>
				<th>ID</th>
				<th>Coupne Name</th>
				<th>Type</th>
				<th>Price</th>
				<th>Expire Date</th>
				<th>Action</th>
			</thead>
			@foreach($coupnesItems as $coupnesItem)
			<tr>
				<td>{{$coupnesItem->id}}</td>
				<td>{{$coupnesItem->name}}</td>
				<td>{{$coupnesItem->type}}</td>
				<td>{{$coupnesItem->price}}</td>
				<td>{{$coupnesItem->expire_date}}</td>
				<td></td>
			</tr>

			@endforeach
			
		</table>
		
	</div>
</div>


@endsection