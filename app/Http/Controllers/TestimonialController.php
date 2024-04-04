<?php

namespace App\Http\Controllers;

use App\Models\testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials=testimonial::paginate(15);
        return view('layouts.testimonial.index',compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('layouts.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $testimonial=new testimonial();
        if($request->img){
            $imageimg=$request->file('img')->getClientOriginalName();
            $pathimg=$request->file('img')->storeAs('testimonial',$imageimg);
            $testimonial->img=$pathimg;   
        }

        $testimonial->comment=$request->comment;
        $testimonial->comment_name=$request->comment_name;
        $testimonial->comment_from=$request->comment_from;
        $testimonial->save();
        return redirect()->route('Testimonial.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id,testimonial $testimonial)
    {
        $testimonial=testimonial::findOrFail($id);
        return view('layouts.testimonial.edit',compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id, testimonial $testimonial)
    {
        $testimonial=testimonial::findOrFail($id);

        if($request->hasFile('img')){
            
            $image_path= public_path("\assets\imgs\\") .$testimonial->img; 
            if (file_exists($image_path)) {

                @unlink($image_path);
            }

            $imageimg=$request->file('img')->getClientOriginalName();
            $pathimg=$request->file('img')->storeAs('testimonial',$imageimg);
            $testimonial->img=$pathimg;  
        }
        $testimonial->update([
            'comment' => $request->comment,
            'comment_name' => $request->comment_name,
            'comment_from' => $request->comment_from,
            
        ]);
        return redirect()->route('Testimonial.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id,testimonial $testimonial)
    {
        //
        $testimonial=testimonial::findOrFail($request->id);


        $image_path= public_path("\assets\imgs\\") .$testimonial->img; 
            if (file_exists($image_path)) {

                @unlink($image_path);
            }
            testimonial::findOrFail($request->id)->delete();
            return redirect()->route('Testimonial.index');
    }
}
