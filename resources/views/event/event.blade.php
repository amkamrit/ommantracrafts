@extends('layouts.front.appFrontSec')



@section('content')

<!--events section -->
<section class="pt100 pb100">
    <div class="container">
        <div class="container">
        <div class="col-md-12 section-title">
                    <h2>Event</h2>
        </div> <!-- /.section -->
        </div>
        <div class="row justify-content-center">
            <!--blog section start -->

        <div class="col-12 col-md-8">


            @foreach($blog as $blogs)
             <div class="tz-gallery">
                <div class="blog_card">
                    <div class="thumbnail">
                        <?php $url=url('serviceImage/'.$blogs->event_image); 
                                ?>
                    <a class="lightbox" href="{{$url}}">
                        <img src="{{$url}}" alt="Image Name" style="width: 100%;">
                    </a>
                     <div class="blog_box_data" style="padding: 5%;">
                        <div class="blog_meta">
                             <span> Uploaded On:  {{$blogs->created_at->format('Y-m-d')}}</span>
                        </div>
                        <h5>
                            {{$blogs->event_title}}
                        </h5>

                      <!--   <div style="margin-bottom:5px;">
                            <span style="background:grey; border-radius:8px; color:white;padding:3px;font-size:10px; margin-right:4px;"> #blogs</span>
                            <span style="background:grey; border-radius:8px; color:white;padding:3px;font-size:10px; margin-right:4px;"> #adventure</span>
                            <span style="background:grey; border-radius:8px; color:white;padding:3px;font-size:10px; margin-right:4px;"> #fun</span>
                            <span style="background:grey; border-radius:8px; color:white;padding:3px;font-size:10px; margin-right:4px;"> #tags</span>
                        </div> -->

                        <p class="blog_word">
                            {!!str_limit($blogs->event_content, 400)!!}

                            <a class="readmore_btn" href="{{ asset('/eventDetail/' .$blogs->id)}}">...read more</a>

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
                            Event 
                        </h4>
                        <ul>
                         

                    @foreach($blog as $blogs)

                            <li>
                                <?php $url=url('serviceImage/'.$blogs->event_image); 
                                ?>
                                <div class="widget_recent_posts">
                                    <img src="{{$url}}" alt="news">
                                    <div class="widget_content">
                                        <a href="{{ asset('/eventDetail/' .$blogs->id)}}">{{$blogs->event_title}}</a><br>
                                        Uploaded On:  {{$blogs->created_at->format('Y-m-d')}}
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