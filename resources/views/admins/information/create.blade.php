
@extends('admins.information.base')

@section('action-content')

<div class="content">
            <div class="container-fluid">
    <div class="main-content">

        <!-- You only need this form and the form-basic.css -->

        <div class="form-basic">
                        {!! Form::open(['route'=>'information.store']) !!}

            <div class="form-title-row">
                <h1>Create Company Information</h1>
            </div>

            <div class="form-row">
                <label>
                    <span> Company Name </span>
                   {{Form::text('category_name', null)}}
                </label>
            </div>
            <div class="form-row">
                <label>
                    <span> Email </span>
                   {{Form::text('email', null)}}
                </label>
            </div>
            <div class="form-row">
                <label>
                    <span>Website </span>
                   {{Form::text('website_url', null)}}
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span> Conatct Number </span>
                   {{Form::text('contact_number', null)}}
                </label>
            </div>
            <div class="form-row">
                <label>
                    <span> Mobile Number </span>
                   {{Form::text('mobile_number', null)}}
                </label>
            </div>
            <div class="form-row">
                <label>
                    <span> Location </span>
                   {{Form::text('location', null)}}
                </label>
            </div>
            <div class="form-row">
                <label>
                    <span> Facebook Url </span>
                   {{Form::text('facebook_url', null)}}
                </label>
            </div>
            <div class="form-row">
                <label>
                    <span> Twitter Url </span>
                   {{Form::text('twitter_url', null)}}
                </label>
            </div>
            <div class="form-row">
                <label>
                    <span>Instegram Url </span>
                   {{Form::text('instagram', null)}}
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