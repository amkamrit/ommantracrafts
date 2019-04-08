@extends('admins.Bookupload.base')

@section('action-content')

        <div class="form-basic">
        	{!! Form::model($Bookupload ,['route'=>['Bookupload.update',$Bookupload->id], 'method' => 'PUT']) !!}

            <div class="form-title-row">
                <h1>Edit Books</h1>
            </div>

            <div class="form-row">
                <label>
                    <span>Book Name</span>
                   {{Form::text('book_name', null)}}
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Short Description</span>
                     {{Form::textarea('short_description', null)}}
                </label>
            </div>

            <div class="form-row">
               
                    <span> Long Description</span>
                     {{Form::textarea('long_description', null, ['id'=>'Ldescription'])}}
               
            </div>
             <div class="form-row">
                <label>
                    <span>PDF File </span>
                     {{Form::file('pdf_file', null)}}
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span> Cover Page</span>
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
    CKEDITOR.replace( 'Ldescription' );
</script>
@endsection
