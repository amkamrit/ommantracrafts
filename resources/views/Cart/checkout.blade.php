
@extends('layouts.front.appFrontSec')



@section('content')


<style type="text/css">
	.payment-form{
	padding-bottom: 50px;
	font-family: 'Montserrat', sans-serif;
}

.payment-form.dark{
	background-color: #f6f6f6;
}

.payment-form .content{
	box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
	background-color: white;
}

.payment-form .block-heading{
    padding-top: 50px;
    margin-bottom: 40px;
    text-align: center;
}

.payment-form .block-heading p{
	text-align: center;
	max-width: 420px;
	margin: auto;
	opacity:0.7;
}

.payment-form.dark .block-heading p{
	opacity:0.8;
}

.payment-form .block-heading h1,
.payment-form .block-heading h2,
.payment-form .block-heading h3 {
	margin-bottom:1.2rem;
	color: #A9240F;
}

.payment-form form{
	border-top: 2px solid #A9240F;
	box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
	background-color: #ffffff;
	padding: 0;
	max-width: 600px;
	margin: auto;
}

.payment-form .title{
	font-size: 1em;
	border-bottom: 1px solid rgba(0,0,0,0.1);
	margin-bottom: 0.8em;
	font-weight: 600;
	padding-bottom: 8px;
}

.payment-form .products{
	background-color: #f7fbff;
    padding: 25px;
}

.payment-form .products .item{
	margin-bottom:1em;
}

.payment-form .products .item-name{
	font-weight:600;
	font-size: 0.9em;
}

.payment-form .products .item-description{
	font-size:0.8em;
	opacity:0.6;
}

.payment-form .products .item p{
	margin-bottom:0.2em;
}

.payment-form .products .price{
	float: right;
	font-weight: 600;
	font-size: 0.9em;
}

.payment-form .products .total{
	border-top: 1px solid rgba(0, 0, 0, 0.1);
	margin-top: 10px;
	padding-top: 19px;
	font-weight: 600;
	line-height: 1;
}

.payment-form .card-details{
	padding: 25px 25px 15px;
}

.payment-form .card-details label{
	font-size: 12px;
	font-weight: 600;
	margin-bottom: 15px;
	color: #79818a;
	text-transform: uppercase;
}

.payment-form .card-details button{
	margin-top: 0.6em;
	padding:12px 0;
	font-weight: 600;
}

.payment-form .date-separator{
 	margin-left: 10px;
    margin-right: 10px;
    margin-top: 5px;
}

@media (min-width: 576px) {
	.payment-form .title {
		font-size: 1.2em; 
	}

	.payment-form .products {
		padding: 40px; 
  	}

	.payment-form .products .item-name {
		font-size: 1em; 
	}

	.payment-form .products .price {
    	font-size: 1em; 
	}

  	.payment-form .card-details {
    	padding: 40px 40px 30px; 
    }

  	.payment-form .card-details button {
    	margin-top: 2em; 
    } 
}

/*Checkbox Style*/
/* The customcheck */
.customcheck {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default checkbox */
.customcheck input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

/* Create a custom checkbox */
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
    border-radius: 5px;
}

/* On mouse-over, add a grey background color */
.customcheck:hover input ~ .checkmark {
    background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.customcheck input:checked ~ .checkmark {
    background-color: #A9240F;
    border-radius: 5px;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the checkmark when checked */
.customcheck input:checked ~ .checkmark:after {
    display: block;
}

/* Style the checkmark/indicator */
.customcheck .checkmark:after {
    left: 9px;
    top: 5px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}
</style>
  <main class="page payment-page">
    <section class="payment-form dark">
      <div class="container">
        <div class="block-heading">
          <h2>Checkout</h2>
        </div>
        <div id="charge-error" class="alert alert-denger {{ !Session::has('error') ? 'hidden' : ''}}">
            {{Session::get('error')}}
        </div>
        <form action="{{route('payment.paypal')}}" method="post" id="checkout-form">
          <div class="products">
            {{csrf_field()}}
            <!-- <h3 class="title">Cart</h3> -->
          <!--   <div class="item">
              <span class="price">$200</span>
              <p class="item-name">Product 1</p>
              <p class="item-description">Lorem ipsum dolor sit amet</p>
            </div> -->
           <!--  <div class="item">
              <span class="price">$120</span>
              <p class="item-name">Product 2</p>
              <p class="item-description">Lorem ipsum dolor sit amet</p>
            </div> -->
          
           <div class="container">
        <section class="m50 row ">
        <div class="col-md-12">
                        <div class="order-summary clearfix">
                            <div class="section-title">
                                <h3 class="title">Order Review</h3>
                            </div>
                            <table class="shopping-cart-table table">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th></th>
                                        <th></th>
                                        <th>QTY</th>
                                        <th class="text-center">Total Price</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>



                                    @foreach($products as $product)
                                    <?php $url=url('productImage/'.$product['item']['product_image']);  ?>
                                    
                                        
                                    <tr>
                                        <td class="thumb"><img style="height:60px;" src="{{$url}}" alt=""></td>
                                      </td></td><td></td>
                                        <td class="details">
                                            <a href="#">{{$product['item']['product_name']}}</a>
                                        </td>
                                        

                                        <td class=" text-center">{{$product['qty']}}</td>
                                        <td class="total text-center"><strong class="primary-color">{{$product['price']}}</strong></td>

                                    </tr>
                                
                                   
                                 @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th class="empty" colspan="3"></th>
                                        <th>SUB TOTAL</th>
                                        <th colspan="2" class="total">${{$totalPrice}}.00</th>
                                        
                                    </tr>
                                </tfoot>
                            </table>
                            
                           
                        </div>

                    </div>
    </section>
    </div>




            </div>
          </div>
          <div class="card-details">
            <h3 class="title">Shipping Address</h3>
            <div class="row">
              <div class="form-group col-sm-6">
                <label for="first-name">First Name</label>
                <input id="first-name" type="text" class="form-control" placeholder="First Name" aria-label="Card Holder" aria-describedby="basic-addon1" name="fname" required>
              </div>
              <div class="form-group col-sm-6">
                <label for="last-name">Last Name</label>
                <input id="last-name" type="text" class="form-control" placeholder="Last Name" aria-label="Card Holder" aria-describedby="basic-addon1" name="lname" required>
              </div>
              <div class="form-group col-sm-12">
                <label for="email">Email</label>
                <input id="email" type="email" name="email" class="form-control" placeholder="Email" aria-label="Card Holder" aria-describedby="basic-addon1" required>
              </div>
              <div class="form-group col-sm-12">
                <label for="address">City</label>
                <input id="address" type="text"  class="form-control" placeholder="1234 Main St" aria-label="Card Holder" aria-describedby="basic-addon1" name="City" required>
              </div>
              <div class="form-group col-sm-6">
                <label for="country">Address</label>
                <input id="country" type="text" class="form-control" placeholder="Country" aria-label="Card Holder" aria-describedby="basic-addon1" name="Country" required>
                <select name="Country" required >
                  <option value="o" disabled>Select Country</option>
                  @foreach($shipping_discount as $shipping_discounts)
                  <option value="{{$shipping_discounts->price}}">{{$shipping_discounts->name}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group col-sm-3">
                <label for="State">State</label>
                <input id="State" type="text" class="form-control" placeholder="State" aria-label="Card Holder" aria-describedby="basic-addon1"  name="State" required>
              </div>
              <div class="form-group col-sm-3">
                <label for="zip">Zip</label>
                <input id="zip" type="text" class="form-control" placeholder="Zip" aria-label="Card Holder" aria-describedby="basic-addon1" name="Zip"  required>
              </div>
              <div class="form-group col-sm-12">
                
                
              </div>
            </div>
          </div>
         <!--  <div class="card-details">
            <h3 class="title">Payment
            </h3>
            <div class="row">
              <div class="form-group col-sm-7">
                <label for="card-holder">Card Holder</label>
                <input id="card-holder" type="text" class="form-control" placeholder="Card Holder" aria-label="Card Holder" aria-describedby="basic-addon1" >
              </div>
              <div class="form-group col-sm-5">
                <label for="">Expiration Date</label>
                <div class="input-group expiration-date">
                  <input type="text" class="form-control" placeholder="MM" aria-label="MM" aria-describedby="basic-addon1" id="card-expiry-month" >
                  <span class="date-separator">/</span>
                  <input type="text" class="form-control" placeholder="YY" aria-label="YY" aria-describedby="basic-addon1" id="card-expiry-year">
                </div>
              </div>
              <div class="form-group col-sm-8">
                <label for="card-number">Card Number</label>
                <input type="text" class="form-control" placeholder="Card Number" aria-label="Card Holder" aria-describedby="basic-addon1" id="card-number">
              </div>
              <div class="form-group col-sm-4">
                <label for="cvc">CVC</label>
                <input type="text" class="form-control" placeholder="CVC" aria-label="Card Holder" aria-describedby="basic-addon1" id="card-cvc">
              </div>
               -->
              <div class="form-group col-sm-12">
                <button type="submit" class="primary-btn btn-block" > Pay With Paypal</button>
              </div>
             <!--  <div class="form-group col-sm-6">
                <a  href="{{route('payment.paypal')}}" type="submit"  class="primary-btn btn-block" >Pay With Master card </a>
              </div> -->
            </div>
          </div>
        </form>
        </div>
      </div>
    </section>
  </main>

@endsection
@section('scripts')
  <script src="https://js.stripe.com/v3/"></script>

 <!--  <script type="text/javascript" src="{{asset('js/checkout.js')}}"></script> -->
 <script type="text/javascript" src="{{URL::to('js/checkout.js')}}"></script>

@endsection