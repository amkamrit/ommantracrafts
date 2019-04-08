@extends('admins.Bookupload.base')

@section('action-content')

<div class="row">
	<div class="col-md-10">
		<h3>All Book</h3>
	</div>
	<div class="col-md-2">
		<a href="{{ route('Bookupload.create') }}" class="bth bth-lg bth-block bth-primary" style="font-size: 15px;">Create New Book </a>
	</div>
	<hr>

</div>
<div class="row">
	<div class="col-md-12">
		<table class="table">
			<thead>
				<th>Sn</th>
				<th>Book Name</th>
				<th>Action</th>
			</thead>
			<tbody>
				@foreach($book as $books)

				<tr>
					<th>{{$books->id}}</th>
					<td>{{$books->book_name}}</td>
					<td><a href="{{route('Bookupload.show',$books->id)}}" style="padding-right: 15px" class="btn btn-primary a-btn-slide-text"> <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
        <span><strong>View</strong></span></a><a href="{{route('Bookupload.edit',$books->id)}}"  style="padding-right: 15px" class="btn btn-primary a-btn-slide-text"> <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
        <span><strong>Edit</strong></span></a>


        	{!! Form::open(['route' => ['Bookupload.destroy', $books->id], 'method' => 'delete']) !!}

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