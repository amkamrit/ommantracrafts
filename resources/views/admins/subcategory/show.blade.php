@extends('admins.subcategory.base')


@section('action-content')

<div class="row">
	<div class="col-md-10">
		<h3>Show Single Sub Category</h3>
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
				<tc>
					<th>Sn</th>
					<th>{{$subcategory->id}}</th>
				</tc>
			</thead>
			<tbody>
				<tc>
					<td>Main Category Id </td>
					<td>{{$subcategory->main_category_id}}</td>
				</tc>
			</tbody>
			<tbody>
				<tc>
					<td>Sub Category Name </td>
					<td>{{$subcategory->sub_category_name}}</td>
				</tc>
			</tbody>
			<tbody>
				<tc>
					<td>Sub Category Picture </td>
					<td>{{$subcategory->sub_category_picture}}</td>
				</tc>
			</tbody>
			
			<tbody>
				<tc>
					<td> Sub Category Description </td>
					<td>{{$subcategory->sub_category_description}}</td>
				</tc>
			</tbody>

			<tbody>
				
				<td><a href="{{route('subcategory.edit',$subcategory->id)}}" class="btn btn-primary a-btn-slide-text" style="margin-bottom: 20px;"> <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
        <span><strong>Edit</strong></span> </a>

						{!! Form::open(['route' => ['subcategory.destroy', $subcategory->id], 'method' => 'delete']) !!}

						{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}

						{!! Form::close() !!}

    </td>
			</tbody>

			</tbody>
			
		</table>
		
	</div>
</div>

@endsection