
@extends('admins.Slider.base')

@section('action-content')
<div class="content">
            <div class="container-fluid">
    <div class="main-content">

        <!-- You only need this form and the form-basic.css -->

        <div class="form-basic">
                        {!! Form::open(array('route'=>'Slider.store' , 'files'=>true)) !!}

            <div class="form-title-row">
                <h1>Create New Slider</h1>
            </div>

            <div class="form-row">
                <label>
                    <span> Image  Title </span>
                   {{Form::text('title', null)}}
                </label>
            </div>
            <div class="form-row">
                <label>
                    <span> Image Category </span>
                   <select name="sub_categories_id">
                        @foreach($subcategory as $subcategorys)

                            <option value="{{$subcategorys->id}}">{{$subcategorys->sub_category_name}}</option>

                        @endforeach
                        
                    </select>
                </label>
            </div>
            <div class="form-row">
                <label>
                    <span>Image </span>
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
        
@endsection