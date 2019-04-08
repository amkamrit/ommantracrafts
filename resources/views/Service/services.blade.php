@extends('layouts.front.appFrontSec')



@section('content')

<!--events section -->
<section class="pt100 pb100">
    <div class="container">
        <div class="container">
        <div class="col-md-12 section-title">
                    <h2>Blogs</h2>
        </div> <!-- /.section -->
        </div>
        <div class="row justify-content-center">
            <!--blog section start -->

        <div class="col-12 col-md-8">


            @foreach($blog as $blogs)
             <div class="tz-gallery">
                <div class="blog_card">
                    <div class="thumbnail">
                    <a class="lightbox" href="asset/image/4.jpg">
                        <img src="asset/image/4.jpg" alt="Image Name" style="width: 100%;">
                    </a>
                     <div class="blog_box_data" style="padding: 5%;">
                        <div class="blog_meta">
                             <span> Uploaded On:  22-12-2016</span>
                        </div>
                        <h5>
                            {{$blogs->blog_title}}
                        </h5>

                        <div style="margin-bottom:5px;">
                            <span style="background:grey; border-radius:8px; color:white;padding:3px;font-size:10px; margin-right:4px;"> #blogs</span>
                            <span style="background:grey; border-radius:8px; color:white;padding:3px;font-size:10px; margin-right:4px;"> #adventure</span>
                            <span style="background:grey; border-radius:8px; color:white;padding:3px;font-size:10px; margin-right:4px;"> #fun</span>
                            <span style="background:grey; border-radius:8px; color:white;padding:3px;font-size:10px; margin-right:4px;"> #tags</span>
                        </div>

                        <p class="blog_word">
                            {{$blogs->blog_content}}

                            Mar 10, 2017 - HTML5 allows you create responsive banner ads that are adjusted with any screen or device. Learn how to design responsive HTML5 banner ...
                            About responsive ads - AdWords Help - Google<a class="readmore_btn" href="{{ asset('/blogDetail/' .$blogs->id)}}">...read more</a>

                        </p>

                    </div>
                </div>
                </div>
            </div>

@endforeach

          
        </div>

            <!--blog section end-->

            <!--sidebar section -->
            <div class="col-12 col-md-4">
                <div class="sidebar" >

                    <div class="widget widget_latest_post">
                        <h4 class="widget-title">
                            Best Blogs 
                        </h4>
                        <ul>
                         

                    @foreach($blog as $blogs)

                            <li>
                                <div class="widget_recent_posts">
                                    <img src="asset/image/2.jpg" alt="news">
                                    <div class="widget_content">
                                        <a href="{{ asset('/blogDetail/' .$blogs->id)}}">{{$blogs->blog_title}}</a>
                                        <p>on Aug 25, 2017</p>
                                    </div>
                                </div>
                            </li>
                    @endforeach

                            
                           
                        </ul>
                    </div>
                </div>
            </div>
            <!--sidebar section end -->

        </div>
    </div>
</section>
<!--event section end -->

 @endsection