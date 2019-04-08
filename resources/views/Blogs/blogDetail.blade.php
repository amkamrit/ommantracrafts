@extends('layouts.front.appFrontSec')



@section('content')
<section class="pt100 pb100">
    <div class="container">
        <div class="container">
        <div class="col-md-12 section-title">
                    <h2>Blog </h2>
        </div> <!-- /.section -->
        </div>
        <div class="row justify-content-center">
            <!--blog section start -->

        <div class="col-12 col-md-8">
            <div class="tz-gallery">
                <div class="blog_card">
                    <div class="thumbnail">
                        <?php $url=url('blogImage/'.$blogs->image); 
                                ?>
                    <a class="lightbox" href="{{$url}}">
                        
                        <img src="{{$url}}" alt="Image Name" style="width: 100%;">
                    </a>
                     <div class="blog_box_data" style="padding: 5%;">
                        <div class="blog_meta">
                             <span> Uploaded On:  {{$blogs->created_at->format('Y-m-d')}}</span>
                        </div>
                        <h5>
                            {{$blogs->blog_title}}
                        </h5>

                        <!-- <div style="margin-bottom:5px;">
                            <span style="background:grey; border-radius:8px; color:white;padding:3px;font-size:10px; margin-right:4px;"> #blogs</span>
                            <span style="background:grey; border-radius:8px; color:white;padding:3px;font-size:10px; margin-right:4px;"> #adventure</span>
                            <span style="background:grey; border-radius:8px; color:white;padding:3px;font-size:10px; margin-right:4px;"> #fun</span>
                            <span style="background:grey; border-radius:8px; color:white;padding:3px;font-size:10px; margin-right:4px;"> #tags</span>
                        </div> -->

                        <p class="blog_word">
                            {!!$blogs->blog_content!!}
                            

                        </p>

                    </div>
                </div>
                </div>
            </div>
          
        </div>

            <!--blog section end-->

            <!--sidebar section -->
            <div class="col-12 col-md-4">
                <div class="sidebar" >

                    <div class="widget widget_latest_post">
                        <h4 class="widget-title">
                            Related Blog
                        </h4>
                        <ul>
                            
                               
                            @foreach($blog as $blogs)

                            <li>
                                <div class="widget_recent_posts">
                                    <?php $url=url('blogImage/'.$blogs->image); 
                                ?>
                                    <img src="{{$url}}" alt="news">
                                    <div class="widget_content">
                                        <a href="{{ asset('/blogDetail/' .$blogs->id)}}">{{$blogs->blog_title}}</a>
                                        <p>on {{$blogs->created_at->format('Y-m-d')}}</p>
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
