@extends('layouts.front.appFront')

@include('layouts.front.headerFront')

@section('content')

@if(Session::has('error'))

{{Session::get('error')}}

@endif

		<!-- Banner -->
  <div class="slider-content">
	<div class="row">
	<div class="col-sm-3 col-md-3">
		
	</div>
		<div class="col-sm-9 col-md-9">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						  
						  <div class="carousel-inner">
						     <div class="carousel-item active ">
                              <img class="d-block w-100" src="sliderImage/1546939032.jpg"  alt="First slide" style="height: 350px;">
                              <!-- <a href="" class="btn btn-success" style="position: absolute; top: 85%; left: 50%; transform: translate(-50%, -50%); font-size: 30px;">Buy Now</a> -->

                            </div>
                            @foreach($slider as $sliders)
                            <?php $url=url('sliderImage/'.$sliders->image); 
                                ?>

						    <div class="carousel-item ">
                              <a href="{{ asset('/subProduct/' .$sliders->sub_categories_id. '/' .$sliders->title)}}"><img class="d-block w-100" src="{{$url}}"  alt="Snow" style="height: 350px;"></a>
                                <!-- <a href="{{ asset('/subProduct/' .$sliders->sub_categories_id)}}" class="btn btn-success" style="position: absolute; top: 85%; left: 50%; transform: translate(-50%, -50%); font-size: 30px;">Buy Now</a> -->

                            </div>
                            @endforeach()
						    
						  </div>
						  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>
					  </div>
		</div>
		
		</div>
	</div>
	   <div class="content">
        <div class="container">
        <div class="col-md-12 section-title">
                    <h2 class="headerText" align="left">Gallery</h2>
        </div> <!-- /.section -->
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="services">
                    <div id="owl-demo" class="owl-carousel owl-theme" align="center;">
                        @foreach($service as $services)

                        <?php $url=url('serviceImage/'.$services->image); 
                            
                                ?>

                <div class="item"><img src="{{$url}}" style="height: 200px; width: 250px;"></div>

                         @endforeach()
                 

                  </div>
                </div>
            </div>
        </div>


    </div>

	<div class="content">
		<div class="container">
		<div class="col-md-12 section-title">
                    <h2 class="headerText" align="left">Featured Product</h2>
                    
        </div> <!-- /.section -->
        </div>
        <div class="container-fluid">
        	<div class="row">
        		<div class="col-sm-12 col-md-12 col-lg-12">
        			<!-- Top Start hear -->
        			 <section class="newproduct bgwhite p-t-45 p-b-105">
        <div class="row" style="margin-bottom: 0px;">

@foreach($product as $products)
    <div class="col-sm-3 col-md-3"> 
                        <div class="wrap-slick2">
                <div class="slick2">
                    <div class="item-slick2 p-l-15 p-r-15">
                        <div class="block2">
                            <figure class="snip1524">
                                <?php $url=url('productImage/'.$products->product_image); 
                            
                                ?>
                                <div class="block2-img wrap-pic-w of-hidden pos-relative ">
                               <img src="{{$url}}" alt="IMG-PRODUCT" style="width: 450px; height: 300px" >

                                
                            </div>
                              <figcaption>
                                <div class="block2-overlay trans-0-4">
                                    


                                        <div class="block2-btn-addcart w-size1 trans-0-4">
                                        <!-- Button -->
                                        
                                        <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" style="border-color:transparent;">
                                            Add to Cart
                                        </button>
                                    </div>
                                    <a href="{{asset('/productDetail/'.$products->id)}}" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                        <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                        <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                    </a>
                                <p style="margin-top: 50px;">{!!$products->product_short_description!!}</p>
                                </div>
                              </figcaption>
                              <a href="{{route('addToCart' ,$products->id)}}"></a>
                            </figure>
                            

                            <div class="block2-txt p-t-20">
                                <a href="{{asset('/productDetail/'.$products->id . '/' . $products-> product_name)}}" class="block2-name dis-block s-text3 p-b-5">
                                    {{$products->product_name}}
                                </a>

                                <span class="block2-price m-text6 p-r-5">
                                    ${{$products->product_normal_price}}.00
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        
    </div>
    @endforeach 
</section>        			<!-- End top product -->
        		</div>
        	</div>
		</div>
	</div>

	<div class="content">
		<div class="container-fluid">

			 <!--Category Product Start  -->

              <div class="row">
        <div class="col-sm-12 col-md-6 ">
            <div class="container">
            <div class="col-md-12 section-title">
                        <h2 class="headerText" align="left">Tibetan Collection</h2>
            </div> <!-- /.section -->
            </div>


    <section class="newproduct bgwhite p-t-45 p-b-105" style="border-right: 1px solid #dddddd;">
        <div class="row">

            <!-- Loop Start Here -->
            @foreach($Cproduct as $Cproducts)

    <div class="col-sm-6 col-md-12 col-lg-6"> 


    
                    <div class="wrap-slick2">
                <div class="slick2">
                    <div class="item-slick2 p-l-15 p-r-15">
                        <?php $url=url('productImage/'.$Cproducts->product_image); 
                            
                                ?>
                        <div class="block2">
                            <figure class="snip1524">
                                <div class="block2-img wrap-pic-w of-hidden pos-relative ">
                                <img src="{{$url}}" alt="IMG-PRODUCT" style="width: 400px; height: 250px"">

                                
                            </div>
                              <figcaption>
                                <div class="block2-overlay trans-0-4">
                                    



                                    <div class="block2-btn-addcart w-size1 trans-0-4">
                                        <!-- Button -->
                                        
                                        <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" style="border-color:transparent;">
                                            Add to Cart
                                        </button>
                                    </div>
                                    <a href="{{asset('/productDetail/')}}" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                        <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                        <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                    </a>
                                <p style="margin-top: 50px;">{!!$Cproducts->product_short_description!!} </p>
                                </div>
                              </figcaption>
                              <a href="{{route('addToCart' ,$products->id)}}"></a>
                            </figure>
                            

                            <div class="block2-txt p-t-20">
                                <a href="{{asset('/productDetail/'.$Cproducts->id . '/' .$Cproducts-> product_name )}}" class="block2-name dis-block s-text3 p-b-5">
                                    {{$Cproducts->product_name}}
                                </a>

                                <span class="block2-price m-text6 p-r-5">
                                    ${{$Cproducts->product_normal_price}}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
    

    </div>
    @endforeach
    <!-- Loop End Here -->

            </div>
        </section>
     </div>



        <div class="col-sm-12 col-md-6">
            <div class="container">
            <div class="col-md-12 section-title">
                        <h2  class="headerText" align="left">Malas Beads</h2>
            </div> <!-- /.section -->
            </div>

            <section class="newproduct bgwhite p-t-45 p-b-105">
        <div class="row" >
            <!--Loop Start Here --> 
            @foreach($Coproduct as $Coproducts)
    <div  class="col-sm-6 col-md-12 col-lg-6"> 


    
                    <div class="wrap-slick2">
                <div class="slick2">
                    <div class="item-slick2 p-l-15 p-r-15">
                        <?php $url=url('productImage/'.$Coproducts->product_image); 
                            
                                ?>
                        <div class="block2">
                            <figure class="snip1524">
                                <div class="block2-img wrap-pic-w of-hidden pos-relative ">
                                <img src="{{$url}}" alt="IMG-PRODUCT" style="width: 400px; height: 250px">

                                
                            </div>
                              <figcaption>
                                <div class="block2-overlay trans-0-4">
                                    



                                    <div class="block2-btn-addcart w-size1 trans-0-4">
                                        <!-- Button -->
                                        
                                        <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" style="border-color:transparent;">
                                            Add to Cart
                                        </button>
                                    </div>
                                    <a href="{{asset('/productDetail/'.$Coproducts->id)}}" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                        <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                        <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                    </a>
                                <p style="margin-top: 50px;">{!!$Coproducts->product_short_description!!} </p>
                                </div>
                              </figcaption>
                              <a href="{{route('addToCart' ,$products->id)}}"></a>
                            </figure>
                            

                            <div class="block2-txt p-t-20">
                                <a href="{{asset('/productDetail/'.$Coproducts->id. '/' .$Coproducts-> product_name)}}" class="block2-name dis-block s-text3 p-b-5">
                                    {{$Coproducts->product_name}}
                                </a>

                                <span class="block2-price m-text6 p-r-5">
                                    ${{$Coproducts->product_normal_price}}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
    

    </div>

    <!--Loop End Hear -->

    @endforeach

    
    </div>
</section>


        </div>
    </div>

             <!-- End Category Product   -->
		</div>
	</div>

	<div class="content">
		<div class="container">
		<div class="col-md-12 section-title">
                    <h2 class="headerText" align="left">Recent product</h2>
        </div> <!-- /.section -->
        </div>
        <div class="container-fluid">
        	<div class="row">
                <div class="col-sm-12 col-md-12 col-lg-3 " style="margin-left: 10px;">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-lg-12">
                        <section class="newproduct bgwhite p-b-105">
                        <div class="row">
                            <div class="single-sidebar-widget ads-widget">
                                <?php $url=url('galleryImage/'.'Banner_First.gif'); 
                                ?>
                                <img class="img-fluid" src="{{$url}}" alt="">
                            </div>
                        </div>
                    </section>
                    </div>
                    
                    <div class="col-md-6 col-sm-6 col-lg-12">
                        <section class="newproduct bgwhite p-b-105">
                        <div class="row">
                            <div class="single-sidebar-widget ads-widget">
                                <?php $url=url('galleryImage/'.'Banner_Second.gif'); 
                                ?>
                                <img class="img-fluid" src="{{$url}}" alt="">
                            </div>
                        </div>
                    </section>
                    </div>
                    </div>
                    
                </div>
        		<div class="col-sm-12 col-md-12 col-lg-8">
        		 <!-- Recent Product Start -->


                    <section class="newproduct bgwhite p-t-45 p-b-105">
        <div class="row" style="margin-bottom: 5px;">

@foreach($recentproduct as $products)
    <div class="col-sm-3 col-md-3"> 
                        <div class="wrap-slick2">
                <div class="slick2">
                    <div class="item-slick2 p-l-15 p-r-15">
                        <div class="block2">
                            <figure class="snip1524">
                                <?php $url=url('productImage/'.$products->product_image); 
                            
                                ?>
                                <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                                <img src="{{$url}}" alt="IMG-PRODUCT" style="width: 400px; height: 250px" >

                                
                            </div>
                              <figcaption>
                                <div class="block2-overlay trans-0-4">
                                    



                                    <div class="block2-btn-addcart w-size1 trans-0-4">
                                        <!-- Button -->
                                        
                                        <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" style="border-color:transparent;">
                                            Add to Cart
                                        </button>
                                    </div>
                                    <a href="{{asset('/productDetail/'.$products->id)}}" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                        <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                        <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                    </a>
                                <p style="margin-top: 5px;">{!!$products->product_short_description!!}</p>
                                </div>
                              </figcaption>
                              <a href="{{route('addToCart' ,$products->id)}}"></a>
                            </figure>
                            

                            <div class="block2-txt p-t-20">
                                <a href="{{asset('/productDetail/'.$products->id. '/' .$products->product_name)}}" class="block2-name dis-block s-text3 p-b-5">
                                    {{$products->product_name}}
                                </a>

                                <span class="block2-price m-text6 p-r-5">
                                    ${{$products->product_normal_price}}.00
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        
    </div>
    @endforeach 
</section>

               <!-- End Recent Product -->
        		</div>
        		
        	</div>
		</div>
	</div>


	<div class="content">
		<div class="container-fluid">
			 <!--Category Product Start  -->

              <div class="row">
        <div class="col-sm-12 col-md-6 ">
            <div class="container">
            <div class="col-md-12 section-title">
                        <h2 class="headerText" align="left">Top Product</h2>
            </div> <!-- /.section -->
            </div>


    <section class="newproduct bgwhite p-t-45 p-b-105" style="border-right: 1px solid #dddddd;">
        <div class="row">

            <!-- Loop Start Here -->
            @foreach($Co5product as $Cproducts)

    <div class="col-sm-6 col-md-12 col-lg-6"> 


    
                    <div class="wrap-slick2">
                <div class="slick2">
                    <div class="item-slick2 p-l-15 p-r-15">
                        <?php $url=url('productImage/'.$Cproducts->product_image); 
                            
                                ?>
                        <div class="block2">
                            <figure class="snip1524">
                                <div class="block2-img wrap-pic-w of-hidden pos-relative ">
                                <img src="{{$url}}" alt="IMG-PRODUCT" style="width: 400px; height: 250px">

                                
                            </div>
                              <figcaption>
                                <div class="block2-overlay trans-0-4">
                                    



                                    <div class="block2-btn-addcart w-size1 trans-0-4">
                                        <!-- Button -->
                                        
                                        <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" style="border-color:transparent;">
                                            Add to Cart
                                        </button>
                                    </div>
                                    <a href="{{asset('/productDetail/'.$Cproducts->id)}}" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                        <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                        <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                    </a>
                                <p style="margin-top: 50px;">{!!$Cproducts->product_short_description!!} </p>
                                </div>
                              </figcaption>
                              <a href="{{route('addToCart' ,$products->id)}}"></a>
                            </figure>
                            

                            <div class="block2-txt p-t-20">
                                <a href="{{asset('/productDetail/'.$Cproducts->id. '/' .$Cproducts-> product_name )}}" class="block2-name dis-block s-text3 p-b-5">
                                    {{$Cproducts->product_name}}
                                </a>

                                <span class="block2-price m-text6 p-r-5">
                                    ${{$Cproducts->product_normal_price}}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
    

    </div>
    @endforeach
    <!-- Loop End Here -->

            </div>
        </section>
     </div>



        <div class="col-sm-12 col-md-6">
            <div class="container">
            <div class="col-md-12 section-title">
                        <h2 class="headerText" align="left">Top Product</h2>
            </div> <!-- /.section -->
            </div>

            <section class="newproduct bgwhite p-t-45 p-b-105">
        <div class="row" >
            <!--Loop Start Here --> 
            @foreach($Co4product as $Coproducts)
    <div  class="col-sm-6 col-md-12 col-lg-6"> 


    
                    <div class="wrap-slick2">
                <div class="slick2">
                    <div class="item-slick2 p-l-15 p-r-15">
                        <?php $url=url('productImage/'.$Coproducts->product_image); 
                            
                                ?>
                        <div class="block2">
                            <figure class="snip1524">
                                <div class="block2-img wrap-pic-w of-hidden pos-relative ">
                                <img src="{{$url}}" alt="IMG-PRODUCT" style="width: 400px; height: 250px">

                                
                            </div>
                              <figcaption>
                                <div class="block2-overlay trans-0-4">
                                    



                                    <div class="block2-btn-addcart w-size1 trans-0-4">
                                        <!-- Button -->
                                        
                                        <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" style="border-color:transparent;">
                                            Add to Cart
                                        </button>
                                    </div>
                                    <a href="productDetail" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                        <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                        <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                    </a>
                                <p style="margin-top: 50px;">{!!$Coproducts->product_short_description!!} </p>
                                </div>
                              </figcaption>
                              <a href="{{route('addToCart' ,$products->id)}}"></a>
                            </figure>
                            

                            <div class="block2-txt p-t-20">
                                <a href="{{asset('/productDetail/'.$Coproducts->id. '/' .$Coproducts-> product_name )}}" class="block2-name dis-block s-text3 p-b-5">
                                    {{$Coproducts->product_name}}
                                </a>

                                <span class="block2-price m-text6 p-r-5">
                                    ${{$Coproducts->product_normal_price}}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
    

    </div>

    <!--Loop End Hear -->

    @endforeach

    
    </div>
</section>


        </div>
    </div>


<!-- Slider Start Heare -->
<div class="slider-content">
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                          
                          <div class="carousel-inner" style="padding-top: 50px;">
                             <div class="carousel-item active ">
                              <img class="d-block w-100" src="sliderImage/1546939691.jpg"  alt="First slide" style="height: 350px;">

                            </div>
                            @foreach($sliderTwo as $sliderTwos)
                            <?php $url=url('sliderImage/'.$sliderTwos->image); 
                                ?>

                            <div class="carousel-item ">
                              <img class="d-block w-100" src="{{$url}}"  alt="First slide" style="height: 350px;">

                            </div>
                            @endforeach()
                            
                          </div>
                          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only" hidden>Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only" hidden>Next</span>
                          </a>
                      </div>
        </div>
        
        </div>
    </div>

<!-- Slider End Hear-->

             <!-- End Category Product   -->
		</div>
	</div>
	
    <!-- Hot Sell product  start hear -->
    <div class="content">
        <div class="container">
        <div class="col-md-12 section-title">
                    <h2 class="headerText" align="left">Hot Best Sellers</h2>
        </div> <!-- /.section -->
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-9">
                 <!-- Recent Product Start -->


                    <section class="newproduct bgwhite p-t-45 p-b-105">
        <div class="row" style="margin-bottom: 50px;">

@foreach($hotProduct as $hotProducts)
    <div class="col-sm-3 col-md-3"> 
                        <div class="wrap-slick2">
                <div class="slick2">
                    <div class="item-slick2 p-l-15 p-r-15">
                        <div class="block2">
                            <figure class="snip1524">
                                <?php $url=url('productImage/'.$hotProducts->product_image); 
                            
                                ?>
                                <div class="block2-img wrap-pic-w of-hidden pos-relative">
                                <img src="{{$url}}" alt="IMG-PRODUCT" style="width: 400px; height: 250px" >

                                
                            </div>
                              <figcaption>
                                <div class="block2-overlay trans-0-4">
                                    



                                    <div class="block2-btn-addcart w-size1 trans-0-4">
                                        <!-- Button -->
                                        
                                        <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" style="border-color:transparent;">
                                            Add to Cart
                                        </button>
                                    </div>
                                    <a href="{{asset('/productDetail/'.$hotProducts->id)}}" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                        <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                        <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                    </a>
                                <p style="margin-top: 50px;">{!!$hotProducts->product_short_description!!}</p>
                                </div>
                              </figcaption>
                              <a href="{{route('addToCart' ,$products->id)}}"></a>
                            </figure>
                            

                            <div class="block2-txt p-t-20">
                                <a href="{{asset('/productDetail/'.$products->id. '/' . $products-> product_name )}}" class="block2-name dis-block s-text3 p-b-5">
                                    {{$hotProducts->product_name}}
                                </a>

                                <span class="block2-price m-text6 p-r-5">
                                    ${{$hotProducts->product_normal_price}}.00
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        
    </div>
    @endforeach 
</section>

               <!-- End Recent Product -->
                </div>
                <div class="col-sm-12 col-md-12 col-lg-3 " style="padding:4% 4% 4% 4%;">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-lg-12">
                        <section class="newproduct bgwhite p-b-105">
                        <div class="row">
                            <div class="single-sidebar-widget ads-widget">
                                <?php $url=url('galleryImage/'.'Banner_Third.gif'); 
                                ?>
                                <img class="img-fluid" src="{{$url}}" alt="">
                            </div>
                        </div>
                    </section>
                    </div>
                
                    <div class="col-md-6 col-sm-6 col-lg-12">
                        <section class="newproduct bgwhite p-b-105">
                        <div class="row">
                            <div class="single-sidebar-widget ads-widget">
                                <?php $url=url('galleryImage/'.'Banner_Fourth.gif'); 
                                ?>
                                <img style="padding-top: 10px;" class="img-fluid" src="{{$url}}" alt="">
                            </div>
                        </div>
                    </section>
                    </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>


    <!-- Hot Sell product  End hear -->

    <!-- Recently Visite Product start hera-->

    <div class="content">
        <div class="container">
        <div class="col-md-12 section-title">
                    <h2 class="headerText" align="left">Recently Visit</h2>
        </div> <!-- /.section -->
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <!-- Top Start hear -->
                     <section class="newproduct bgwhite p-t-45 p-b-105">
        <div class="row" style="margin-bottom: 0px;">

@foreach($product as $products)
    <div class="col-sm-3 col-md-3"> 
                        <div class="wrap-slick2">
                <div class="slick2">
                    <div class="item-slick2 p-l-15 p-r-15">
                        <div class="block2">
                            <figure class="snip1524">
                                <?php $url=url('productImage/'.$products->product_image); 
                            
                                ?>
                                <div class="block2-img wrap-pic-w of-hidden pos-relative ">
                               <img src="{{$url}}" alt="IMG-PRODUCT" style="width: 450px; height: 300px" >

                                
                            </div>
                              <figcaption>
                                <div class="block2-overlay trans-0-4">
                                    



                                     <div class="block2-btn-addcart w-size1 trans-0-4">
                                        <!-- Button -->
                                        
                                        <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" style="border-color:transparent;">
                                            Add to Cart
                                        </button>
                                    </div>
                                    <a href="{{asset('/productDetail/'.$products->id)}}" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                        <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                        <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                    </a>
                                <p style="margin-top: 50px;">{!!$products->product_short_description!!}</p>
                                </div>
                              </figcaption>
                              <a href="{{route('addToCart' ,$products->id)}}"></a>
                            </figure>
                            

                            <div class="block2-txt p-t-20">
                                <a href="{{asset('/productDetail/'.$products->id. '/' .$products-> product_name )}}" class="block2-name dis-block s-text3 p-b-5">
                                    {{$products->product_name}}
                                </a>

                                <span class="block2-price m-text6 p-r-5">
                                    ${{$products->product_normal_price}}.00
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        
    </div>
    @endforeach 
</section>                  <!-- End top product -->
                </div>
            </div>
        </div>
    </div>

    <!-- Recently visite Product end hear-->


	
	<div class="content">
		<div class="container">
		<div class="col-md-12 section-title">
                    <h2 class="headerText" align="left">Best  Blog</h2>
        </div> <!-- /.section -->
        </div>
        <div class="container-fluid">
        	<div class="row">

        		<!-- Blog Start Hear -->
@foreach($blog as $blogs)


<div class="col-sm-3 col-md-3">
    <?php $url=url('blogImage/'.$blogs->image); 
                                ?>

   <div class="blog-card spring-fever" style=" background: {{$url}} center no-repeat;">
    <img src="{{$url}}" style="height: 300px; width: 300px;">
  <div class="title-content">
    <h3><a href="blogDetail">{{$blogs->blog_title}}</a></h3>
  </div>
  <div class="card-info">
    {!!$blogs->blog_content!!}}
    <a href="{{ asset('/blogDetail/' .$blogs->id)}}">Read Article<span class="licon icon-arr icon-black"></span></a>
  </div>
  <div class="gradient-overlay"></div>
  <div class="color-overlay"></div>
</div><!-- /.blog-card -->
</div>
@endforeach
</div>



                <!-- End Blog -->
        	</div>
		</div>
	</div>

  @endsection