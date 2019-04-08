@extends('admins.Bookupload.base')


@section('action-content')

<div class="row">
	<div class="col-md-10">
		<h3>Show Single Books</h3>
	</div>
	<div class="col-md-2">
		<a href="{{ route('Bookupload.create') }}" class="btn btn-primary a-btn-slide-text" style="font-size: 15px;"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
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
					<th>{{$Bookupload->id}}</th>
				</tc>
			</thead>
			<tbody>
				<tc>
					<td>Book  Name </td>
					<td>{{$Bookupload->book_name}}</td>
				</tc>
			</tbody>
			<tbody>
				<tc>
					<td>Short description </td>
					<td>{{$Bookupload->short_description}}</td>
				</tc>
			</tbody>
			<tbody>
				<tc>
					<td> Long Description </td>
					<td>{{$Bookupload->long_description}}</td>
				</tc>
			</tbody>

			<tbody>
				
				<td></a>
        <a href="{{route('Bookupload.edit',$Bookupload->id)}}" class="btn btn-primary a-btn-slide-text"> <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
        <span><strong>Edit</strong></span> </a></td>
			</tbody>

			</tbody>
			
		</table>
		
	</div>
</div>

@endsection