<?php

namespace App\Http\Controllers\Admins;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use Image;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Blog =Blog::all();
        return view('admins.Blog.index')->with('blog',$Blog);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.Blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $Blog = new Blog;
         $Blog->mataTag=$request->mataTag;
         $Blog->metaDescription=$request->metaDescription;
        $Blog->blog_title=$request->blog_title;
        $Blog->blog_content=$request->blog_content;
        $Blog->image=$request->feature_image;

        if ($request->hasFile('image')) {

            $file=$request->file('image');
            $file_name=time().'.'. $file->getClientOriginalExtension();
            $location=('blogImage/' .$file_name);
            Image::make($file)->resize(800, 500)->save($location);
            $Blog->image=$file_name;
        }
        $Blog->save();
        return redirect()->route('Blog.index', $Blog->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog =Blog::find($id);
        return view('admins.Blog.show')->with('blog',$blog);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog =Blog::find($id);
        return view('admins.Blog.edit')->with('blog',$blog);
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
        $blog = Blog::find($id);

        $blog->blog_title = $request->input('blog_title');
        $blog->blog_content = $request->input('blog_content');
        // if ($request->hasFile('image')) {

        //     $file=$request->file('image');
        //     $file_name=time().'.'. $file->getClientOriginalExtension();
        //     $location=public_path('blogImage/' .$file_name);
        //     Image::make($file)->resize(800, 500)->save($location);
        //     $Blog->image=$file_name;
        // }

        $blog->save();

        // redirect with flash data to posts.show
        return redirect()->route('Blog.index', $blog->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $blog = Blog::find($id);

         $blog->delete();

         $Blog =Blog::all();
        return view('admins.Blog.index')->with('blog',$Blog);


    }
}
