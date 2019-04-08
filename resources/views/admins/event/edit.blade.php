@extends('admins.event.base')

@section('action-content')

        <div class="form-basic">
          {!! Form::model($event ,['route'=>['event.update',$event->id], 'method' => 'PUT']) !!}

            <div class="form-title-row">
                <h1>Edit Service</h1>
            </div>

            <div class="form-row">
                <label>
                    <span> Title</span>
                   {{Form::text('event_title', null)}}
                </label>
            </div>

            <div class="form-row">
               
                    <span>content</span>
                     {{Form::textarea('event_content', null, ['id'=>'Ldescription'])}}
                
            </div>
             <div class="form-row">
                <label>
                    <span>Image</span>
                     {{Form::file('event_image', null)}}
                </label>
            </div>
            <div class="form-row" style="padding-left: 35%">
              {{Form::submit('Update Event'), array('class'=> 'btn btn-success btn-lg btn-block')}}
                
            </div>
            {!! Form::close() !!}

        </div>

    </div>
    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'Ldescription' );
</script>

@endsection