@extends('admins.category.base')

@section('action-content')

<div class="row">
	<div class="col-md-10">
		<h3>All Category</h3>
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
				<th>Sn</th>
				<th>Category Name</th>
				<th>Action</th>
			</thead>
			<tbody>
				@foreach($category as $Categorys)

				<tr>
					<th>{{$Categorys->id}}</th>
					<td>{{$Categorys->category_name}}</td>
					<td>


							<a href="{{route('category.show',$Categorys->id)}}" style="margin: 10px;"  class="btn btn-success a-btn-slide-text">  <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
        <span><strong>View</strong></span></a>
        <a href="{{route('category.edit',$Categorys->id)}}" class="btn btn-primary a-btn-slide-text"> <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
        <span><strong>Edit</strong></span> </a>


<!-- 						{!! Form::open(['route' => ['category.destroy', $Categorys->id], 'method' => 'delete']) !!}

						{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

						{!! Form::close() !!} -->

					</td>

				</tr>
				@endforeach
			</tbody>
			
		</table>
		{{$category->links()}}
	</div>
</div>

@endsection