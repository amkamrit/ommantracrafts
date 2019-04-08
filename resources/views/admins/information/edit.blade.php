@extends('admins.information.base')

@section('action-content')

        <div class="form-basic">
        	{!! Form::model($information ,['route'=>['information.update',$information->id], 'method' => 'PUT']) !!}

            <div class="form-title-row">
                <h1>Edit Category</h1>
            </div>

            <div class="form-row">
                <label>
                    <span>Company Name</span>
                   {{Form::text('company_name', null)}}
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Email</span>
                     {{Form::text('email', null)}}
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Website Url</span>
                     {{Form::text('website_url', null)}}
                </label>
            </div>
             <div class="form-row">
                <label>
                    <span> Contact Number</span>
                   {{Form::text('contact_number', null)}}
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Mobile Number</span>
                     {{Form::text('mobile_number', null)}}
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Location</span>
                     {{Form::text('location', null)}}
                </label>
            </div>
             <div class="form-row">
                <label>
                    <span>Facebook Url</span>
                   {{Form::text('facebook_url', null)}}
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Twitter Url</span>
                     {{Form::text('twitter_url', null)}}
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Instagram Url</span>
                     {{Form::text('instagram', null)}}
                </label>
            </div>

            <div class="form-row" style="padding-left: 35%">
            	{{Form::submit('Update'), array('class'=> 'btn btn-success btn-lg btn-block')}}
                
            </div>
            {!! Form::close() !!}

        </div>

    </div>

@endsection
