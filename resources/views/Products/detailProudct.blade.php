@extends('layouts.front.appFrontSec')



@section('content')


        <div class="container-fluid content">
        
        <!-- /.row -->
        <div class="row">
            <div class="col-md-3">
                <div>
                    <a href="#" class="list-group-item active">Categories
                    </a>
                    <ul class="list-group">
                      @foreach($subCategory as $subCategorys)
                      <meta name="keywords" content="{{$subCategorys->meta_keyword}}">
                      <meta name="description" content="{{$subCategorys->meta_description}}">
                        <a href="{{ asset('subProduct/' .$subCategorys->id . '/' .$subCategorys->sub_category_name )}}"><li class="list-group-item">{{$subCategorys->sub_category_name}}
                        </li></a>
                        @endforeach
                    </ul>
                </div>
               <div style="margin-top:8px;">
                <div class="single-sidebar-widget ads-widget">
                  <?php $url=url('productImage/'.$singleproduct->product_image); 
                            
                                ?>
          <!-- <img class="img-fluid" src="{{$url}}" alt="" > -->
        </div>
               </div>

              
                <!-- /.div -->
               
            </div>
           

            <div class="col-md-8">
               

             <div class="card" >
              <h6 align="center" style="text-align: justify; font-size: 15px; color: black; padding: 20px; line-height: 20px;">{!! $CategoryDescription->category_description !!}</h6><hr>

        <div class="wrapper row">

                        
                      
          <div class="col-md-1"></div>


          <div class="preview col-md-5">


            
    <div class="sp-wrap">


      <a href="{{$url}}"><img src="{{$url}}" alt=""></a>
      @foreach($featureImage as $featureImages)
        <?php $url=url('productImage/'.$featureImages->feature_image); 
                            
                                ?>
      
      <a href="{{$url}}"><img src="{{$url}}" alt=""></a>
      @endforeach
    </div>
            
          </div>
         <div class="col-sm-6 col-md-6 col-lg-6">
        <!-- product -->
      <div class="product-content clearfix product-deatil">
          
            <div class="name">
              <blockquote class="blockquote">
             <h2> {{$singleproduct->product_name}}</h2>
                <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
          
              <small>Average Rating : 4</small>
                </blockquote>       
            </div>
           
            <hr>
            
            <h3 class="price-container">
             <strike> ${{$singleproduct->product_normal_price}}.00</strike><br>
             ${{$singleproduct->product_sell_price}}.00
              <small>*tax included</small>
            </h3>
            <hr>
            <form class="form-horizontal" enctype="multipart/form-data" action="" method="post">
                    
                 
                    <!-- <input type="hidden" name="id" value="<?php //echo $id;?>"> -->
                    <div align="right" style="padding: 5%;"> 
                    <a href="{{route('addToCart' ,$singleproduct->id)}}" type="button" class="btn btn-primary">Add To Cart
                      </a>
                      
                        
                      </button>
                    </div>
                </form>
         
                
          </div>
      </div>
      <!-- end product -->
    </div>
    <div class="row">
      <div class="col-md-12">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Product Detail</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Review</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
          <div class="advert_title"><a href="#">{!!$singleproduct->product_short_description !!}</a></div>
          <div class="advert_text">{!! $singleproduct->product_long_description !!}</div>
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <div class="advert_title"><a href="#">Trends 2018</a></div>
          <div class="advert_text">Lorem ipsum dolor sit amet, consectetur adipiscing Donec et.</div>
  </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
        <div class="well well-sm">
            <div class="text-right">
                <a class="btn  btn-primary" href="#reviews-anchor" id="open-review-box">Leave a Review</a>
            </div>
        
            <div class="row" id="post-review-box" style="display:none; max-width: 70%;">
                <div class="col-md-12">

                      {!! Form::open(['route'=>'review' , 'files'=>true]) !!}
                      
                              <div align="right" style="padding-bottom: 5px;">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                              </div>
                              <input type="hidden" value="{{$singleproduct->id}}" name="product_id" >
                        <textarea class="form-control animated" cols="50" id="new-review" name="comment" placeholder="Enter your review here..." rows="5"></textarea>
        
                        <div class="text-right">
                            <div class="stars star" data-rating="0"></div>
                            {{Form::submit('Create', array('class'=> 'btn btn-md btn-primary'))}}
                           
                        </div>
                    </form>

                   
                </div>
            </div>
        </div>

        <!-- <div class="review-block">
          <div class="row">
            <div class="col-sm-4">
              <img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded">
              <div class="review-block-name"><a href="#">Aakash Karkee</a></div>
              <div class="review-block-date">January 29, 2016<br/>1 day ago</div>
            </div>
            <div class="col-sm-8">
              <div class="review-block-rate">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
              </div>
              <div class="review-block-description">this was nice in buy. this was nice in buy. </div>
            </div>
          </div> -->
          <hr/> 
          
        </div>

</div>
      </div>
    </div>
     </div>
            <!-- /.col -->
            
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
        


  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-12 section-title">
                    <h2>related products</h2>
        </div> <!-- /.section -->
<section class="newproduct bgwhite p-t-45 p-b-105">
    <div class="row">
  

  @foreach($relatedProduct as $relatedProducts)

  <div class="col-sm-3 col-md-3"> 
          <div class="wrap-slick2">
        <div class="slick2">
          <div class="item-slick2 p-l-15 p-r-15">
            <div class="block2">
              <?php $url=url('productImage/'.$relatedProducts->product_image);?>
              <figure class="snip1524">
                <div class="block2-img wrap-pic-w of-hidden pos-relative ">
                <img src="{{$url}}" alt="IMG-PRODUCT" style="width: 450px; height: 300px">

                
              </div>
                <figcaption>
                  <div class="block2-overlay trans-0-4">
                  



                  <div class="block2-btn-addcart w-size1 trans-0-4">
                    <!-- Button -->
                    
                    <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" style="border-color:transparent;">
                      Add to Cart
                    </button>
                  </div>
                  <a href="{{asset('/productDetail/'.$relatedProducts->id . '/' .$relatedProducts->product_name)}}" class="block2-btn-addwishlist hov-pointer trans-0-4">
                    <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                    <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                  </a>
                  <p style="margin-top: 50px;">{!!$relatedProducts->product_short_description!!} </p>
                </div>
                </figcaption>
                <a href="{{route('addToCart' ,$relatedProducts->id)}}"></a>
              </figure>
              

              <div class="block2-txt p-t-20">
                <a href="{{asset('/productDetail/'.$relatedProducts->id . '/' .$relatedProducts->product_name)}}" class="block2-name dis-block s-text3 p-b-5">
                  {{$relatedProducts->product_name}}
                </a>

                <span class="block2-price m-text6 p-r-5">
                  ${{$relatedProducts->product_normal_price}}.00
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    
  </div>

 
@endforeach
@foreach($relatedProduct as $relatedProducts)

  <!-- <div class="col-sm-3 col-md-3"> 
          <div class="wrap-slick2">
        <div class="slick2">
          <div class="item-slick2 p-l-15 p-r-15">
            <div class="block2">
              
              <figure class="snip1524">
                <div class="block2-img wrap-pic-w of-hidden pos-relative">
                <img src="" alt="IMG-PRODUCT" style="width: 450px; height: 300px" >

                
              </div> -->
                <!-- <figcaption>
                  <div class="block2-overlay trans-0-4">
                  



                  <div class="block2-btn-addcart w-size1 trans-0-4"> -->
                    <!-- Button -->
                    
                    <!-- <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" style="border-color:transparent;">
                      Add to Cart
                    </button>
                  </div>
                  <a href="{{asset('/productDetail/'.$relatedProducts->id)}}" class="block2-btn-addwishlist hov-pointer trans-0-4">
                    <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                    <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                  </a>
                  <p style="margin-top: 50px;">{{$relatedProducts->product_short_description}} </p>
                </div>
                </figcaption>
                <a href="{{route('addToCart' ,$relatedProducts->id)}}"></a>
              </figure>
              

              <div class="block2-txt p-t-20">
                <a href="productDetail.php" class="block2-name dis-block s-text3 p-b-5">
                  {{$relatedProducts->product_name}}
                </a>

                <span class="block2-price m-text6 p-r-5">
                  ${{$relatedProducts->product_normal_price}}.oo
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    
  </div> -->

 
@endforeach
  </div>
</section>

                    <!-- /.col -->
                    
</div>
</div>

  @endsection