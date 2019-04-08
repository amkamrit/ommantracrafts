@extends('admins.product.base')

@section('action-content')

<div class="row">
	<div class="col-md-10">
		<h3>All Product</h3>
	</div>
	<div class="col-md-2">
		<a href="{{ route('product_detail.create') }}" class="btn btn-primary a-btn-slide-text" style="font-size: 15px;"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
        <span><strong>Create</strong></span></a>
	</div>
	<hr>

</div>
<div class="row">
	<div class="col-md-12">
		<table class="table">
			<thead>
				<th>Sn</th>
				<th>Product Code</th>
				<th>Selling Price</th>
				<th>Selling Option</th>
				<th>Action</th>
			</thead>
			<tbody>
				@foreach($Product_detail as $Product_details)

				<tr>
					<th>{{$Product_details->id}}</th>
					<td>{{$Product_details->product_code}}</td>
					<td>{{$Product_details->product_sell_price}}</td>
					<td>{{$Product_details->sell_option}}</td>
					<td><a href="{{route('product_detail.show',$Product_details->id)}}" style="padding-right: 15px" class="btn btn-primary a-btn-slide-text"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span><span><strong>View</strong></span></a><a href="{{route('product_detail.edit',$Product_details->id)}}" style="padding-right: 15px" class="btn btn-primary a-btn-slide-text"> <span class="glyphicon glyphicon-edit" aria-hidden="true"></span><span><strong>Edit</strong></span></a></td>
				</tr>
				@endforeach
			</tbody>
			
		</table>
		
	</div>
</div>

@endsection