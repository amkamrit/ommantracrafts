<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Session;
use App\Cart;
use App\Models\Category;
use App\Models\sub_categorie;
use DB;
use App\Models\Bookupload;
use App\Models\Blog;
use Stripe\Stripe;
use Stripe\Charge;
use App\Models\OrderList;
use Auth;
use Illuminate\Database\Query\Builder;
use App\Models\Slider;
use App\Models\Service;
use App\Models\Payment;
use App\Models\card_history;

use Srmklive\PayPal\Services\ExpressCheckout;
use Srmklive\PayPal\Services\AdaptivePayments;

class masterCardController extends Controller
{
    public function getAddToCart(Request $request, $id){

    $product = DB::table('products')->paginate(8);
    $recentproduct = DB::table('products')->paginate(8);
	$Cproduct =Product::where('categories_id', '=', 3)->paginate(2);
	$Coproduct =Product::where('categories_id', '=', 2)->paginate(2);
	$Co4product =Product::where('categories_id', '=', 5)->paginate(2);
	$Co5product =Product::where('categories_id', '=', 4)->paginate(2);
	$book=Bookupload::all();
	$blog=Blog::all();
    $category=Category::all();
    $subCategory=sub_categorie::all();

    	$products= Product::find($id);
    	$oldCart= Session::has('cart') ?  Session::get('cart') : null;
    	$cart=new Cart($oldCart);
    	$cart->add($products, $products->id);
    	$request->Session()->put('cart',$cart);
    	return back()

    ->with('product',$product)
    ->with('book',$book)
    ->with('blog', $blog)
    ->with('Cproduct', $Cproduct)
    ->with('Co4product',$Co4product)
    ->with('Co5product',$Co5product)
    ->with('Coproduct', $Coproduct)
    ->with('recentproduct', $recentproduct)
    ->with('category',$category)
    ->with('subCategory',$subCategory);

    }
    public function cartUpdate(Request $request, $id){

        $products= Product::find($id);
        $category=Category::all();
        $subCategory=sub_categorie::all();
        $qty=$request->qty;

        $oldCart= Session::has('cart') ?  Session::get('cart') : null;
        $cart=new Cart($oldCart);
        $cart->getUpdate($id, $qty, $products, $products->id);

         if (count($cart->items)>0 ) {
            Session::put('cart', $cart);
        }
        else {

            Session::forget('cart', $cart);

        }
        return view('Cart/mycart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice])

    ->with('category',$category)
    ->with('subCategory',$subCategory);


    }
    public function removeItem($id)
    {
         $products= Product::find($id);
        $category=Category::all();
        $subCategory=sub_categorie::all();

        $oldCart= Session::has('cart') ?  Session::get('cart') : null;
        $cart=new Cart($oldCart);

        
        $cart->removeItem($id);
        
        if (count($cart->items)>0 ) {
            Session::put('cart', $cart);
        }
        else {

            Session::forget('cart', $cart);

        }
        return view('Cart/mycart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice])
         ->with('category',$category)
        ->with('subCategory',$subCategory);

    }
    public function getCart(){
    	$category=Category::all();
        $subCategory=sub_categorie::all();
    	if (!Session::has('cart')) {
    		return view('Cart/mycart')
    		 ->with('category',$category)
    		->with('subCategory',$subCategory);
    	}

        $category=Category::all();
    $subCategory=sub_categorie::all();
    	$oldcart= Session::get('cart');
    	$cart= new Cart($oldcart);
    	return view('Cart/mycart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice])

    ->with('category',$category)
    ->with('subCategory',$subCategory);
    }

    public function getCheckout(){
    	   $category=Category::all();
    		$subCategory=sub_categorie::all();
            if (empty(Auth::user()->id)) {
            $ids=0;
        }
        else
        {
            $ids=Auth::user()->id;
        }
        $cardInfo=card_history::where('user_id','=', $ids)->get();

    	if (!Session::has('cart')) {
    		return view('Cart/mycart')
    		 ->with('category',$category)
    		->with('subCategory',$subCategory);
    	}

    	$oldcart= Session::get('cart');
    	$cart= new Cart($oldcart);
    	$total=$cart->totalPrice;
    	return view('Cart/checkoutM',['total' => $total])

    	->with('category',$category)
    	->with('subCategory',$subCategory)
        ->with('cardInfo', $cardInfo);

    }
    public function postCheckout(Request $request){
        $product = DB::table('products')->paginate(8);
        $Cproduct =Product::where('categories_id', '=', 3)->paginate(2);
        if (empty(Auth::user()->id)) {
            $id=0;
        }
        else
        {
            $id=Auth::user()->id;
        }
        $cardInfo=card_history::where('user_id','=', $id);
        $Coproduct =Product::where('categories_id', '=', 2)->paginate(2);
        $Co4product =Product::where('categories_id', '=', 5)->paginate(2);
        $Co5product =Product::where('categories_id', '=', 4)->paginate(2);
        $book=Bookupload::all();
        $blog=Blog::all();
        $category=Category::all();
        $slider= Slider::all();
        $subCategory=sub_categorie::all();
        $service=DB::table('services')->paginate(10);


        if (!Session::has('cart')) {
            return view('Cart/mycart')
            ->with('category',$category)
            ->with('subCategory',$subCategory)
            ->with('product',$product)
            ->with('book',$book)
            ->with('blog', $blog)
            ->with('Cproduct', $Cproduct)
            ->with('Co4product',$Co4product)
            ->with('Co5product',$Co5product)
            ->with('Coproduct', $Coproduct);
        }


        $oldcart= Session::get('cart');
        $cart= new Cart($oldcart);
        Stripe::setApiKey('sk_test_jzCZvOPNVJrpOC0aV0b0Bs93');
        
        try{
            // Charge::create(array(
            // "amount" => $cart->totalPrice * 100,
            // "currency" => "usd",
            // "source" => $request->input('stripeToken'), // obtained with Stripe.js
            // "description" => "Test Charge"
            // )); 
            $amount =$cart->totalPrice;
            //$token =$request->input('stripeToken');
           $charge= Charge::create(array( 
              "amount" => $amount * 100,
              "currency" => "usd",
              "source" => "tok_visa", // obtained with Stripe.js
              "description" => "Charge for jenny.rosen@example.com"
            ));

           $order = new  OrderList();
            $order->usersId = $request->email;
            Session()->put('order_user_id', $order->usersId);
            $order->fname= $request->fname;
            $order->lname= $request->lname;
            $order->City= $request->City;
            $order->Country= $request->Country;
            $order->State= $request->State;
            $order->Zip= $request->Zip;
            $order->paymentId=$charge->id;
            $order->totalPrice=$charge->amount;
            $order->productList= serialize($cart);

            $order->save();

        }
        catch(\Exception $e){
            return view('index')
            ->with('error', $e->getMessage())
            ->with('category',$category)
            ->with('subCategory',$subCategory)
            ->with('product',$product)
            ->with('book',$book)
            ->with('blog', $blog)
            ->with('Cproduct', $Cproduct)
            ->with('Co4product',$Co4product)
            ->with('Co5product',$Co5product)
            ->with('service', $service)
            ->with('Coproduct', $Coproduct)
            ->with('cardInfo', $cardInfo);
        }
            
            
         Session::forget('cart');
        return view('index')
            ->with('success', ' Operation Success')
             ->with('category',$category)
            ->with('subCategory',$subCategory)
            ->with('product',$product)
            ->with('book',$book)
            ->with('blog', $blog)
            ->with('Cproduct', $Cproduct)
            ->with('Co4product',$Co4product)
            ->with('Co5product',$Co5product)
            ->with('slider', $slider)
            ->with('service', $service)
            ->with('Coproduct', $Coproduct)
            ->with('recentproduct', $Cproduct)
            ->with('cardInfo', $cardInfo);
    }
    public function withPaypal(Request $request){

        $provider = new ExpressCheckout;
        $oldcart= Session::get('cart');
        $cart= new Cart($oldcart);

                    $data = [];
                    $data['items']=[];
            //         foreach ($cart as $key => $carts) {

            // $itemDetail = [
            //         'name' => $carts->name,
            //         'price' => $carts->price,
            //         'qty' => $carts->qty,
            //     ];
            //     $data['items'][]=$itemDetail;
            // }

            $data['invoice_id'] = uniqid();
            $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";
            $data['return_url'] = route('paypalsuccess');
            $data['cancel_url'] = url('/test');

            $total = $cart->totalPrice;
            // foreach($data['items'] as $item) {
            //     $total += $item['price']*$item['qty'];
            // }

            $data['total'] = $total;

            //give a discount of 10% of the order amount
            $data['shipping_discount'] = round((10 / 100) * $total, 2);


                $response = $provider->setExpressCheckout($data);


            $order = new  OrderList();
            $order->usersId = $request->email;
            Session()->put('order_user_id', $order->usersId);
            $order->fname= $request->fname;
            $order->lname= $request->lname;
            $order->City= $request->City;
            $order->Country= $request->Country;
            $order->State= $request->State;
            $order->Zip= $request->Zip;
            $order->productList= serialize($cart);
            $order->save();

                 // This will redirect user to PayPal
                return redirect($response['paypal_link']);
            }

    public function paypalsuccess(Request $request){

    

        $product = DB::table('products')->paginate(8);
        $recentproduct = DB::table('products')->paginate(8);
        $Cproduct =Product::where('categories_id', '=', 3)->paginate(2);
        $Coproduct =Product::where('categories_id', '=', 2)->paginate(2);
        $Co4product =Product::where('categories_id', '=', 5)->paginate(2);
        $Co5product =Product::where('categories_id', '=', 4)->paginate(2);
        $book=Bookupload::all();
        $blog=Blog::all();
        $slider= Slider::all();
        $category=Category::all();
        $subCategory=sub_categorie::all();
        $service=DB::table('services')->paginate(10);


        $provider= new ExpressCheckout;
        $oldcart= Session::get('cart');
        $cart= new Cart($oldcart);

        $token=$request->token;
        $PayerID= $request->PayerID;
        $totalPrice= $cart->totalPrice;

        $response = $provider->getExpressCheckoutDetails($token);
        $invoiceId=$response['INVNUM']??uniqid();


        

        $payment = new  Payment();

            $order_user_id= Session::get('order_user_id');
            $payment->UserId=$order_user_id;
            $payment->paymentId= $PayerID;
            $payment->amount= $totalPrice; 
            $payment->save();

           Session::forget('cart');
           return view('index')

            ->with('success', ' Operation Success')
             ->with('category',$category)
            ->with('subCategory',$subCategory)
            ->with('product',$product)
            ->with('book',$book)
            ->with('blog', $blog)
            ->with('Cproduct', $Cproduct)
            ->with('Co4product',$Co4product)
            ->with('Co5product',$Co5product)
            ->with('slider', $slider)
            ->with('service', $service)
            ->with('recentproduct', $recentproduct)
            ->with('Coproduct', $Coproduct);

    }
    public function search(Request $request){

            $category=Category::all();
            $subCategory=sub_categorie::all();


        $name=$request->input('search');

       // $singleCategoryproduct = Product::where('product_name', 'LIKE', '%' . $name . '%');

         $singleCategoryproduct = Product::where('product_name','LIKE','%'.$name.'%')->get();
        
        return view('Products.displayProduct')
        ->with('singleCategoryproduct',$singleCategoryproduct)
        ->with('category',$category)
        ->with('subCategory',$subCategory);
    }

    
    
}
