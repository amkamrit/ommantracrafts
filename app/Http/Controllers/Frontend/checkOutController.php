<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;
use Srmklive\PayPal\Services\AdaptivePayments;

class checkOutController extends Controller
{
    public function withPaypal(){

    	$provider = new ExpressCheckout;


			    	$data = [];
			    	$data['items']=[];
			    	foreach ($cart as $key => $carts) {

			$itemDetail = [
			        'name' => $carts->name,
			        'price' => $carts->price,
			        'qty' => $carts->qty,
			    ];
			    $data['items'][]=$itemDetail;
			}

			$data['invoice_id'] = uniqid();
			$data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";
			$data['return_url'] = route('payment.store');
			$data['cancel_url'] = url('/test');

			$total = cart::total();
			foreach($data['items'] as $item) {
			    $total += $item['price']*$item['qty'];
			}

			$data['total'] = $total;

			//give a discount of 10% of the order amount
			$data['shipping_discount'] = round((10 / 100) * $total, 2);


			    $response = $provider->setExpressCheckout($data);


				 // This will redirect user to PayPal
				return redirect($response['paypal_link']);
			}

		}
