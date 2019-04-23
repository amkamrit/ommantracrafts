@extends('admins.shippingAddress.base')

@section('action-content')

<div class="row">
	<div class="col col-sm-6">
		<h5 align="center" style="color: red">Import Shipping Country</h5>
		<form action="{{route('import')}}" method="POST" enctype="multipart/form-data" >
			{{ csrf_field() }}
			<div class="row">
				<div class="col-sm-6">
					<input type="file" name="file" class="form-control"><br>
					<button class="btn btn-success">Import	</button>
				</div>
			</div>	
		</form>
	</div>
		<div class="col col-sm-6">
			<h5 align="center" style="color: red">Import Shipping Prices</h5>
		<form action="{{route('importprice')}}" method="POST" enctype="multipart/form-data" >
			{{ csrf_field() }}
			<div class="row">
				<div class="col-sm-6">
					<input type="file" name="fileprice" class="form-control"><br>
					<button class="btn btn-success">Import	</button>
				</div>
			</div>	
		</form>
	</div>
</div>
<div class="row">
	<table class="table">
		<thead style="background-color: red">
		<th>
			<td>SN</td>
			<td>Country</td>
			<td>Zone</td>
			<td>Price</td>
			<td>Action</td>
		</th>
		</thead>
		@foreach($data as $datas)
		<tbody>
			
		<th>
			<td>{{$datas->sn}}</td>
			<td>{{$datas->country}}</td>
			<td>
				@if($datas->zone==1)
				Zone 1
				@elseif($datas->zone==2)
				Zone 2
				@elseif($datas->zone==3)
				Zone 3
				@elseif($datas->zone==4)
				Zone 4
				@elseif($datas->zone==5)
				Zone 5
				@elseif($datas->zone==6)
				Zone 6
				@elseif($datas->zone==7)
				Zone 7
				@elseif($datas->zone==8)
				Zone 8
				@endif
			</td>
			<td><a href="{{route('shippingPriceView',$datas->zone)}}" class="btn btn-info">View</a></td>
			<td><button class="btn btn-success">Edit</button> <button class="btn btn-danger">Delete</button></td>
		</th>
		
		</tbody>
		@endforeach
	</table>
	{{ $data->links() }}
</div>


@endsection