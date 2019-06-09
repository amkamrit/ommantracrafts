@extends('admins.category.base')


@section('action-content')

<div class="row">
	<div class="col-md-10">
		<h3>Show Single Product</h3>
	</div>
	<div class="col-md-2">
		<a href="{{ route('product.create') }}" class="btn btn-primary a-btn-slide-text" style="font-size: 15px;"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
        <span><strong>Create</strong></span> </a>
	</div>
	<hr>

</div>
<div class="row">
	<div class="col-md-12">
		<table class="table">
			<thead>
				<tc>
					<th>Sn</th>
					<th>{{$product->id}}</th>
				</tc>
			</thead>
			<tbody>
				<tc>
					<td>Category Name </td>
					<td>{{$product->product_name}}</td>
				</tc>
			</tbody>
			<tbody>
				<tc>
					<td>Category Picture </td>
					<td>{{$product->categories_id}}</td>
				</tc>
			</tbody>
			<tbody>
				<tc>
					<td> Category Description </td>
					<td>{{$product->sub_categories_id}}</td>
				</tc>
			</tbody>
			<tbody>
				<tc>
					<td> Price </td>
					<td>Rs.{{$product->product_normal_price}}</td>
				</tc>
			</tbody>

			<tbody>
				<tc>
					<td>Product Long description </td>
					<td>{{$product->product_long_description}}</td>
				</tc>
			</tbody>
			<tbody>
				<tc>
					<td> Product Code </td>
					<td>{{$product->product_code}}</td>
				</tc>
			</tbody>
			<tbody>
				<tc>
					<td> Product Price </td>
					<td>{{$product->product_sell_price}}</td>
				</tc>
			</tbody>

			<tbody>
				<tc>
					<td> Product Price </td>
					<td>{{$product->product_type}}</td>
				</tc>
			</tbody>

			<tbody>
				<tc>
					<td> Product Price </td>
					<td>{{$product->slog}}</td>
				</tc>
			</tbody>

			<tbody>
				<tc>
					<td> Youtube URL </td>
					<td>{{$product->youtubeurl}}</td>
				</tc>
			</tbody>
			<tbody>
				<tc>
					<td> Product Price </td>
					<td>{{$product->sell_option}}</td>
				</tc>
			</tbody>			

			

			<tbody>
				
				<td><a href="{{route('product.edit',$product->id)}}" style="padding-right: 8px;" class="btn btn-primary a-btn-slide-text"> <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
        <span><strong>Edit</strong></span> </a>
<!-- <a href="{{route('product_detail.edit', $product->id)}}" style="padding-right: 8px;" class="btn btn-primary a-btn-slide-text"> <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
        <span><strong>View Detail..</strong></span> </a> -->
        <br><br>


						{!! Form::open(['route' => ['category.destroy', $product->id], 'method' => 'delete']) !!}

						{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-small']) !!}

						{!! Form::close() !!}
				</td>
			</tbody>

			</tbody>
			
		</table>
		
	</div>
</div>

@endsection