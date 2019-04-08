@extends('layouts.front.appFrontSec')



@section('content')
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<section class="m50 ">
    <div class="container">
        <div class="row justify-content-center mt100">
            <div class="col-md-6 col-12" >


                <div class="contact_info">
                    <h3 style="text-align:center;">
                        Login to your account
                    </h3>
                    @if(isset(Auth::user()->email))
                    <script> window.location="/customerLogin/successLogin";</script>
                    @endif
                    @if($message= Session::get('error'))
                    <div class="alert alert-denger">

                        {{$message}}

                    </div>
                    @endif
                    @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>

                    @endif
                     @if($message= Session::get('alert'))
                    <div class="alert alert-denger" style="background-color: red">

                        {{$message}}

                    </div>
                    @endif
                    @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $alert)
                            <li style="background-color: red">{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>

                    @endif
                    <form method="post" action="{{ url('/customerLogin/checkLogin')}}">
                        {{ csrf_field() }}
                    <div class="contact_form">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter Email">
                    </div>
                    <label for="pass">Password</label>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Enter Password">
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" name="submit" class="primary-btn">Login</button><br><br>
                        <h1>Continue With</h1><br>
                        <a href="{{asset('login/facebook')}}">
                        <i class="fa fa-facebook-square" style="font-size:20px;color:red"></i></a>
                        <a href="redirect/google" >
                        <i class="fa fa-google" style="font-size:20px;color:red"></i>
                        </a>
                        <a href="{{asset('login/twitter')}}">
                            <i class="fa fa-twitter" style="font-size:20px;color:red"></i>
                        </a>
                    </div>
                    
                        
                    
                     <div style="text-align: center;" class="forgot"> <a href="#"> Forgot Password?</a> </div>
                </div>
                </form>
                </div>
            </div>
            <div class="col-md-6 col-12" style="border-left:solid lightgrey 1px;">
                <div class="contact_info " style="margin-top: 13%;">
                    <h3 style="text-align:center;">
                        Wanna Be Our Customer?
                    </h3>
                    <p style="text-align:center;">You can register free account here :)</p>
                    <div class="contact_form">
                    <div class="form-group text-center">
                        <a href="{{asset('/customerRegister')}}" class="primary-btn">Register Here</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
 @endsection
	
