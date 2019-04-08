@extends('admins.event.base')

@section('action-content')

<div class="content">
            <div class="container-fluid">
    <div class="main-content">

        <!-- You only need this form and the form-basic.css -->

        <div class="form-basic">
                        {!! Form::open(['route'=>'event.store'  ,'files'=>true]) !!}

            <div class="form-title-row">
                <h1>Create New Event</h1>
            </div>

            <div class="form-row">
                <label>
                    <span> Event Name</span>
                   {{Form::text('event_title', null)}}
                </label>
            </div>
            <div class="form-row">
                
                    <span>  Content </span>
                   {{Form::textarea('event_content' , null , ['id'=>'Ldescription'])}}
               
            </div>
            <div class="form-row">
                <label>
                    <span>  Picture </span>
                   {{Form::file('event_image' , null)}}
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
    CKEDITOR.replace( 'Ldescription' );
</script>

@endsection