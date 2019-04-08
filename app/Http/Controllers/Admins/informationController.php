<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\information;

class informationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $information =information::all();
        return view('admins.information.index')->withinformation($information);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.information.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate form
        $this ->Validate($request , array(
            // 'question' =>'required| max:300'
        ));
        //Store database
        $information = new information;
        $information->company_name = $request->company_name;
        $information->email = $request->email;
        $information->website_url = $request->website_url;
        $information->contact_number = $request->contact_number;
        $information->mobile_number = $request->mobile_number;
        $information->location = $request->location;
        $information->facebook_url = $request->facebook_url;
        $information->twitter_url = $request->twitter_url;
        $information->instagram = $request->instagram;
        $information->save();
        //Redirect Other page
        return redirect()->route('information.index',$information->id);
        // return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $information =information::find($id);
        return view('admins.information.show')->withinformation($information);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $information =information::find($id);
        return view('admins.information.edit')->withinformation($information);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $information = information::find($id);

        $information->company_name = $request->input('company_name');
        $information->email = $request->input('email');
        $information->website_url=$request->input('website_url');
        $information->contact_number = $request->input('contact_number');
        $information->mobile_number = $request->input('mobile_number');
        $information->location=$request->input('location');
        $information->facebook_url = $request->input('facebook_url');
        $information->twitter_url = $request->input('twitter_url');
        $information->instagram=$request->input('instagram');

        $information->save();

        // redirect with flash data to posts.show
        return redirect()->route('information.index', $information->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
