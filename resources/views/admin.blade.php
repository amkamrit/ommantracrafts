@include('admins.admin.app')
<div class="container" style="width: 1000px">
	<div class="row" style="background-color: #D9D2D2">
	
<div class="col-sm-6">
	<h3 style="color: #4FAF0D;" align="center">New Customer</h3>
<table class="table">
			<thead>
				<th>Name</th>
				<th> Email</th>
				<th>Address</th>
			</thead>
			<tbody>
				@foreach($Customer as $Customers)

				<tr>
					<th>{{$Customers->fname}}  {{$Customers->lname}}</th>
					<td>{{$Customers->email}}</td>
					<td>{{$Customers->country}}</td>

				</tr>
				@endforeach
			</tbody>

		</table>
		<a href="" class="btn btn-success" style="margin-left: 200px;" >See More..</a>

</div>
<div class="col-sm-6">
	<h3 style="color: #4FAF0D;" align="center">New Order</h3>
	<table class="table" style="background-color:  #C5C7C4">
			<thead>
				<th>Name</th>
				<th> Status</th>
				<th>Price</th>
			</thead>
			<tbody>
				@foreach($OrderList as $OrderLists)

				<tr>
					<th>{{$OrderLists->usersId}}</th>
					<td>{{$OrderLists->status}}</td>
					<td>{{$OrderLists->totalPrice}}</td>

				</tr>
				@endforeach
			</tbody>

		</table>
		<a href="" class="btn btn-success" style="margin-left: 200px;" >See More..</a>
</div>
</div>
<hr>

<div class="row" style="background-color: #D9D2D2">
	
<div class="col-sm-6">
	<h3 style="color: #4FAF0D;" align="center">Main Category List</h3>
	<table class="table">
			<thead>
				<th>Sn</th>
				<th>Title</th>
			</thead>
			<tbody>
				@foreach($Category as $Categorys)

				<tr>
					<th>{{$Categorys->id}}</th>
					<td>{{$Categorys->category_name}}</td>

				</tr>
				@endforeach
			</tbody>

		</table>
		<a href="" class="btn btn-success" style="margin-left: 200px;" >See More..</a>

</div>
<div class="col-sm-6">
	<h3 style="color: #4FAF0D;" align="center">Product Review</h3>
	

		<table class="table">
			<thead>
				<th>User Id</th>
				<th>Product Name</th>
			</thead>
			<tbody>
				@foreach($revies as $reviess)

				<tr>
					<th>{{$reviess->user_name}}</th>
					<td>{{$reviess->product_id}}</td>

				</tr>
				@endforeach
			</tbody>

		</table>
		<a href="" class="btn btn-success" style="margin-left: 200px;" >See More..</a>


</div>
</div>
<div class="row" style="background-color: #D9D2D2">
	
<div class="col-sm-12">
	<h3 style="color: #4FAF0D;" align="center">Product List</h3>
	<ul class="list-group">
			<table class="table">
			<thead>
				<th>Name</th>
				<th>Price</th>
				<th>Code</th>
			</thead>
			<tbody>
				@foreach($product as $products)

				<tr>
					<th>{{$products->product_name}}</th>
					<td>${{$products->product_normal_price}}</td>
					<td>{{$products->product_code}}</td>

				</tr>
				@endforeach
			</tbody>

		</table>
		<a href="" class="btn btn-success" style="margin-left: 200px;" >See More..</a>

</div>

</div>



