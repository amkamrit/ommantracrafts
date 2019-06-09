<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Models\sub_categorie;
use App\Models\Category;
use DB;
use Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product =DB::table('products')->paginate(8);
        return view('admins.product.index')->withproduct($product);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=Category::all();
        $subcategory=sub_categorie::all();
         return view('admins.product.create')
         ->with('category', $category)
         ->with('subcategory', $subcategory);
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
        $product = new Product;
        $product->product_name = $request->product_name;
        $product->categories_id = $request->categories_id;
        $product->sub_categories_id = $request->sub_categories_id;
        $product->product_short_description = $request->product_short_description;
        $product->product_normal_price = $request->product_normal_price;
        $product->product_image= $request->product_image;
        $product->product_long_description = $request->product_long_description;
        $product->product_code = $request->product_code;
        $product->product_sell_price = $request->product_sell_price;
        $product->product_minimum_sell_number = $request->product_minimum_sell_number;
        $product->product_type = $request->product_type;
        $product->slog = $request->slog;
        $product->sell_option = $request->sell_option;
        $product->youtubeurl = $request->youtubeurl;
        
        // if ($request->hasFile('product_image')) {
        //     $file=$request->file('product_image');
        //     $file_name=time().'.'. $file->getClientOriginalExtension();
        //     $request->product_image->storeAs('public/productImage',$file_name);
        //     $product->product_image=$file_name;
        // }

         if ($request->hasFile('product_image')) {

            $file=$request->file('product_image');
            $file_name=time().'.'. $file->getClientOriginalExtension();
            $location=('productImage/' .$file_name);
            Image::make($file)->resize(1500, 1500)->save($location);
            $product->product_image=$file_name;
        }

        $product->save();
        //Redirect Other page
        return redirect()->route('product.index',$product->id);
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
        $product =Product::find($id);
        $productDetail=DB::table('products')
                ->join('product_details','product_details.products_id','=','products.id')
                ->select('product_details.id')
                ->get();

        return view('admins.product.show')
        ->withproduct($product)
        ->withproductDetail($productDetail);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product =Product::find($id);
        $category=Category::all();
        $subcategory=sub_categorie::all();
         return view('admins.product.edit')
         ->with('category', $category)
         ->with('subcategory', $subcategory)
         ->with('product',$product);
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
        $product = Product::find($id);

        $product->product_name = $request->input('product_name');
        $product->categories_id = $request->input('categories_id');
        $product->sub_categories_id=$request->input('sub_categories_id');
        $product->product_short_description = $request->input('product_short_description');
        $product->product_normal_price = $request->input('product_normal_price');
        $product->product_long_description = $request->input('product_long_description');
        $product->product_code = $request->input('product_code');
        $product->product_sell_price = $request->input('product_sell_price');
        $product->product_minimum_sell_number = $request->input('product_minimum_sell_number');
        $product->product_type = $request->input('product_type');
        $product->slog = $request->input('slog');
        $product->sell_option = $request->input('sell_option');
        $product->youtubeurl = $request->input('youtubeurl');
        if ($request->hasFile('product_image')) {

            $file=$request->file('product_image');
            $file_name=time().'.'. $file->getClientOriginalExtension();
            $location=('productImage/' .$file_name);
            Image::make($file)->resize(1500, 1500)->save($location);
            $product->product_image=$file_name;
        }

        $product->save();

        // redirect with flash data to posts.show
        return redirect()->route('product.index', $product->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        $product =Product::all();
        return view('admins.product.index')->withproduct($product);
    }
    public function importPrdouct(Request $request){
        {
        $request->validate([

            'fileprice' => 'required'

        ]);

        $path = $request->file('fileprice')->getRealPath();

        $data = Excel::load($path)->get();

 

        if($data->count()){

            foreach ($data as $key => $value) {

            $arr[] = ['product_name' => $value->product_name, 'categories_id' => $value->categories_id, 'sub_categories_id' => $value->sub_categories_id, 'weight' => $value->weight,'product_short_description' => $value->product_short_description, 'product_normal_price' => $value->product_normal_price, 'product_long_description' => $value->product_long_description, 'product_code' => $value->product_code, 'product_sell_price' => $value->product_sell_price, 'product_minimum_sell_number' => $value->product_minimum_sell_number, 'product_type' => $value->product_type, 'slog' => $value->slog, 'youtubeurl' => $value->youtubeurl, 'sell_option' => $value->sell_option];
            }

            if(!empty($arr)){

                 ShippingPrice::insert($arr);

            }

        }

        $product =Product::all();
        return view('admins.product.index')->withproduct($product);

    }
}
}