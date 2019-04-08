@extends('admins.subcategory.base')

@section('action-content')

        <div class="form-basic">
        	{!! Form::model($subcategory ,['route'=>['subcategory.update',$subcategory->id], 'method' => 'PUT']) !!}

            <div class="form-title-row">
                <h1>Edit Sub Category</h1>
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
                <label>
                    <span>Sub Category Name</span>
                     {{Form::text('sub_category_name', null)}}
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Sub Category Picture</span>
                     {{Form::file('sub_category_picture', null)}}
                </label>
            </div>
            <div class="form-row">
                
                    <span> Sub category Description</span>
                     {{Form::textarea('sub_category_description', null, ['id'=>'editSubCategory'])}}
                
            </div>

            <div class="form-row" style="padding-left: 35%">
            	{{Form::submit('Update'), array('class'=> 'btn btn-success btn-lg btn-block')}}
                
            </div>
            {!! Form::close() !!}

        </div>

    </div>
<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
        <script>
    CKEDITOR.replace( 'editSubCategory' );
</script>
@endsection
