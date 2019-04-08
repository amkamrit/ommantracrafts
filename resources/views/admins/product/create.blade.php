
@extends('admins.product.base')

@section('action-content')
<div class="content">
            <div class="container-fluid">
    <div class="main-content">

        <!-- You only need this form and the form-basic.css -->

        <div class="form-basic">
                        {!! Form::open(array('route'=>'product.store' , 'files'=>true)) !!}
{!! csrf_field() !!}
            <div class="form-title-row">
                <h1>Create Product</h1>
            </div>

            <div class="form-row">
                <label>
                    <span> Product Name </span>
                   {{Form::text('product_name', null)}}
                </label>
            </div>
            <div class="form-row">
                <label>
                    <span>Price </span>
                   {{Form::number('product_normal_price' , null)}}
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span> {{form::label('categories_id','Category')}} </span>
                    <select name="categories_id">
                        @foreach($category as $categorys)

                            <option value="{{$categorys->id}}">{{$categorys->category_name}}</option>

                        @endforeach
                        
                    </select>
                </label>
            </div>
            <div class="form-row">
                <label>
                    <span> {{form::label('sub_categories_id',' Sub Category')}} </span>
                    <select name="sub_categories_id">
                        @foreach($subcategory as $subcategorys)

                            <option value="{{$subcategorys->id}}">{{$subcategorys->sub_category_name}}</option>

                        @endforeach
                        
                    </select>
                </label>
            </div>
            <div class="form-row">
                
                    <span>Product Description </span>
                   {{Form::textarea('product_short_description', null, ['id'=>'desc'])}}
                
            </div>

               <div class="form-row">
                <label>
                    <span> Product Picture </span>
                   {{Form::file('product_image' , null)}}
                </label>
            </div>
            
            <a href="#demo" class="btn btn-success" data-toggle="collapse">Add More..</a>
            <br><br>
  <div id="demo" class="collapse">
    
    <div class="form-row">
                
                    <span>Product Long Description </span>
                   {{Form::textarea('product_long_description' , null, ['id'=>'content'])}}
                
            </div>

            <div class="form-row">
                <label>
                    <span>Product Code </span>
                   {{Form::text('product_code', null)}}
                </label>
            </div>
            <div class="form-row">
                <label>
                    <span>Product Selling Price </span>
                   {{Form::number('product_sell_price', null)}}
                </label>
            </div>
            <div class="form-row">
                <label>
                    <span>Minimum Sell Iteam </span>
                   {{Form::number('product_minimum_sell_number', null)}}
                </label>
            </div>
            <div class="form-row">
                <label>
                    <span>Product Type </span>
                    {{Form::select('product_type', [
                   'Downloadable'=>'Downloadable',
                   'Not Downloadable'=>'Not Downloadable',
                   ]

                   )}}
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Slog </span>
                   {{Form::text('slog', null)}}
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Selling Option </span>
                   {{Form::select('sell_option', [
                   'Yes'=>'Yes',
                   'No'=>'No',
                   ]

                   )}}
                </label>
            </div>
  </div>
  <br><br>


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
    CKEDITOR.replace( 'desc' );
</script>
        
@endsection