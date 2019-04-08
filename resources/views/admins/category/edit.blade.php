@extends('admins.category.base')

@section('action-content')

        <div class="form-basic">
        	{!! Form::model($category ,['route'=>['category.update',$category->id], 'method' => 'PUT']) !!}

            <div class="form-title-row">
                <h1>Edit Category</h1>
            </div>

            <div class="form-row">
                <label>
                    <span>Category Name</span>
                   {{Form::text('category_name', null)}}
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Browse File</span>
                     {{Form::file('category_picture', null)}}
                </label>
            </div>

            <div class="form-row">
               
                    <span>Description</span>
                     {{Form::textarea('category_description', null, ['id'=>'editCategory'])}}
            </div>

            <div class="form-row" style="padding-left: 35%">
            	{{Form::submit('Update Category'), array('class'=> 'btn btn-success btn-lg btn-block')}}
                
            </div>
            {!! Form::close() !!}

        </div>

    </div>
<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
        <script>
    CKEDITOR.replace( 'editCategory' );
</script>
@endsection
