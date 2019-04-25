@extends('admins.shippingAddress.base')

@section('action-content')

<div class="row">
	<div class="col col-sm-12">
		<form action="{{route('countryupdate',$country->id )}}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="form-group">
				<label class="control-label">Weight</label>
				<input type="type" name="country" class="form-control" value="{{$countryPrice->weight}}">
			</div>

			<div class="form-group">
				<label class="control-label">Price</label>
				<input type="type" name="country" class="form-control" value="{{$countryPrice->zone1}}">
			</div>

			
				<button class="btn btn-success">Save</button>
			
		</form>
	</div>
</div>

@endsection