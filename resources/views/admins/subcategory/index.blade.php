@extends('admins.subcategory.base')

@section('action-content')

<div class="row">
	<div class="col-md-10">
		<h3>All Sub Category</h3>
	</div>
	<div class="col-md-2">
		<a href="{{ route('subcategory.create') }}" class="bth bth-lg bth-block bth-primary" style="font-size: 15px;" class="btn btn-primary a-btn-slide-text"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
        <span><strong>Create</strong></span></a>
	</div>
	<hr>

</div>
<div class="row">
	<div class="col-md-12">
		<table class="table">
			<thead>
				<th>Sn</th>
				<th> Sub Category Name</th>
				<th>Action</th>
			</thead>
			<tbody>
				@foreach($subcategory as $subcategorys)

				<tr>
					<th>{{$subcategorys->id}}</th>
					<td>{{$subcategorys->sub_category_name}}</td>
					<td>



						<a href="{{route('subcategory.show',$subcategorys->id)}}" style="margin: 10px;"  class="btn btn-primary a-btn-slide-text">  <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
        <span><strong>View</strong></span></a>
        <a href="{{route('subcategory.edit',$subcategorys->id)}}" class="btn btn-primary a-btn-slide-text"> <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
        <span><strong>Edit</strong></span> </a>


						{!! Form::open(['route' => ['subcategory.destroy', $subcategorys->id], 'method' => 'delete']) !!}

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