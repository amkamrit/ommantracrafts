@extends('admins.Blog.base')

@section('action-content')

<div class="row">
	<div class="col-md-10">
		<h3>All Blog</h3>
	</div>
	<div class="col-md-2">
		<a href="{{ route('Blog.create') }}" class="bth bth-lg bth-block bth-primary" style="font-size: 15px;">Create New Blog </a>
	</div>
	<hr>

</div>
<div class="row">
	<div class="col-md-12">
		<table class="table">
			<thead>
				<th>Sn</th>
				<th>Blog Title</th>
				<th>Action</th>
			</thead>
			<tbody>
				@foreach($blog as $blogs)

				<tr>
					<th>{{$blogs->id}}</th>
					<td>{{$blogs->blog_title}}</td>
					<td><a href="{{route('Blog.show',$blogs->id)}}" style="padding-right: 15px" class="btn btn-primary a-btn-slide-text"> <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
        <span><strong>View</strong></span></a><a href="{{route('Blog.edit',$blogs->id)}}"  style="padding-right: 15px" class="btn btn-primary a-btn-slide-text"> <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
        <span><strong>Edit</strong></span></a>


        	{!! Form::open(['route' => ['Blog.destroy', $blogs->id], 'method' => 'delete']) !!}

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