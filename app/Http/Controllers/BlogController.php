<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $blogs=blog::paginate(15);
        return view('layouts.blog.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.blog.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog=new blog();
        if($request->blog_img){

            $imageblog_img=$request->file('blog_img')->getClientOriginalName();
            $pathblog_img=$request->file('blog_img')->storeAs('blog',$imageblog_img);
            $blog->blog_img=$pathblog_img;
        }
        $blog->blog_title_en=$request->blog_title_en;
        $blog->blog_title=$request->blog_title;
        $blog->slug=$request->slug;
        $blog->blog_subtitle_en=$request->blog_subtitle_en;
        $blog->blog_subtitle=$request->blog_subtitle;
        $blog->blog_desc_en=$request->blog_desc_en;
        $blog->blog_desc=$request->blog_desc;
        $blog->blog_keywords=$request->blog_keywords;
        
        $blog->save();
        return redirect()->route('Blog.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id,blog $blog)
    {
        $blog=blog::findOrFail($id);
        return view('layouts.blog.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id, blog $blog)
    {
        $blog=blog::findOrFail($id);

        if($request->hasFile('blog_img')){
            
            $image_path= public_path("\assets\imgs\\") .$blog->blog_img; 
            if (file_exists($image_path)) {

                @unlink($image_path);
            }
        
            $imageblog_img=$request->file('blog_img')->getClientOriginalName();
            $pathblog_img=$request->file('blog_img')->storeAs('blog',$imageblog_img);
            $blog->blog_img=$pathblog_img;
        }

            $blog->update([
                'blog_title_en' => $request->blog_title_en,
                'blog_title' => $request->blog_title,
                'slug' => $request->slug,
                'blog_subtitle_en' => $request->blog_subtitle_en,
                'blog_subtitle' => $request->blog_subtitle,
                'blog_desc_en' => $request->blog_desc_en,
                'blog_desc' => $request->blog_desc,
                'blog_keywords' => $request->blog_keywords,
            ]);
            return redirect()->route('Blog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id,blog $blog)
    {
        $blog=blog::findOrFail($request->id);


        $image_path= public_path("\assets\imgs\\") .$blog->blog_img; 
            if (file_exists($image_path)) {

                @unlink($image_path);
            }
            blog::findOrFail($request->id)->delete();
        return redirect()->route('Blog.index');
    }
}
