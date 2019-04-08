
@extends('admins.Blog.base')


@section('action-content')
<div class="content">
            <div class="container-fluid">
    <div class="main-content">

        <!-- You only need this form and the form-basic.css -->

        <div class="form-basic">
                        {!! Form::open(['route'=>'Blog.store' , 'files'=>true]) !!}

            <div class="form-title-row">
                <h1>Create New Blog</h1>
            </div>
             <div class="form-row">
                <label>
                    <span> Meta Tag </span>
                   {{Form::text('mataTag', null)}}
                </label>
            </div>
             <div class="form-row">
                <label>
                    <span> Meta Description </span>
                   {{Form::text('metaDescription', null)}}
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span> Blog Title </span>
                   {{Form::text('blog_title', null)}}
                </label>
            </div>
            <div class="form-row">
                
                    <span> Blog Description </span>
                   {{Form::textarea('blog_content', null, ['id'=>'content'])}}
                
            </div>
             <div class="form-row">
                <label>
                    <span> Blog Image </span>
                   {{Form::file('image' , null)}}
                </label>
            </div>



            <div class="form-row">
                    {{Form::submit('Create', array('class'=> 'btn btn-success btn-lg btn-block'))}}
                
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
    CKEDITOR.replace( 'content' );
</script>
        
@endsection