@extends('admins.product_detail.base')


@section('action-content')
<div class="content">
            <div class="container-fluid">
    <div class="main-content">

        <!-- You only need this form and the form-basic.css -->

        <div class="form-basic">
                        {!! Form::open(array('route'=>'product_detail.store' , 'files'=>true)) !!}

            <div class="form-title-row">
                <h1>Create Product Detail</h1>
            </div>

           <div class="form-row">
                <label>
                    <span> {{form::label('products_id','Product Name')}} </span>
                    <select name="products_id">
                        @foreach($product as $products)

                            <option value="{{$products->id}}">{{$products->product_name}}</option>

                        @endforeach
                        
                    </select>
                </label>
            </div>
            <div class="form-row">
                <label>
                    <span>Product Long Description </span>
                   {{Form::textarea('product_long_description' , null)}}
                </label>
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
                   {{Form::text('product_type', null)}}
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