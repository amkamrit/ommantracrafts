@extends('layouts.front.appFrontSec')



@section('content')



		<div class="container-fluid category_content">
        <div class="row">
            <div class="col-md-12">
               
                <div class="main box-border">
                    <div id="mi-slider" class="mi-slider">
                        <ul>
                            @foreach($singleCategoryproduct as $singleCategoryproducts)

                                <?php $url=url('productImage/'.$singleCategoryproducts->product_image); 
                            
                                ?>

                            <li><a href="#">
                                <img src="{{$url}}" alt="img01" style="width: 450px; height: 300px" >{{$singleCategoryproducts->product_name}}
                            </a></li>

                            @endforeach
                        </ul>
                        <ul>
                            @foreach($singleCategoryproduct as $singleCategoryproducts)

                            <li><a href="#">
                                    <?php $url=url('productImage/'.$singleCategoryproducts->product_image); 
                            
                                ?>

                                <img src="{{$url}}" alt="img05" style="width: 450px; height: 300px">{{$singleCategoryproducts->product_name}}
                            </a></li>
                            @endforeach
                            
                            
                        </ul>
                        <nav>
                            <a href="#">Top Products</a>
                            <a href="#">New Products</a>
                        </nav>
                    </div>
                    
                </div>
                <br />
            </div>
            <!-- /.col -->
            
            <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="row">

            <div class="col-md-3">

                <div>
                    <a href="#" class="list-group-item active" style="background-color: #696969">Categories
                    </a>
                    <ul class="list-group" >

                       @foreach($subCategory as $subCategorys)
                        <meta name="keywords" content="{{$subCategorys->meta_keyword}}">
                      <meta name="description" content="{{$subCategorys->meta_description}}">
                        <a href="{{ asset('subProduct/' .$subCategorys->id .'/'. $subCategorys->sub_category_name)}}"><li class="list-group-item" style="color:#696969">{{$subCategorys->sub_category_name}}
                        </li></a>
                        @endforeach
                    </ul>
                </div>
               <div style="margin-top:8px;">
                <div class="single-sidebar-widget ads-widget">
                    <!-- <img class="img-fluid" src="{{asset('asset/image/sidebar-ads.jpg')}}" alt=""> -->
                </div>
               </div>


              
                <!-- /.div -->
               
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <h6 align="center" style="text-align: justify; font-size: 15px; color: black; padding: 20px; line-height: 25px;">
                    {!! $CategoryDescription->category_description !!}</h6><hr>
                <div>
                    <div class="section-title">
                    <h2>category name</h2>
                    </div> <!-- /.section -->
                </div>
                
                <!-- /.div -->
                <div class="row">
                    <div class="col-md-9"></div>
                    <div class="col-md-3">
                        <div class="btn-group">
                        <button type="button" class="btn btn-default"><strong>1235  </strong>items</button>
                       

                         <div class="dropdown btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                              Sort By
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">Name</a>
                            
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">Price</a>
                            
                            </div>
                          </div>
                    </div>
                    </div>
                    
                </div>
                <!-- /.row -->
                <div class="row">
                    

                    <section class="newproduct bgwhite p-t-45 p-b-105" style="max-width: 98%;">
        <div class="row">
    

    @foreach($singleCategoryproduct as $singleCategoryproducts)

    <div class="col-sm-3 col-md-3"> 
                    <div class="wrap-slick2">
                <div class="slick2">
                    <div class="item-slick2 p-l-15 p-r-15">
                        <div class="block2">
                            <figure class="snip1524">
                                <?php $url=url('productImage/'.$singleCategoryproducts->product_image); 
                            
                                ?>
                                <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
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
                                    <a href="{{route('addToCart' ,$singleCategoryproducts->id)}}" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                        <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                        <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                    </a>
                                <p style="margin-top: 50px;">{!!$singleCategoryproducts->product_short_description!!} </p>
                                </div>
                              </figcaption>
                              <a href="{{route('addToCart' ,$singleCategoryproducts->id)}}"></a>
                            </figure>
                            

                            <div class="block2-txt p-t-20">
                                <a href="{{asset('/productDetail/'.$singleCategoryproducts->id.'/'. $singleCategoryproducts->product_name)}}" class="block2-name dis-block s-text3 p-b-5">
                                    {{$singleCategoryproducts->product_name}}
                                </a>

                                <span class="block2-price m-text6 p-r-5">
                                    ${{$singleCategoryproducts->product_normal_price}}.00
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        
    </div>
@endforeach

    </div>
</section>

                    <!-- /.col -->
                </div>
               
                
                <!-- /.row -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

  @endsection