<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Session;
use Socialite;

use App\User;
use App\Cart;

use App\Models\Category;
use App\Models\sub_categorie;

class customerLoginController extends Controller
{
    public function __construct(){
        $this->middleware('guest:customer');
    }
    public function showLoginForm(){

     $category=Category::all();
    $subCategory=sub_categorie::all();

        return view('frontends.login')

    ->with('category',$category)
    ->with('subCategory',$subCategory);
    }
    public function login(Request $request){
        //validate the form data
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|min:6'
        ]);
    //Attem Login
        if (Auth::guard('customer')->attempt(['email' => $request->email, 'password' => $request ->password], $request->remember)) {
            // if success then redirect to their intended location
            Session()->put('user_name', $request->email);
            return redirect()->intended(route('welcome'));
        }
        //if unsuccess then back login form
        return redirect()->back()->withInput($request->only('email','remember'));
        
    }
        /**
     * Redirect the user to the Facebook authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
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
        $usersFacebook = Socialite::driver('facebook')->user();
        $findUser=User::where('email', $usersFacebook->email)->first();
        if ($findUser) {

            // Auth::login($findUser);
            return back()->with('alert','This email address is already register. Try different email address'); 
        }
        else
        {
            $users = new User;
            $users->email = $usersFacebook->email;
            $users->fname = $usersFacebook->name;
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
    //Twitter 
     /**
     * Redirect the user to the Facebook authentication page.
     *
     * @return Response
     */
    public function redirectToProviders(Request $request)
    {
        return Socialite::driver('Twitter')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallbacks(Request $request)
    {

        $category=Category::all();
        $subCategory=sub_categorie::all();
        $usersTwitter = Socialite::driver('Twitter')->user();
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
