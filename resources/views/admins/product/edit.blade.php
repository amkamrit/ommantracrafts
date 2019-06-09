@extends('admins.product.base')

@section('action-content')

        <div class="form-basic">
        	{!! Form::model($product ,['route'=>['product.update',$product->id], 'method' => 'PUT', 'files'=>true]) !!}

            <div class="form-title-row">
                <h1>Edit product</h1>
            </div>

            <div class="form-row">
                <label>
                    <span>Product Name</span>
                   {{Form::text('product_name', null)}}
                </label>
            </div>
            <div class="form-row">
                <label>
                    <span> {{form::label('sub_categories_id','Category')}} </span>
                    <select name="sub_categories_id">
                        @foreach($subcategory as $subcategorys)

                            <option value="{{$subcategorys->id}}">{{$subcategorys->sub_category_name}}</option>

                        @endforeach
                        
                    </select>
                </label>
            </div>
            <div class="form-row">
                <label>
                    <span>price($)</span>
                     {{Form::text('product_normal_price', null)}}
                </label>
            </div>
            <div class="form-row">
                
                    <span>Product Short Description</span>
                     {{Form::textarea('product_short_description', null, ['id'=>'desc'])}}
                
            </div>
            <div class="form-row">
                
                    <span>Product Long Description</span>
                     {{Form::textarea('product_long_description', null, ['id'=>'content'])}}
                
            </div>
              <div class="form-row">
                <label>
                    <span> Product Picture </span>
                   {{Form::file('product_image' , null)}}
                </label>
                <?php $url=url('productImage/'.$product->product_image); 
                                					?>
                                				<img src="{{$url}}" style="height: 100px; width: 100px;" >
            </div>
           

            <a href="#demo" class="btn btn-success" data-toggle="collapse">Edit More..</a>
            <br><br>
  <div id="demo" class="collapse">


            <div class="form-row">
                <label>
                    <span>Product Code</span>
                     {{Form::text('product_code', null)}}
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Product Selling Price</span>
                     {{Form::text('product_sell_price', null)}}
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>minimum Selling Number</span>
                     {{Form::text('product_minimum_sell_number', null)}}
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Product Type</span>
                      {{Form::select('product_type', [
                   'Downloadable'=>'Downloadable',
                   'Not Downloadable'=>'Not Downloadable',
                   ]

                   )}}
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Product Slog</span>
                     {{Form::text('slog', null)}}
                </label>
            </div>


            <div class="form-row">
                <label>
                    <span>Youtube Url </span>
                   {{Form::text('youtubeurl', null)}}
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Selling Option</span>
                      {{Form::select('sell_option', [
                   'Yes'=>'Yes',
                   'No'=>'No',
                   ]
                   )}}
                </label>
            </div>

            
            </div>
  </div>
  <br><br>
    <div class="form-row" style="padding-left: 35%">
                {{Form::submit('Update Product'), array('class'=> 'btn btn-success btn-lg btn-block')}}
                
            </div>
    {!! Form::close() !!}
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
