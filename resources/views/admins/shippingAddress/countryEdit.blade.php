@extends('admins.shippingAddress.base')

@section('action-content')

<div class="row">
	<div class="col col-sm-12">
		<form action="{{route('countryupdate',$country->id )}}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="form-group">
				<label class="control-label">Country</label>
				<input type="type" name="country" class="form-control" value="{{$country->country}}">
			</div>
			<div class="form-group"><label class="control-label">Zone</label>
				<select name="zone" class="form-control">
					<option value="{{$country->zone}}">Zone {{$country->zone}}</option>
					<option disabled>Select Zone</option>
					<option value="1">Zone 1</option>
					<option value="2">Zone 2</option>
					<option value="3">Zone 3</option>
					<option value="4">Zone 4</option>
					<option value="5">Zone 5</option>
					<option value="6">Zone 6</option>
					<option value="7">Zone 7</option>
					<option value="8">Zone 8</option>
				</select>
			</div>
			
				<button class="btn btn-success">Save</button>
			
		</form>
	</div>
</div>

@endsection