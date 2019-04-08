<!DOCTYPE html>
<html lang="en">
<head>
<title>OMMANTRA</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Online Store">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{asset('asset/bootstrap4/bootstrap.min.css')}}">
<link href="{{asset('asset/fonts/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="{{asset('asset/fonts/elegant-font/html-css/style.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('asset/styles/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('asset/styles/responsive.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('asset/css/mainpage.css')}}">
<link rel="stylesheet" type="text/css" media="all" href="{{asset('asset/styles/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" media="all" href="{{asset('asset/styles/owl.theme.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('asset/css/util.css')}}">

<style type="text/css">
  .image-slider {
    margin-left: 6px;
  min-width: 100%;
  min-height: 50px;
  display: flex;
  overflow-x: none;
}
.image-slider::-webkit-scrollbar {
  display: none;
}
.card--content {  min-width: 1460px;
  margin: 5px;
}

</style>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5bf0f8b679ed6453cca9edb5/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<meta name="google-site-verification" content="2yUnM3i1nUff8z0eUaeJyIHz6F9NuL9V7O1M7ZOjuIs" />
<!--End of Tawk.to Script-->
 <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-129496918-1"></script>
<meta name="google-site-verification" content="8pk2rvnGQUl8QxLoR3IP3_2tFRFbZVR7OAGlwV4e5Fg" />


<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=GA_TRACKING_ID"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'GA_TRACKING_ID');
</script>


<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-129496918-1');
</script>

</head>

<body>
	<div class="super_container">


	

	@yield('content')

	@include('layouts.front.footerFront')




 	</div>
  @yield('scripts')
</body>
 <script src="{{asset('asset/js/jquery.min.js')}}"></script>
<script src="{{asset('asset/bootstrap4/popper.js')}}"></script>
<script src="{{asset('asset/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('asset/greensock/TweenMax.min.js')}}"></script>
<script type="text/javascript" src="{{asset('asset/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('asset/js/main.js')}}"></script>
 <script src="{{asset('asset/ItemSlider/js/modernizr.custom.63321.js')}}"></script>
 <script type="text/javascript" src="{{asset('asset/js/smoothproducts.min.js')}}"></script>
 <script src="{{asset('asset/ItemSlider/js/jquery.catslider.js')}}"></script>
 <script src="{{asset('asset/js/baguetteBox.min.js')}}"></script>
 <script type="text/javascript" src="{{asset('asset/DataTables/datatables.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('asset/DataTables/dataTables.bootstrap4.min.js')}}"></script>
  <script src="https://js.stripe.com/v3/"></script>

<script type="text/javascript">
$(document).ready(function() {
 
  $("#owl-demo").owlCarousel({
    navigation : true
  });
 
});

baguetteBox.run('.tz-gallery');

</script>
<script type="text/javascript">
         $('#imageUpload').change(function(){            
            readImgUrlAndPreview(this);
            function readImgUrlAndPreview(input){
                 if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        reader.onload = function (e) {                          
                            $('#imagePreview').attr('src', e.target.result);
                            }
                      };
                      reader.readAsDataURL(input.files[0]);
                 }  
        });

        $(function () {

            $('#mi-slider').catslider();

        });
    </script>

    <script type="text/javascript">
    $(window).load(function() {
      $('.sp-wrap').smoothproducts();
    });
   
     
</script> 
<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</html>