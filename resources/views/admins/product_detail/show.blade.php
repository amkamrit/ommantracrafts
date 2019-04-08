@extends('admins.product_detail.base')


@section('action-content')

<div class="row">
	<div class="col-md-10">
		<h3>Show Single Product</h3>
	</div>
	<hr>

</div>
<div class="row">
	<div class="col-md-12">
		<table class="table">
			<thead>
				<tc>
					<th>Sn</th>
					<th>{{$product_detail->id}}</th>
				</tc>
			</thead>
			<tbody>
				<tc>
					<td>Category Id </td>
					<td>{{$product_detail->products_id	}}</td>
				</tc>
			</tbody>
			<tbody>
				<tc>
					<td>Product Long description </td>
					<td>{{$product_detail->product_long_description}}</td>
				</tc>
			</tbody>
			<tbody>
				<tc>
					<td> Product Code </td>
					<td>{{$product_detail->product_code}}</td>
				</tc>
			</tbody>
			<tbody>
				<tc>
					<td> Product Price </td>
					<td>{{$product_detail->product_sell_price}}</td>
				</tc>
			</tbody>

			<tbody>
				<tc>
					<td> Product Price </td>
					<td>{{$product_detail->product_type}}</td>
				</tc>
			</tbody>

			<tbody>
				<tc>
					<td> Product Price </td>
					<td>{{$product_detail->slog}}</td>
				</tc>
			</tbody>
			<tbody>
				<tc>
					<td> Product Price </td>
					<td>{{$product_detail->sell_option}}</td>
				</tc>
			</tbody>			

			<tbody>
				
				<td><a href="{{route('product_detail.edit',$product_detail->id)}}" style="padding-right: 8px;" class="btn btn-primary a-btn-slide-text"> <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
        <span><strong>Edit</strong></span></a>
        <br><br>


						{!! Form::open(['route' => ['product_detail.destroy', $product_detail->id], 'method' => 'delete']) !!}

						{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-small']) !!}

						{!! Form::close() !!}
				</td>
			</tbody>

			</tbody>
			
		</table>
		
	</div>
</div>

@endsection