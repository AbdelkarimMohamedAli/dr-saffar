<?php

namespace App\Http\Controllers;

use App\Models\slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sliders=slider::paginate(15);
        return view('layouts.slider.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $sliders=slider::all();
        return view('layouts.slider.create',compact('sliders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $slider=new slider();
        if($request->slider_image){

            $imageslider_image=$request->file('slider_image')->getClientOriginalName();
            $pathslider_image=$request->file('slider_image')->storeAs('slider',$imageslider_image);
            $slider->slider_image=$pathslider_image;
        }
        $slider->slider_content1_en=$request->slider_content1_en;
        $slider->slider_content2_en=$request->slider_content2_en;
        $slider->slider_content3_en=$request->slider_content3_en;
        $slider->slider_content1=$request->slider_content1;
        $slider->slider_content2=$request->slider_content2;
        $slider->slider_content3=$request->slider_content3;
        $slider->save();
        return redirect()->route('Slider.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id,slider $slider)
    {
        //
        $slider=slider::findOrFail($id);
        return view('layouts.slider.edit',compact('slider'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id, slider $slider)
    {
        //
        $slider=slider::findOrFail($id);

        if($request->hasFile('slider_image')){
            
            $image_path= public_path("\assets\imgs\\") .$slider->slider_image; 
            if (file_exists($image_path)) {

                @unlink($image_path);
            }
        
            $imageslider_image=$request->file('slider_image')->getClientOriginalName();
            $pathslider_image=$request->file('slider_image')->storeAs('slider',$imageslider_image);
            $slider->slider_image=$pathslider_image;
        }

            $slider->update([
                'slider_content1_en' => $request->slider_content1_en,
                'slider_content2_en' => $request->slider_content2_en,
                'slider_content3_en' => $request->slider_content3_en,
                'slider_content1' => $request->slider_content1,
                'slider_content2' => $request->slider_content2,
                'slider_content3' => $request->slider_content3,
                
            ]);
            return redirect()->route('Slider.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id,slider $slider)
    {
        //
        $slider=slider::findOrFail($request->id);


        $image_path= public_path("\assets\imgs\\") .$slider->slider_image; 
            if (file_exists($image_path)) {

                @unlink($image_path);
            }
        slider::findOrFail($request->id)->delete();
        return redirect()->route('Slider.index');

    }
}
