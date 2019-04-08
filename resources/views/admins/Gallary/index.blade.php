@extends('admins.Gallary.base')

@section('action-content')


<div class="row">
	<div class="col-md-10">
		<h3>All Advertising Banner</h3>
	</div>
	<div class="col-md-2">
		<a href="{{ route('Gallary.create') }}" class="btn btn-primary a-btn-slide-text" style="font-size: 15px;"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
        <span><strong>Create</strong></span></a>
	</div>
	<hr>

</div>
<div class="row">
	<div class="col-md-12">
		<table class="table">
			<thead>
				<th>ID</th>
				<th>Advertising Banner Name</th>
				<th>Image</th>
			</thead>
			<tbody>
				@foreach($Gallary as $Gallarys)

				<tr>
					<td>{{$Gallarys->id}}</td>
					<th>{{$Gallarys->image_name}}</th>  
					<td>
					<?php $url=url('galleryImage/'.$Gallarys->image); 
                                					?>
                                				<img src="{{$url}}" style="height: 100px; width: 100px;" >
                    </td>
					
					<td>
						{!! Form::open(['route' => ['Gallary.destroy', $Gallarys->id], 'method' => 'delete']) !!}

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