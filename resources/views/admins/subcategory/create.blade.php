
@extends('admins.subcategory.base')


@section('action-content')
<div class="content">
            <div class="container-fluid">
    <div class="main-content">

        <!-- You only need this form and the form-basic.css -->

        <div class="form-basic">
                        {!! Form::open(['route'=>'subcategory.store']) !!}

            <div class="form-title-row">
                <h1>Create New Sub Category</h1>
            </div>

            <div class="form-row">
                <label>
                    <span> {{form::label('main_category_id','Category')}} </span>
                    <select name="main_category_id">
                        @foreach($category as $categorys)

                            <option value="{{$categorys->id}}">{{$categorys->category_name}}</option>

                        @endforeach
                        
                    </select>
                </label>
            </div>
                        <div class="form-row">
               
                    <span> Meta KeyWord </span>
                   {{Form::text('meta_keyword', null )}}
                
            </div>
                        <div class="form-row">
               
                    <span> Meta Description </span>
                   {{Form::text('meta_description', null )}}
                
            </div>
            <div class="form-row">
               
                    <span> Sub Category Name </span>
                   {{Form::text('sub_category_name', null )}}
                
            </div>
            <div class="form-row">
                <label>
                    <span> Sub Category Picture </span>
                   {{Form::file('sub_category_picture', null)}}
                </label>
            </div>
            <div class="form-row">
                
                    <span> Sub Category Description </span>
                   {{Form::textarea('sub_category_description', null,['id'=>'descSubCategory'])}}
                
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
    CKEDITOR.replace( 'descSubCategory' );
</script>
@endsection