
@extends('admins.Bookupload.base')


@section('action-content')
<div class="content">
            <div class="container-fluid">
    <div class="main-content">

        <!-- You only need this form and the form-basic.css -->

        <div class="form-basic">
                        {!! Form::open(['route'=>'Bookupload.store'  ,'files'=>true, 'file'=>true]) !!}

            <div class="form-title-row">
                <h1>Create New Book</h1>
            </div>

            <div class="form-row">
                <label>
                    <span> Book Name </span>
                   {{Form::text('book_name', null)}}
                </label>
            </div>
            <div class="form-row">
                <label>
                    <span> Book Short Description </span>
                   {{Form::textarea('short_description', null)}}
                </label>
            </div>
            <div class="form-row" >
                
                    <span> Book Long Description </span>
                   {{Form::textarea('long_description', null, ['id'=>'Ldescription'])}}
                
            </div>

            <div class="form-row">
                <label>
                    <span> Book Pdf File </span>
                   {{Form::file('pdf_file' , null)}}
                </label>
            </div>
             <div class="form-row">
                <label>
                    <span> Book Cover Image </span>
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
    CKEDITOR.replace( 'Ldescription' );
</script>
@endsection