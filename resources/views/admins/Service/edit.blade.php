@extends('admins.Service.base')

@section('action-content')

        <div class="form-basic">
          {!! Form::model($service ,['route'=>['Service.update',$service->id], 'method' => 'PUT']) !!}

            <div class="form-title-row">
                <h1>Edit Service</h1>
            </div>

            <div class="form-row">
                <label>
                    <span> Title</span>
                   {{Form::text('title', null)}}
                </label>
            </div>

            <div class="form-row">
                
                    <span>content</span>
                     {{Form::textarea('content', null, ['id'=>'content'])}}
                
            </div>
             <div class="form-row">
                <label>
                    <span>Image</span>
                     {{Form::file('image', null)}}
                </label>
            </div>
            <div class="form-row" style="padding-left: 35%">
              {{Form::submit('Update Category'), array('class'=> 'btn btn-success btn-lg btn-block')}}
                
            </div>
            {!! Form::close() !!}

        </div>

    </div>
    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>

@endsection