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
					<input type="file" name="file" class="form-control"><br>
					<button class="btn btn-success">Import	</button>
				</div>
			</div>	
		</form>
	</div>
</div>


@endsection