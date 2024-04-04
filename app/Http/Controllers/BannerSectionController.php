<?php

namespace App\Http\Controllers;

use App\Models\banner_section;
use Illuminate\Http\Request;

class BannerSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $banner_sections=banner_section::paginate(15);
        return view('layouts.banner_section.index',compact('banner_sections'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $banner_section=banner_section::all();
        return view('layouts.banner_section.create',compact('banner_section'));
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
        $banner_section=new banner_section();

        $banner_section->title_en=$request->title_en	;
        $banner_section->title=$request->title;

        $banner_section->save();
        return redirect()->route('Banner.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\banner_section  $banner_section
     * @return \Illuminate\Http\Response
     */
    public function show(banner_section $banner_section)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\banner_section  $banner_section
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id,banner_section $banner_section)
    {
        //
        $banner_section=banner_section::findOrFail($id);
        return view('layouts.banner_section.edit',compact('banner_section'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\banner_section  $banner_section
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id, banner_section $banner_section)
    {
        //
        $banner_section=banner_section::findOrFail($id);
        $banner_section->update([
            'title_en' => $request->title_en,
            'title' => $request->title,
        ]);
        return redirect()->route('Banner.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\banner_section  $banner_section
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id,banner_section $banner_section)
    {
        banner_section::findOrFail($request->id)->delete();
        return redirect()->route('Banner.index');
    }
}