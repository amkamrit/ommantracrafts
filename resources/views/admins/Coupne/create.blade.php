@extends('admins.event.base')

@section('action-content')


<div class="row">
	<div class="col-md-10">
		<h3>Create Coupne</h3>
	</div>
	<hr>
</div>
<div class="row">
	<div class="col-md-12">
		<form action="{{route('coupne.store')}}" method="post">
			{{ csrf_field() }}
			<input type="hidden" name="_csrf">
			<div class="form-group">

				<label class="control-label">Coupne Name</label>
				<input type="text"  name="name" class="form-control">
		</div>
			<div class="form-group">
				<label class="control-label">Price</label>
				<input type="text"  name="price" class="form-control">
		</div>
			<div class="form-group">
				<label class="control-label">Type </label>
				<select name="type" class="form-control">
					<option disabled >Select Type</option>
					<option value="1" >Fixed Amount</option>
					<option value="2">% Amount</option>
				</select>
		</div>
			<div class="form-group">
				<label class="control-label">Expire Date</label>
				<input type="Date"  name="expire_date" class="form-control">
		</div>
			<div class="form-group">
				<label class="control-label">Note</label>
				<textarea class="form-control" name="note"> 
					
				</textarea>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-success">Save</button>
		</div>
		</form>
		
	</div>
</div>


@endsection