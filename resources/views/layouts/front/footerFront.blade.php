	<!-- Footer -->
	<footer class="footer" style="background-color: #696969">
		<div class="container">
			<div class="row">

				<div class="col-lg-3 footer_col">
					<div class="footer_column footer_contact">
						<div class="logo_container">
							<div class="logo"><a href="#"> Ommantra</a></div>
						</div>
						<div class="footer_title">Got Question? Call Us 24/7</div>
						<div class="footer_phone">+977-14253604,+977-9801071676</div>
						<div class="footer_contact_text">
							<p>H.No. 11, J.P. Road, Thamel</p>
							<p>Kathmandu, Nepal</p>
							<p>ommantranepal@gmail.com</p>
							<p>Anand Raj Neupane(+1 347 3933640)</p>
							<p>(Woodland, CA USA)</p>
						</div>
						<div class="footer_social">
							<ul>
								<li><a href="https://www.facebook.com/aathamel/?epa=SEARCH_BOX"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="https://twitter.com/"><i class="fab fa-weixin"></i></a></li>
								<li><a href="https://www.linkedin.com/feed/"><i class="fab fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-lg-2 offset-lg-3">
					<div class="footer_column">
						<div class="footer_title">Quick Menu</div>
						<ul class="footer_list">
							@foreach($category as $categorys)
							<li>-> <a href="{{ asset('/product/' .$categorys->id)}}">{{$categorys->category_name}}</a></li>
							@endforeach
						
						</ul>
					
					</div>
				</div>


				<div class="col-lg-2 col-sm-2 col-md-2">
					<div class="footer_column">
						<div class="footer_title">Our Retailer Store</div>
						<ul class="footer_list">
							<li><a href="#">aahandicraft.com</a></li>
						</ul>
						
					</div>
				</div>


				<div class="col-lg-2 col-sm-2 col-md-2">
					<div class="footer_column">
						<div class="footer_title">Account Info</div>
						<ul class="footer_list">
							<li><a href="{{asset('/customerRegister')}}">Sign Up</a></li>
							<li><a href="{{asset('customerLogin')}}">Login</a></li>
							<li><a href="{{asset('customerLogin')}}">My Account</a></li>
							<li><a href="{{asset('shopping_cart')}}">Cart</a></li>
							<li><a href="{{asset('termAndCondition')}}">Terms And Condition</a></li>
						</ul>
					</div>
				</div>

				

			</div>
		</div>
	</footer>

	<!-- payments -->

	<div class="copyright" style="background-color: #808080">
		<div class="container" >
			<div class="row" >
				<div class="col-lg-3">
					
				</div>
				<div class="col-lg-6" align="center" >
					<div class="payment_title" >Payment Methods</div>
						<img src="{{asset('asset/image/visa.jpg')}}" alt="" style="height: 40px; width: 100px;">
						<img src="{{asset('asset/image/paypal.jpg')}}" alt="" style="height: 40px; width: 100px;">
						<img src="{{asset('asset/image/mastercard.jpg')}}" alt="" style="height: 40px; width: 100px;">
						
				</div>
				<div class="col-lg-3"></div>
			</div>
		</div>
	</div>



	<!-- Copyright -->

	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-4"></div>
				<div class="col-lg-4">
					
					<div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
						<div class="copyright_content" align="center">
						<a>Copyright &copy; All rights reserved | This template is made by Hesienberg Information Technology</a>
						</div>
						
					</div>
				</div>
				<div class="col-lg-4"></div>
			</div>
		</div>
	</div>
</div>