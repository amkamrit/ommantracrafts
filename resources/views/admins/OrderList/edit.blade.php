@extends('admins.OrderList.base')

@section('action-content')

        <div class="form-basic">
        	{!! Form::model($OrderList ,['route'=>['OrderList.update',$OrderList->id], 'method' => 'PUT']) !!}

            <div class="form-title-row">
                <h1>Update</h1>
            </div>

            <div class="form-row">
                <label>
                    <span>Status</span>
                     {{Form::select('status', [
                   'Complet'=>'Complet',
                   'In Progress'=>'In Progress',
                   'Not Conform'=>'Not Conform',
                   ]
                   )}}
                </label>
            </div>

            <div class="form-row" style="padding-left: 35%">
            	{{Form::submit('Update'), array('class'=> 'btn btn-success btn-lg btn-block')}}
                
            </div>
            {!! Form::close() !!}

        </div>

    </div>

@endsection
