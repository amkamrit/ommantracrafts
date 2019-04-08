
@extends('admins.category.base')


@section('action-content')
<div class="content">
            <div class="container-fluid">
    <div class="main-content">

        <!-- You only need this form and the form-basic.css -->

        <div class="form-basic">
                        {!! Form::open(['route'=>'category.store'  ,'files'=>true]) !!}

            <div class="form-title-row">
                <h1>Create New Category</h1>
            </div>
            <div class="form-row">
                <label>
                    <span> Meta keywords </span>
                   {{Form::text('meta_keywords', null)}}
                </label>
            </div>
            <div class="form-row">
                <label>
                    <span> Meta description </span>
                   {{Form::text('meta_description', null)}}
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span> Category Name </span>
                   {{Form::text('category_name', null)}}
                </label>
            </div>
            <div class="form-row">
                <label>
                    <span> Category Picture </span>
                   {{Form::file('category_picture' , null)}}
                </label>
            </div>
            <div class="form-row">
                
                    <span>Category Description </span>
                   {{Form::textarea('category_description', null, ['id'=>'descCategory'])}}
                
            </div>


            <div class="form-row">
                    {{Form::submit('Create Category', array('class'=> 'btn btn-success btn-lg btn-block'))}}
                
            </div>
            {!! Form::close() !!} 

        </div>

    </div>
                        </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
        <script>
    CKEDITOR.replace( 'descCategory' );
</script>
@endsection