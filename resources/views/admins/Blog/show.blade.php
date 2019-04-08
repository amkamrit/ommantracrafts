@extends('admins.Blog.base')


@section('action-content')

<div class="row">
	<div class="col-md-10">
		<h3>Show Single Blog</h3>
	</div>
	<div class="col-md-2">
		<a href="{{ route('Blog.create') }}" class="btn btn-primary a-btn-slide-text" style="font-size: 15px;"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
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
					<th>{{$blog->id}}</th>
				</tc>
			</thead>
			<tbody>
				<tc>
					<td>Blog Title</td>
					<td>{{$blog->blog_title}}</td>
				</tc>
			</tbody>
			<tbody>
				<tc>
					<td>Blog description </td>
					<td>{{$blog->blog_content}}</td>
				</tc>
			</tbody>
			<tbody>
				
				<td></a>
        <a href="{{route('Blog.edit',$blog->id)}}" class="btn btn-primary a-btn-slide-text"> <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
        <span><strong>Edit</strong></span> </a></td>
			</tbody>

			</tbody>
			
		</table>
		
	</div>
</div>

@endsection