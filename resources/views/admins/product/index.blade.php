@extends('admins.product.base')

@section('action-content')

<div class="row">
	<div class="col-md-10">
		<h3>All Product</h3>
	</div>
	<div class="col-md-2">
		<a href="{{ route('product.create') }}" class="btn btn-primary a-btn-slide-text" style="font-size: 15px;"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
        <span><strong>Create</strong></span></a>
	</div>
	<hr>

</div>
<div class="row">
	<div class="col-md-12">
		<table class="table">
			<thead>
				<th>Sn</th>
				<th>Product Name</th>
				<th>Action</th>
			</thead>
			<tbody>
				@foreach($product as $products)

				<tr>
					<th>{{$products->id}}</th>
					<td>{{$products->product_name}}</td>
					<td><a href="{{route('product.show',$products->id)}}" style="padding-right: 15px" class="btn btn-primary a-btn-slide-text"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span><span><strong>View</strong></span></a><a href="{{route('product.edit',$products->id)}}" style="padding-right: 15px" class="btn btn-primary a-btn-slide-text"> <span class="glyphicon glyphicon-edit" aria-hidden="true"></span><span><strong>Edit</strong></span>  </a>
						{!! Form::open(['route' => ['product.destroy', $products->id], 'method' => 'delete']) !!}

						{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

						{!! Form::close() !!}
						<!-- <a href="{{route('product_detail.index')}}" style="padding-right: 15px" class="btn btn-primary a-btn-slide-text"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
        <span><strong>Detail</strong></span></a> -->
        <a href="{{route('featureImage.index')}}" style="padding-right: 15px" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-picture"></span>Add Feature Image </a></td>

				</tr>
				@endforeach
			</tbody>
			
		</table>
		
	</div>
</div>

@endsection