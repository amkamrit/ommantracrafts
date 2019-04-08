@extends('admins.OrderList.base')

@section('action-content')

<div class="row">
	<div class="col-md-10">
		<h3>All Order</h3>
	</div>
	<hr>

</div>
<div class="row">
	<div class="col-md-12">
		<table class="table">
			<thead>
				<th>Sn</th>
				<th>User Id</th>
				<th>Order Items</th>
				<th>Total Price</th>
				<th>Status</th>
			</thead>
			<tbody>
				@foreach($OrderList as $OrderLists)

				<tr>
					<th>{{$OrderLists->id}}</th>
					<td>{{$OrderLists->usersId}}</td>

					@foreach($OrderLists->productList->items as $item)

					<th>
						{{$item['item']['product_name']}} | {{$item['qty']}} <br>
					</th>

					@endforeach

					<td>{{$OrderLists->totalPrice}}</td>
					<td>{{$OrderLists->status}}</td>
					<td>


							<a href="{{route('OrderList.show',$OrderLists->id)}}" style="margin: 10px;"  class="btn btn-primary a-btn-slide-text">  <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
        <span><strong>View</strong></span></a>
        <a href="{{route('OrderList.edit',$OrderLists->id)}}" class="btn btn-primary a-btn-slide-text"> <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
        <span><strong>Update</strong></span> </a> <a href="{{route('Payment.index')}}" style="margin: 10px;"  class="btn btn-primary a-btn-slide-text">  <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
        <span><strong>View Payment</strong></span></a>


						{!! Form::open(['route' => ['OrderList.destroy', $OrderLists->id], 'method' => 'delete']) !!}

						{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

						{!! Form::close() !!}

					</td>

				</tr>
				@endforeach
			</tbody>
			
		</table>
		
	</div>
</div>

@endsection