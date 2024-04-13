<?php

namespace App\Http\Controllers;

use App\Models\setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $settings=setting::paginate(15);
        return view('layouts.setting.index',compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $settings=setting::all();
        return view('layouts.setting.setting',compact('settings'));
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
       
        
        $setting=new setting();
        
        $setting->title_en=$request->title_en;
        $setting->title=$request->title;
        $setting->seo_keywords=$request->seo_keywords;
        $setting->seo_desc=$request->seo_desc;
        $setting->phone1=$request->phone1;
        $setting->phone2=$request->phone2;
        $setting->whatsapp=$request->whatsapp;
        $setting->email=$request->email;
        if($request->logo){
            $imagelogo=$request->file('logo')->getClientOriginalName();
            $pathlogo=$request->file('logo')->storeAs('setting',$imagelogo);
            $setting->logo=$pathlogo;
        }

        
        $setting->open_hours_en=$request->open_hours_en;
        $setting->open_hours=$request->open_hours;
        $setting->location_en=$request->location_en;
        $setting->location=$request->location;
        $setting->subtitle_en=$request->subtitle_en;
        $setting->subtitle=$request->subtitle;
        if($request->favicon){
            $imagefavicon=$request->file('favicon')->getClientOriginalName();
            $pathfavicon=$request->file('logo')->storeAs('setting',$imagefavicon);
            $setting->favicon=$pathfavicon;
        }
        if($request->dr_image){
            $imagedr_image=$request->file('dr_image')->getClientOriginalName();
            $pathdr_image=$request->file('dr_image')->storeAs('setting',$imagedr_image);
            $setting->dr_image=$pathdr_image;
        }

        $setting->dr_name_en=$request->dr_name_en;
        $setting->dr_name=$request->dr_name;
        $setting->instagram=$request->instagram;
        $setting->twitter=$request->twitter;
        $setting->facebook=$request->facebook;
        $setting->linkedin=$request->linkedin;

        
        $setting->save();
        // toastr()->success(trans('messages.success'));

            return redirect()->route('Setting.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id,setting $setting)
    {
        //
        $setting=setting::findOrFail($id);
        return view('layouts.setting.edit',compact('setting'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id, setting $setting)
    {   
        $validated = $request->validate([
            'title_en' => 'required',
            'title' => 'required',
            'seo_keywords' => 'required',
            'seo_desc' => 'required',
            'phone1' => 'required',
            'phone2' => 'required',
            'whatsapp' => 'required',
            'email' => 'required',
            'open_hours_en' => 'required',
            'open_hours' => 'required',
            'location_en' => 'required',
            'location' => 'required',
            'subtitle_en' => 'required',
            'subtitle' => 'required',
            'dr_name_en' => 'required',
            'dr_name' => 'required',
       

        ]);
        
        $setting=setting::findOrFail($id);

        if($request->hasFile('dr_image')){
            
            $image_path= public_path("\assets\imgs\\") .$setting->dr_image; 
            if (file_exists($image_path)) {

                @unlink($image_path);
            }
            $imagedr_image=$request->file('dr_image')->getClientOriginalName();
            $pathdr_image=$request->file('dr_image')->storeAs('setting',$imagedr_image);
            $setting->dr_image=$pathdr_image;
    
        }
        if($request->hasFile('favicon')){
            
            $image_path= public_path("\assets\imgs\\") .$setting->favicon; 
            if (file_exists($image_path)) {

                @unlink($image_path);
            }
            $imagefavicon=$request->file('favicon')->getClientOriginalName();
            $pathfavicon=$request->file('favicon')->storeAs('setting',$imagefavicon);
            $setting->favicon=$pathfavicon;

        }
        if($request->hasFile('logo')){
            
            $image_path= public_path("\assets\imgs\\") .$setting->logo; 
            if (file_exists($image_path)) {

                @unlink($image_path);
            }
            $imagelogo=$request->file('logo')->getClientOriginalName();
            $pathlogo=$request->file('logo')->storeAs('setting',$imagelogo);
            $setting->logo=$pathlogo;

            
        }
        $setting->update([
            'title_en' => $request->title_en,
            'title' => $request->title,
            'seo_keywords' => $request->seo_keywords,
            'seo_desc' => $request->seo_desc,
            'phone1' => $request->phone1,
            'phone2' => $request->phone2,
            'whatsapp' => $request->whatsapp,
            'email' => $request->email,
            'open_hours_en' => $request->open_hours_en,
            'open_hours' => $request->open_hours,
            'location_en' => $request->location_en,
            'location' => $request->location,
            'title_en' => $request->title_en,
            'subtitle_en' => $request->subtitle_en,
            'subtitle' => $request->subtitle,
            'dr_name_en' => $request->dr_name_en,
            'dr_name' => $request->dr_name,
            'instagram' => $request->instagram,
            'twitter' => $request->twitter,
            'facebook' => $request->facebook,
            'linkedin' => $request->linkedin,
        ]);
        
        return redirect()->route('Setting.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,setting $setting)
    {
        //
        $setting=setting::findOrFail($request->id);


        $image_path1= public_path("\assets\imgs\\") .$setting->logo; 
            if (file_exists($image_path1)) {

                @unlink($image_path1);
            }
            $image_path2= public_path("\assets\imgs\\") .$setting->favicon; 
            if (file_exists($image_path2)) {

                @unlink($image_path2);
            }
            $image_path3= public_path("\assets\imgs\\") .$setting->dr_image; 
            if (file_exists($image_path3)) {

                @unlink($image_path3);
            }
        setting::findOrFail($request->id)->delete();
        return redirect()->route('Setting.index');


    }
}
