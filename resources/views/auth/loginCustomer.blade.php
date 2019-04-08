 @extends('frontends.frontend.app')

@section('content')
@include('frontends/header')
	
	<section class="m50 ">
    <div class="container">
        <div class="row justify-content-center mt100">
            <div class="col-md-6 col-12" >


                <div class="contact_info">
                    <h3 style="text-align:center;">
                        Login to your account
                    </h3>
                    {!! Form::open(array('route'=>'admin.login.submit' , 'files'=>true)) !!}
                    <div class="contact_form">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter Email">
                    </div>
                    <label for="pass">Password</label>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Enter Password">
                    </div>
                    <div class="form-group text-right">
                        <button type="submit" name="submit" class="primary-btn">Login</button>
                    </div>
                     <div style="text-align: center;" class="forgot"> <a href="#"> Forgot Password?</a> </div>
                </div>
                {!! Form::close() !!} 
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
