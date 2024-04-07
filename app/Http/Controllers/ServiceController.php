<?php

namespace App\Http\Controllers;

use App\Models\service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services=service::paginate(15);
        return view('layouts.service.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('layouts.service.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service=new service();
        if($request->services_img){

            $imageservices_img=$request->file('services_img')->getClientOriginalName();
            $pathservices_img=$request->file('services_img')->storeAs('service',$imageservices_img);
            $service->services_img=$pathservices_img;
        }
        if($request->services_icon){

            $imageservices_icon=$request->file('services_icon')->getClientOriginalName();
            $pathservices_icon=$request->file('services_icon')->storeAs('service',$imageservices_icon);
            $service->services_icon=$pathservices_icon;
        }
        $service->services_title_en=$request->services_title_en;
        $service->services_title=$request->services_title;
        $service->slug=$request->slug;
        $service->services_desc_en=$request->services_desc_en;
        $service->services_desc=$request->services_desc;
        $service->services_subtitle_en=$request->services_subtitle_en;
        $service->services_subtitle=$request->services_subtitle;
        $service->services_seo_keywords=$request->services_seo_keywords;
        
        $service->save();
        return redirect()->route('Service.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id,service $service)
    {
        $service=service::findOrFail($id);
        return view('layouts.service.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id, service $service)
    {
        $service=service::findOrFail($id);

        if($request->hasFile('services_img')){
            
            $image_path= public_path("\assets\imgs\\") .$service->services_img; 
            if (file_exists($image_path)) {

                @unlink($image_path);
            }
        
            $imageservices_img=$request->file('services_img')->getClientOriginalName();
            $pathservices_img=$request->file('services_img')->storeAs('service',$imageservices_img);
            $service->services_img=$pathservices_img;
        }
        if($request->hasFile('services_icon')){
            
            $image_path= public_path("\assets\imgs\\") .$service->services_icon; 
            if (file_exists($image_path)) {

                @unlink($image_path);
            }
        
            $imageservices_icon=$request->file('services_icon')->getClientOriginalName();
            $pathservices_icon=$request->file('services_icon')->storeAs('service',$imageservices_icon);
            $service->services_icon=$pathservices_icon;
        }

            $service->update([
                'services_title_en' => $request->services_title_en,
                'services_title' => $request->services_title,
                'slug' => $request->slug,
                'section_sub' => $request->section_sub,
                'services_desc_en' => $request->services_desc_en,
                'services_desc' => $request->services_desc,
                'services_subtitle_en' => $request->services_subtitle_en,
                'services_subtitle' => $request->services_subtitle,
                'services_seo_keywords' => $request->services_seo_keywords,
            ]);
            return redirect()->route('Service.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id,service $service)
    {
        $service=service::findOrFail($request->id);


        $image_path= public_path("\assets\imgs\\") .$service->services_img; 
            if (file_exists($image_path)) {

                @unlink($image_path);
            }
            $image_path_services_icon= public_path("\assets\imgs\\") .$service->services_icon; 
            if (file_exists($image_path_services_icon)) {

                @unlink($image_path_services_icon);
            }
            service::findOrFail($request->id)->delete();
        return redirect()->route('Service.index');
    }
}
