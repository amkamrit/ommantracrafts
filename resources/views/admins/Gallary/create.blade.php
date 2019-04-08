@extends('admins.Gallary.base')

@section('action-content')

<div class="content">
            <div class="container-fluid">
    <div class="main-content">

        <!-- You only need this form and the form-basic.css -->

        <div class="form-basic">
                        {!! Form::open(['route'=>'Gallary.store'  ,'files'=>true]) !!}

            <div class="form-title-row">
                <h1>Create New Gallary</h1>
            </div>

            <div class="form-row">
                <label>
                    <p style="font-size: 10px">For First banner-> Banner_First</p>
                    <p style="font-size: 10px">Second banner-> Banner_Second</p>
                    <p style="font-size: 10px">Third banner-> Banner_Third</p>
                    <span> Advertising Banner Name</span>
                   {{Form::text('image_name', null)}}
                </label>
            </div>
            <div class="form-row">
                <label>
                    <span>  Picture </span>
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