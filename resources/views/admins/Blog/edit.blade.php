@extends('admins.Blog.base')

@section('action-content')

        <div class="form-basic">
        	{!! Form::model($blog ,['route'=>['Blog.update',$blog->id], 'method' => 'PUT']) !!}

            <div class="form-title-row">
                <h1>Edit Blog</h1>
            </div>

            <div class="form-row">
                <label>
                    <span>Blog Title</span>
                   {{Form::textarea('blog_title', null)}}
                </label>
            </div>

            <div class="form-row">
                
                    <span>Blog Content</span>
                     {{Form::textarea('blog_content', null, ['id'=>'content'])}}
                
            </div>

            <div class="form-row">
                <label>
                    <span> Blog cover Image</span>
                     {{Form::file('image', null)}}
                </label>
            </div>

            <div class="form-row" style="padding-left: 35%">
            	{{Form::submit('Update'), array('class'=> 'btn btn-success btn-lg btn-block')}}
                
            </div>
            {!! Form::close() !!}

        </div>

    </div>
    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>

@endsection
