@extends('admins.shippingAddress.base')

@section('action-content')

<div class="row">
	<table class="table">
		<thead style="background-color: red">
		<th>
			<td>SN</td>
			<td>Weight</td>
			<td>Price</td>
			<td>Action</td>
		</th>
		</thead>
		@foreach($data as $datas)
		<tbody>	
		<th>
			<td>{{$datas->id}}</td>
			<td>{{$datas->weight}}</td>
			<td>
				@if($zoneid==1)
				{{$datas->zone1}}
				@elseif($zoneid==2)
				{{$datas->zone2}}
				@elseif($zoneid==3)
				{{$datas->zone3}}
				@elseif($zoneid==4)
				{{$datas->zone4}}
				@elseif($zoneid==5)
				{{$datas->zone5}}
				@elseif($zoneid==6)
				{{$datas->zone6}}
				@elseif($zoneid==7)
				{{$datas->zone7}}
				@elseif($zoneid==8)
				{{$datas->zone8}}
				@endif
			</td>
			<td><a  href="{{route('ShippingPriceEdit', $datas->id)}}" class="btn btn-success" disabled>Edit</a> <button class="btn btn-danger" disabled>Delete</button></td>
		</th>
		
		</tbody>
		@endforeach

	</table>
	
</div>
{{ $data->links() }}

@endsection