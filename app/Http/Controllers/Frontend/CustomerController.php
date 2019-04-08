<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use validator;
use App\User;
use Socialite;
use App\Models\Category;
use App\Models\sub_categorie;
use App\Models\OrderList;
use Illuminate\Support\Facades\Hash;
use App\Models\card_history;
use DB;
class CustomerController extends Controller
{
    public function index(){
        $category=Category::all();
        $subCategory=sub_categorie::all();
        return view('myAccount/customerLogin')
        ->with('category',$category)
        ->with('subCategory',$subCategory);
    }
	

    public function RegsiterForm(){
    	$category=Category::all();
    	$subCategory=sub_categorie::all();

    	return view('myAccount/customerRegister')

		->with('category',$category)
    	->with('subCategory',$subCategory);
    }
    public function registerCustomer(Request $request){
    	$category=Category::all();
    	$subCategory=sub_categorie::all();

    	$user = new User;
        $user->email = $request->email;
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->country = $request->country;
        $user->city = $request->city;
        $user->ContactNumber = $request->ContactNumber;
        $passwords=Hash::make($request->password);
        $user->password = $passwords;
        $user->save();

    	return view('myAccount/customerLogin')

		->with('category',$category)
    	->with('subCategory',$subCategory);

    }

    public function customerInfoUpdate(Request $request){
        $category=Category::all();
        $subCategory=sub_categorie::all();

        $customerInfo=User::find(Auth::user()->id);
        $customerInfo->email=$request->input('email');
        $customerInfo->fname=$request->input('fname');
        $customerInfo->lname=$request->input('lname');
        $customerInfo->country=$request->input('country');
        $customerInfo->city=$request->input('city');
        $customerInfo->ContactNumber=$request->input('ContactNumber');


        $customerInfo->save();
        Auth::logout();

        return view('myAccount/customerLogin')

        ->with('category',$category)
        ->with('subCategory',$subCategory);

    }


    public function loginFormShow(){
    	$category=Category::all();
    	$subCategory=sub_categorie::all();
    	return view('myAccount/customerLogin')
    	->with('category',$category)
    	->with('subCategory',$subCategory);
    }

    public function checkLogin(Request $request){
    	$this->validate($request,[
    		'email'  =>'required|email',
    		'password' =>'required|alphaNum|min:3'
    	]);

    	$user_data = array(

    		'email'       =>$request->get('email'),
    		'password'		=>$request->get('password')

    	);

    	if (Auth::attempt($user_data)) {

    		return redirect('customerLogin/successLogin');
    	}
    	else{

    		return back()->with('error','Wrong Login Detail');
    	}
    }

    public function successLogin(){
        
        $userInfo=User::where('email', '=', Auth::user()->email)->get();
    	$category=Category::all();
    	$subCategory=sub_categorie::all();

    	return view('myAccount/AccountDetails')

    	->with('category',$category)
        ->with('userInfo', $userInfo)
    	->with('subCategory',$subCategory);
    }


    public function logout(){
    	$category=Category::all();
    	$subCategory=sub_categorie::all();

    	Auth::logout();

    	return view('myAccount/customerLogin')
    	->with('category',$category)
    	->with('subCategory',$subCategory);
    }


    public function personalInformation(){
        
        $id=Auth::user()->email;
        $userInfo=User::where('email', '=', $id)->get();
        $category=Category::all();
        $subCategory=sub_categorie::all();

        return view('myAccount/personalInformation')

        ->with('category',$category)
        ->with('userInfo', $userInfo)
        ->with('subCategory',$subCategory);

    }

public function ratings(){


        $category=Category::all();
        $subCategory=sub_categorie::all();
         return view('myAccount/MyRatings')

        ->with('category',$category)
        ->with('subCategory',$subCategory);
}

public function customerOrder(){

         $OrderList=OrderList::where('usersId', '=', Auth::user()->email)->get();
         $OrderList->transform(function($OrderLists, $key){
            $OrderLists->productList=unserialize($OrderLists->productList);
            return $OrderLists;
            
        });

        $category=Category::all();
        $subCategory=sub_categorie::all();

         return view('myAccount/MyOrders')

        ->with('category',$category)
        ->with('subCategory',$subCategory)
        ->with('orderList', $OrderList);
}

public function showCardInfo()
    {   
        $category=Category::all();
        $subCategory=sub_categorie::all();
        $id= Auth::user()->id;
        $info=card_history::where('user_id', '=', $id)->get();
        return view('myAccount/saveCardInfo')
        ->with('category',$category)
        ->with('info', $info)
        ->with('subCategory',$subCategory);
    }
    public function saveCardInfo(Request $request)
    {   
        $cardData= new card_history;
        $cardData->acccount_name=$request->acccount_name;
        $cardData->card_number=$request->card_number;
        $cardData->expire_date=$request->expire_date;
        $cardData->cvc_number=$request->cvc_number;
        $cardData->user_id=Auth::user()->id;
        $cardData->save();
        $id= Auth::user()->id;
        $info=card_history::where('user_id', '=', $id)->get();
        $category=Category::all();
        $subCategory=sub_categorie::all();
        return view('myAccount/saveCardInfo')
        ->with('category',$category)
        ->with('info', $info)
        ->with('subCategory',$subCategory);
    }
    public function updateCardInfo(Request $request)
    {   
        // $cardData= card_history::all();
        $id= Auth::user()->id;
        $cardId=$request->input('infoId');
        $cardData= card_history::find($cardId);
        $cardData->acccount_name=$request->input('acccount_name');
        $cardData->card_number=$request->input('card_number');
        $cardData->expire_date=$request->input('expire_date');
        $cardData->cvc_number=$request->input('cvc_number');
        $cardData->user_id=Auth::user()->id;
        $cardData->save();
        $info=card_history::where('user_id', '=', $id)->get();
        $category=Category::all();
        $subCategory=sub_categorie::all();
        return view('myAccount/saveCardInfo')
        ->with('category',$category)
        ->with('info', $info)
        ->with('subCategory',$subCategory);
    }

    //Twitter 
     /**
     * Redirect the user to the Facebook authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('twitter')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {

        $category=Category::all();
        $subCategory=sub_categorie::all();
        $usersTwitter = Socialite::driver('twitter')->user();
        $findUser=User::where('email', $usersTwitter->email)->first();
        if ($findUser) {

            // Auth::login($findUser);
            return back()->with('alert','This email address is already register. Try different email address'); 
        }
        else
        {
            $users = new User;
            $users->email = $usersTwitter->email;
            $users->fname = $usersTwitter->name;
            $passwords=bcrypt('fzcymcksu123');
            $users->password = $passwords;
            $users->save();
            Auth::login($users);
            $userInfo=User::where('email', '=', Auth::user()->email)->get();

            return view('myAccount/AccountDetails')
            ->with('category',$category)
            ->with('userInfo', $userInfo)
            ->with('subCategory',$subCategory);

        }   
        
    }
}
