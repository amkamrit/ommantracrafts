@extends('admins.category.base')


@section('action-content')

<div class="row">
	<div class="col-md-10">
		<h3>Show Single Category</h3>
	</div>
	<div class="col-md-2">
		<a href="{{ route('category.create') }}" class="btn btn-primary a-btn-slide-text" style="font-size: 15px;"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
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
					<th>{{$category->id}}</th>
				</tc>
			</thead>
			<tbody>
				<tc>
					<td>Category Name </td>
					<td>{{$category->category_name}}</td>
				</tc>
			</tbody>
			<tbody>
				<tc>
					<td>Category Picture </td>
					<td>{{$category->category_picture}}</td>
				</tc>
			</tbody>
			<tbody>
				<tc>
					<td> Category Description </td>
					<td>{{$category->category_description}}</td>
				</tc>
			</tbody>
			

			<tbody>
				
				<td></a>
        <a href="{{route('category.edit',$category->id)}}" class="btn btn-primary a-btn-slide-text"> <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
        <span><strong>Edit</strong></span> </a></td>
			</tbody>

			</tbody>
			
		</table>
		
	</div>
</div>

@endsection