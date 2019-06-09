<!DOCTYPE html>
<html lang="en">
<head>
    <title> {{env('APP_NAME')}} {{ isset($title) ? ' - '.$title : '' }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/user-page.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,400i,500,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script>
    window['_fs_debug'] = false;
    window['_fs_host'] = 'fullstory.com';
    window['_fs_org'] = 'M2T2M';
    window['_fs_namespace'] = 'FS';
    (function(m,n,e,t,l,o,g,y){
    if (e in m) {if(m.console && m.console.log) { m.console.log('FullStory namespace conflict. Please set window["_fs_namespace"].');} return;}
    g=m[e]=function(a,b,s){g.q?g.q.push([a,b,s]):g._api(a,b,s);};g.q=[];
    o=n.createElement(t);o.async=1;o.crossOrigin='anonymous';o.src='https://'+_fs_host+'/s/fs.js';
    y=n.getElementsByTagName(t)[0];y.parentNode.insertBefore(o,y);
    g.identify=function(i,v,s){g(l,{uid:i},s);if(v)g(l,v,s)};g.setUserVars=function(v,s){g(l,v,s)};g.event=function(i,v,s){g('event',{n:i,p:v},s)};
    g.shutdown=function(){g("rec",!1)};g.restart=function(){g("rec",!0)};
    g.consent=function(a){g("consent",!arguments.length||a)};
    g.identifyAccount=function(i,v){o='account';v=v||{};v.acctId=i;g(o,v)};
    g.clearUserCookie=function(){};
    })(window,document,window['_fs_namespace'],'script','user');
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-140478553-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-140478553-1');
    </script>
</head>
<body>

@include('HPNUserAreaView::common.nav')

<div class="row mx-2 my-3 mt-4">
    @include('HPNUserAreaView::common.sidebar')
    <div class="col-xl-8">
        @if(!\Auth::user()->confirmed)
        <div id="confirm_account_note" class="bg-danger text-center">
            Please confirm your email! 
            <button class="btn btn-success btn-sm" id="resend_confirm_email" style="    margin: 3px;">Resend</button>
        </div>
        @endif

        @yield('content')
    </div>
</div>

<footer>
    <div class="row footer">
        <div class="col-xl-12">
            <div id="social-footer">
                <li>
                    <!-- <a href="#"><i class="fab fa-google-plus-square"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a> -->
                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                    <a href="#"><i class="fab fa-twitter-square"></i></a>
                    <a href="#"><i class="fab fa-telegram"></i></a>
                </li>
            </div>
        </div>
        <div class="col-xl-12">
            <div id="sub">
                <form id="frmSubscribe" >
                            {{csrf_field()}}
                    <div class="subscribe">
                        <input id="text" type="email" placeholder="Email" name="email" required autocomplete="off">
                    </div>
                    <div class="subscribe">
                        <input id="button" type="submit" value="Subscribe">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-xl-12 copyrights">
        <p>© 2019 by Zoptax Network</p>
    </div>
</footer>

<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.8.1/parsley.min.js"></script>
<script>
    var to_coins = {!! $to_coins !!};
    var from_coins = {!! $from_coins !!};
    var expime_coin = {{ BunSetting::get('coin.rys') }};
</script>

<script src="{{ asset('js/routes.js') }}"></script>
<script src="{{ asset('assets/user/js/vendor.js') }}"></script>
<script src="{{ asset('assets/user/js/app.js') }}"></script>
{!! NoCaptcha::renderJs() !!}

@stack('footer')
<div class="loading-wrap">
    <div class="loading">
        <div class="spinner"></div>
    </div>
</div>

<!-- <script>
  window.fcWidget.init({
    token: "491bdecb-0512-4b82-b0a6-f4649591ffaf",
    host: "https://wchat.freshchat.com"
  });
</script>
<script>
  // Make sure fcWidget.init is included before setting these values

  // To set unique user id in your system when it is available
  window.fcWidget.setExternalId("john.doe1987");

  // To set user name
  window.fcWidget.user.setFirstName("John");

  // To set user email
  window.fcWidget.user.setEmail("john.doe@gmail.com");

  // To set user properties
  window.fcWidget.user.setProperties({
    plan: "Estate",                 // meta property 1
    status: "Active"                // meta property 2
  });
</script> -->

<script>
        $('#navResource').hover(function() {
            $('#navResContainer').show();
        })

        $('#navResource').mouseleave(function() {
            $('#navResContainer').hide();
        });

        $('#frmSubscribe').submit(function(e) {
            e.preventDefault(e);
            $('#frmSubscribe .alert').remove()
            $.ajax({
            type: "POST",
            url: '{{route("frontend.subscribe.post")}}',
            data: $('#frmSubscribe').serialize(),
            success: function(res) {
                $('#frmSubscribe').prepend('<div class="alert alert-success">Sent subscribe successfully.</div>');
                $('#frmSubscribe #text').val('')
            },
            });
        })


    </script>
    
</body>
</html>