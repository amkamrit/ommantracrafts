
@extends('admins.featureImage.base')


@section('action-content')
<div class="content">
            <div class="container-fluid">
    <div class="main-content">

        <!-- You only need this form and the form-basic.css -->

        <div class="form-basic">
                        {!! Form::open(['route'=>'featureImage.store' , 'files'=>true]) !!}

            <div class="form-title-row">
                <h1> feature Image</h1>
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
                    <span> Product Picture </span>
                   {{Form::file('feature_image' , null)}}
                </label>
            </div>


            <div class="form-row">
                    {{Form::submit('Create Query', array('class'=> 'btn btn-success btn-lg btn-block'))}}
                
            </div>
            {!! Form::close() !!} 

        </div>

    </div>
                        </div>
                </div>
            </div>
        </div>
        
@endsection