@extends('admins.OrderList.base')


@section('action-content')

<div class="row">
	<div class="col-md-10">
		<h3>Single Order List</h3>
	</div>
	<hr>

</div>
<div class="row">
	<div class="col-md-12">
		<table class="table">
			<thead>
				<tc>
					<th>Sn</th>
					<th>{{$OrderList->id}}</th>
				</tc>
			</thead>
			<tbody>
				<tc>
					<td>User Name </td>
					<td>{{$OrderList->usersId}}</td>
				</tc>
			</tbody>
			<tbody>
				<tc>
					<td>Product List </td>
					
					<td>{{$OrderList->productList}}</td>
				</tc>
			</tbody>
			<tbody>
				<tc>
					<td> Total Price </td>
					<td>{{$OrderList->totalPrice}}</td>
				</tc>
			</tbody>
			<tbody>
				<tc>
					<td> Status </td>
					<td>{{$OrderList->status}}</td>
				</tc>
			</tbody>

			<tbody>
				
				<td></a>
        <a href="{{route('OrderList.edit',$OrderList->id)}}" class="btn btn-primary a-btn-slide-text"> <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
        <span><strong>Update</strong></span> </a></td>
			</tbody>

			</tbody>
			
		</table>
		
	</div>
</div>

@endsection