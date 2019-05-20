
</head>

<body>

<div class="super_container">
	
	<!-- Header -->
	
	<header class="header">
		<div class="col-md-12" align="center">
			<section class="image-slider" align="center">
		  <div class="card--content"><img src="{{asset('images/aaa.jpg')}}" style="width: 100%" alt=""></div>
		  <!-- <div class="card--content"><img src="{{asset('asset/image/topbanner.jpg')}}" alt=""></div>
		  <div class="card--content"><img src="{{asset('asset/image/topbanner.jpg')}}" alt=""></div>
		  <div class="card--content"><img src="{{asset('asset/image/topbanner.jpg')}}" alt=""></div> -->

		</section>
		</div>

		<!-- Top Bar -->

		<!-- Header Main -->

		<div class="header_main">
			<div class="container">
				<div class="row">

					<!-- Logo -->
					<div class="col-lg-2 col-sm-3 col-3 order-1">
						<div class="logo_container">
							<div class="logo"><a href="{{asset('./')}}" style="font-size: 25px;"><img src="{{asset('images/logo.jpg')}}" height="100px" width="100px"></a></div>
						</div>
					</div>

					<!-- Search -->
					<div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
						<div class="header_search">
							<div class="header_search_content">
								<div class="header_search_form_container">
									<form action="{{asset('search')}}" method="post" class="header_search_form clearfix">
										{{csrf_field()}}
										<input type="search" required="required" class="header_search_input" placeholder="Search for products..." name="search">
										<button type="submit" class="header_search_button trans_300" value="Submit"><img src="{{asset('asset/image/search.png')}}" alt=""></button>
									</form>
								</div>
							</div>
						</div>
					</div>

					<!-- Wishlist -->
					<div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
						<div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
							<div class="wishlist d-flex flex-row align-items-center justify-content-end">
								
								
							</div>

							<!-- Cart -->
							<div class="cart">
								<div class="cart_container d-flex flex-row align-items-center justify-content-end">
									<div class="cart_icon">
										<img src="{{asset('asset/image/cart.png')}}" alt="">
										<div class="cart_count"><span>1</span></div>
									</div>
									<div class="cart_content">
										<div class="cart_text"><a href="{{asset('shopping_cart')}}">Cart</a></div>
										<div class="cart_price"><span class="badge">{{Session::has('cart') ? Session::get('cart')->totalQty: ''}}</span></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Main Navigation -->

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col">
						
						<div class="main_nav_content d-flex flex-row">

							<!-- Categories Menu -->

							<div class="cat_menu_container">
								<div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
									<div class="cat_burger"><span></span><span></span><span></span></div>
									<div class="cat_menu_text">categories</div>
								</div>

								<ul class="cat_menu">
								@foreach($category as $categorys)
									<li class="hassubs">
										<a href="{{ asset('/product/' .$categorys->id.'/'.$categorys->category_name)}}">{{$categorys->category_name}}<i class="fas fa-chevron-right"></i></a>
										<ul>
											@foreach($subCategory as $subCategorys)
											<?php

													$categoryse=$categorys->id;
													$subCategoryse=$subCategorys->main_category_id;
													if ($categoryse==$subCategoryse) {
											 ?>
											<li><a href="{{ asset('/subProduct/' .$subCategorys->id. '/'.$subCategorys->sub_category_name )}}">{{$subCategorys->sub_category_name}}<i class="fas fa-chevron-right"></i></a></li>
											<?php
													}
													else{
														
													}
											 ?>
											@endforeach
											
										</ul>
									</li>

									@endforeach
							
									
									
									
								</ul>
								
							</div>
				
							<!-- Main Nav Menu -->

							<div class="main_nav_menu ml-auto">
								<ul class="standard_dropdown main_nav_dropdown">
									
									<li><a href="{{asset('aboutUs')}}">About Us<i class="fas fa-chevron-down"></i></a></li>
									<li><a href="{{asset('customerLogin')}}">Login<i class="fas fa-chevron-down"></i></a></li>
									<li><a href="{{asset('/customerRegister')}}">Register<i class="fas fa-chevron-down"></i></a></li>
									<li>
									 <div class="btn-group">
					                    <a data-toggle="dropdown" style="color: #fff; cursor: pointer;"> 
					                        My Account
					                    </a>

					                    <div class="dropdown-menu">
					                        <a class="dropdown-item " style="color: black;" href="{{asset('customerLogin')}}">My Account</a>
					                        <a class="dropdown-item" style="color: black;" href="{{url('/customerLogin/logout')}}">Log Out</a>
					                    </div>
					                 </div>  
					             </li>
					             <li><a href="{{asset('contact')}}">Contact<i class="fas fa-chevron-down"></i></a></li>

								</ul>
							</div>

							<!-- Menu Trigger -->

							<div class="menu_trigger_container ml-auto">
								<div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
									<div class="menu_burger">
										<div class="menu_trigger_text">menu</div>
										<div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</nav>
		

		<div class="page_menu">
			<div class="container">
				<div class="row">
					<div class="col">
						
						<div class="page_menu_content">
							
							<div class="page_menu_search">
								<form action="#">
									<input type="search" required="required" class="page_menu_search_input" placeholder="Search for products..." name="search">
									<button type="submit" class="header_search_button trans_300" value="Submit"><img src="{{asset('asset/image/search.png')}}" alt=""></button>
								</form>
							</div>
							<ul class="page_menu_nav">
								
								<li class="page_menu_item">
									<a href="./">Home<i class="fa fa-angle-down"></i></a>
								</li>
								<li class="page_menu_item"><a href="blog.php">blog<i class="fa fa-angle-down"></i></a></li>
								<li class="page_menu_item"><a href="contactus.php">contact<i class="fa fa-angle-down"></i></a></li>
								<li class="page_menu_item"><a href="contactus.php">about us<i class="fa fa-angle-down"></i></a></li>
								<li><a href="{{asset('books')}}">Books<i class="fas fa-chevron-down"></i></a></li>
								<li>
								 <div class="btn-group">
					                    <a data-toggle="dropdown" style="color: #fff; cursor: pointer;"> 
					                        My Account
					                    </a>

					                    <div class="dropdown-menu">
					                        <a class="dropdown-item " style="color: black;" href="{{asset('customerLogin')}}">My Account</a>
					                        <a class="dropdown-item" style="color: black;" href="{{url('/customerLogin/logout')}}">Log Out</a>
					                    </div>
					                 </div> 
					            </li>
							</ul>
							
							<div class="menu_contact">
								<div class="menu_contact_item"><div class="menu_contact_icon"><img src="{{asset('asset/image/phone_white.png')}}" alt=""></div></div>
								<div class="menu_contact_item"><div class="menu_contact_icon"><img src="{{asset('asset/image/mail_white.png')}}" alt=""></div><a href="mailto:ommantranepal@gmail.com">ommantranepal@gmail.com</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Menu -->
	</header>
	


    