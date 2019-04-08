@extends('admins.Slider.base')

@section('action-content')

<div class="row">
	<div class="col-md-10">
		<h3>All Middle Slider</h3>
	</div>
	<div class="col-md-2">
		<a href="{{ route('SliderTwo.create') }}" class="btn btn-primary a-btn-slide-text" style="font-size: 15px;"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
        <span><strong>Create</strong></span></a>
	</div>
	<hr>

</div>
<div class="row">
	<div class="col-md-12">
		<table class="table">
			<thead>
				<th>Sn</th>
				<th>Slider Title</th>
				<th>Image</th>
				<th>Action</th>
			</thead>
			<tbody>
				@foreach($slider as $sliders)

				<tr>
					<th>{{$sliders->id}}</th>
					<td>{{$sliders->title}}</td>
					<th>{{$sliders->image}}</th>
					<td>{!! Form::open(['route' => ['SliderTwo.destroy', $sliders->id], 'method' => 'delete']) !!}

						{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

						{!! Form::close() !!}</td>




				</tr>
				@endforeach
			</tbody>
			
		</table>
		
	</div>
</div>

@endsection