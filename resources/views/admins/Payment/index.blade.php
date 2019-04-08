@extends('admins.OrderList.base')

@section('action-content')
<div class="row">
	<div class="col-md-10">
		<h3>All Payment</h3>
	</div>
	<hr>

</div>
<div class="row">
	<div class="col-md-12">
		<table class="table">
			<thead>
				<th>Sn</th>
				<th>User Id</th>
				<th>Total Price</th>
				<th>Action</th>
			</thead>
			<tbody>
				@foreach($Payment as $Payments)

				<tr>
					<th>{{$Payments->id}}</th>
					<td>{{$Payments->UserId}}</td>
					<td>{{$Payments->paymentId}}</td>
					<th>${{$Payments->amount}}</th>
					<td>


						{!! Form::open(['route' => ['Payment.destroy', $Payments->id], 'method' => 'delete']) !!}

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