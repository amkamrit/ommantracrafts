<?php
use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function(){
	Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin');
});

Route::prefix('customer')->group(function(){
    Route::get('/login','Auth\CustomerLoginController@showLoginForm')->name('customer.login');
    Route::post('/login','Auth\CustomerLoginController@login')->name('customer.login.submit');
    Route::get('/', 'Frontend\CustomerController@index')->name('customer');
});


Route::resource('admins/category','Admins\CategoryController')->middleware('Admin');
Route::resource('admins/subcategory','Admins\SubCategoryController')->middleware('Admin');
Route::resource('admins/review','Admins\ReviewController')->middleware('Admin');
Route::resource('admins/information','Admins\informationController')->middleware('Admin');
Route::resource('admins/product','Admins\ProductController')->middleware('Admin');
Route::resource('admins/product_detail','Admins\product_detailController')->middleware('Admin');
Route::resource('admins/featureImage','Admins\FeatureImageController')->middleware('Admin');
Route::resource('admins/Bookupload','Admins\bookuploadController')->middleware('Admin');
Route::resource('admins/OrderList','Admins\OrderListController')->middleware('Admin');
Route::resource('admins/Payment','Admins\PaymentController')->middleware('Admin');
Route::resource('admins/User','Admins\UserController')->middleware('Admin');
Route::resource('admins/Blog','Admins\BlogController')->middleware('Admin');
Route::resource('admins/Slider','Admins\SliderController')->middleware('Admin');
Route::resource('admins/SliderTwo','Admins\SliderTwoController')->middleware('Admin');
Route::resource('admins/Gallary','Admins\GallaryController')->middleware('Admin');
Route::resource('admins/Service','Admins\ServiceController')->middleware('Admin');
Route::resource('admins/event','Admins\eventController')->middleware('Admin');
Route::resource('admins/coupne','Admins\CoupneController')->middleware('Admin');






Auth::routes();

Route::get('/home', 'Frontend\HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'Frontend\HomeController@index')->name('home');


// New Start Hear 

Route::get('/','Frontend\IndexController@index');
Route::get('/product/{id}/{name}','Frontend\ProductDisplayByCategoryController@products');
Route::get('/subProduct/{id}/{name}','Frontend\ProductDisplayByCategoryController@subProducts');
Route::get('/productDetail/{id}/{name}','Frontend\ProductDisplayByCategoryController@productSingle');

Route::get('/blogs/','Frontend\BlogDisplayController@blogDisplay');
Route::get('/blogDetail/{id}','Frontend\BlogDisplayController@blogDetailDisplay');
Route::get('/service/','Frontend\BlogDisplayController@service');
Route::get('/servicedetail/{id}','Frontend\BlogDisplayController@serviceDetailDisplay');
//Customer Registation

Route::get('/customerRegister',[
	'uses'   =>  'Frontend\CustomerController@RegsiterForm',
	'as'    =>		'customerRegister'
	
]);

Route::post('/customerRegister/registerCustomer/',[
	'uses'   =>  'Frontend\CustomerController@registerCustomer',
	'as'    =>		'/customerRegister/registerCustomer'
	
]);

//Customer Login

Route::get('/customerLogin','Frontend\CustomerController@loginFormShow');
Route::post('/customerLogin/checkLogin', 'Frontend\CustomerController@checkLogin');
Route::get('/customerLogin/successLogin','Frontend\CustomerController@successLogin');
Route::get('/customerLogin/logout','Frontend\CustomerController@logout');

// Set Customer Information 

Route::get('/personalInformation','Frontend\CustomerController@personalInformation');
Route::post('/customerInfoUpdate','Frontend\CustomerController@customerInfoUpdate');

Route::get('/ratings','Frontend\CustomerController@ratings')->middleware('User');
Route::get('/customerOrders','Frontend\CustomerController@customerOrder')->middleware('User');
Route::get('/showCardInfo','Frontend\CustomerController@showCardInfo')->middleware('User');
Route::post('/saveCardInfo','Frontend\CustomerController@saveCardInfo')->middleware('User');
Route::post('/updateCardInfo','Frontend\CustomerController@updateCardInfo')->middleware('User');

//page controller route

Route::get('/aboutUs','Frontend\siteController@about');
Route::get('/termAndCondition','Frontend\siteController@termAndCondition');
Route::get('/contact','Frontend\siteController@contact');
Route::get('/books/','Frontend\siteController@booksDisplay');
Route::get('/booksDetail/{id}','Frontend\siteController@booksDetailDisplay');

Route::get('/event/','Frontend\siteController@eventDisplay');
Route::get('/eventDetail/{id}','sFrontend\iteController@eventDetailDisplay');

Route::get('/Service/','siteController@booksDisplay');
Route::get('/servicedetail/{id}','siteController@DetailSerives');


// cart Rout is Hear ..
//Route::get('/addToCart/{id}','CartController@getAddToCart');
Route::get('/addToCart/{id}',[
	'uses'   =>  'Frontend\CartController@getAddToCart',
	'as'    =>		'addToCart'
]);
Route::post('/cartUpdate/{id}',[
	'uses'   =>  'Frontend\CartController@cartUpdate',
	'as'    =>		'cartUpdate'
]);

Route::get('/remove/{id}',[
	'uses'   =>  'Frontend\CartController@removeItem',
	'as'    =>		'remove'
]);
Route::get('/shopping_cart',[
	'uses'   =>  'Frontend\CartController@getCart',
	'as'    =>		'shopping_cart'
]);

Route::post('/shopping_cart',[
	'uses'   =>  'Frontend\CartController@getCart',
	'as'    =>		'shopping_cart'
]);

Route::post('/coupneRemove',[
	'uses'   =>  'Frontend\CartController@coupneRemove',
	'as'    =>		'coupneRemove'
]);

Route::get('/checkout/{totalPrice}',[
	'uses'   =>  'Frontend\CartController@getCheckout',
	'as'    =>		'checkout',
]);

Route::post('/checkout',[
	'uses'   =>  'Frontend\CartController@postCheckout',
	'as'    =>		'checkout',
]);

// For Master Card
Route::post('/checkoutM',[
	'uses'   =>  'Frontend\masterCardController@postCheckout',
	'as'    =>		'checkoutM',
]);
Route::get('/checkoutM',[
	'uses'   =>  'Frontend\masterCardController@getCheckout',
	'as'    =>		'checkoutM',
]);


Route::post('pay-with-paypal','Frontend\CartController@withPaypal')->name('payment.paypal');
Route::get('paypalsuccess','Frontend\CartController@paypalsuccess')->name('paypalsuccess');

Route::post('/search',[
	'uses'   =>  'Frontend\CartController@search',
	'as'    =>		'search',
]);
Route::post('/review/',[
	'uses'   =>  'Frontend\ProductDisplayByCategoryController@review',
	'as'    =>		'review',
]);
Route::post('{id}/updateItem/',[
	'uses'   =>  'Admins\CoupneController@Update',
	'as'    =>		'updateItem',
]);

Route::post('/applyCoupne/',[
	'uses' =>'Frontend\CartController@applyCoupne',
	'as' =>'applyCoupne'
]);

//facebook 
Route::get('login/facebook', 'Auth\CustomerLoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\CustomerLoginController@handleProviderCallback');
//Twitter
Route::get('login/twitter', 'Auth\CustomerLoginController@redirectToProviders');
Route::get('login/twitter/callback', 'Auth\CustomerLoginController@handleProviderCallbacks');

//Import Shipping Address
Route::get('shippingAddress', 'Admins\shippingAddressController@index')->name('shippingAddress');
Route::get('export', 'Admins\shippingAddressController@export')->name('export');

Route::get('importExportView', 'Admins\shippingAddressController@importExportView');

Route::post('import', 'Admins\shippingAddressController@import')->name('import');
Route::post('importprice', 'Admins\shippingAddressController@importprice')->name('importprice');
Route::get('shippingPriceView/{id}', 'Admins\shippingAddressController@displayprice')->name('shippingPriceView');
Route::get('countryEdit/{id}', 'Admins\shippingAddressController@countryEdit')->name('countryEdit');
Route::post('countryupdate/{id}', 'Admins\shippingAddressController@countryupdate')->name('countryupdate');
Route::get('ShippingPriceEdit/{id}', 'Admins\shippingAddressController@ShippingPriceEdit')->name('ShippingPriceEdit');

