@extends('admins.product_detail.base')

@section('action-content')

        <div class="form-basic">
            {!! Form::model($product_detail ,['route'=>['product_detail.update',$product_detail->id], 'method' => 'PUT', 'files'=>true]) !!}


            <div class="form-title-row">
                <h1>Edit product</h1>
            </div>

            <div class="form-row">
                <label>
                    <span>Product Long Description</span>
                     {{Form::text('product_long_description', null)}}
                </label>
            </div>
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
                     {{Form::text('product_type', null)}}
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
                    <span>Selling Option</span>
                      {{Form::select('sell_option', [
                   'Yes'=>'Yes',
                   'No'=>'No',
                   ]
                   )}}
                </label>
            </div>


            

    <div class="form-row" style="padding-left: 35%">
                {{Form::submit('Update Product'), array('class'=> 'btn btn-success btn-lg btn-block')}}
                
            </div>
    {!! Form::close() !!}
</div>

        </div>

    </div>
</div>

@endsection
