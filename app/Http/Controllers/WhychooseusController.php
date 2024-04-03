<?php

namespace App\Http\Controllers;

use App\Models\whychooseus;
use Illuminate\Http\Request;

class WhychooseusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $whychooseuss=whychooseus::paginate(15);
        return view('layouts.whychooseus.index',compact('whychooseuss'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $whychooseus=whychooseus::all();
        return view('layouts.whychooseus.create',compact('whychooseus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $whychooseus=new whychooseus();

        
        $whychooseus->section_title_en=$request->section_title_en;
        $whychooseus->section_title=$request->section_title;
        $whychooseus->section_sub_en=$request->section_sub_en;
        $whychooseus->section_sub=$request->section_sub;
        $whychooseus->section_desc_en=$request->section_desc_en;
        $whychooseus->section_desc=$request->section_desc;
        $whychooseus->box_title_1_en=$request->box_title_1_en;
        $whychooseus->box_title_2_en=$request->box_title_2_en;
        $whychooseus->box_title_3_en=$request->box_title_3_en;
        $whychooseus->box_title_3_en=$request->box_title_3_en;
        $whychooseus->box_title_1=$request->box_title_1;
        $whychooseus->box_title_2=$request->box_title_2;
        $whychooseus->box_title_3=$request->box_title_3;
        $whychooseus->box_title_4=$request->box_title_4;
        $whychooseus->box_counter_1=$request->box_counter_1;
        $whychooseus->box_counter_2=$request->box_counter_2;
        $whychooseus->box_counter_3=$request->box_counter_3;
        $whychooseus->box_counter_4=$request->box_counter_4;


        $whychooseus->save();
        return redirect()->route('Whychooseus.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\whychooseus  $whychooseus
     * @return \Illuminate\Http\Response
     */
    public function show(whychooseus $whychooseus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\whychooseus  $whychooseus
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,whychooseus $whychooseus)
    {
        $whychooseus=whychooseus::findOrFail($id);
        return view('layouts.whychooseus.edit',compact('whychooseus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\whychooseus  $whychooseus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id, whychooseus $whychooseus)
    {
        $whychooseus=whychooseus::findOrFail($id);
        $whychooseus->update([
            'section_title_en' => $request->section_title_en,
            'section_title' => $request->section_title,
            'section_sub_en' => $request->section_sub_en,
            'section_sub' => $request->section_sub,
            'section_desc_en' => $request->section_desc_en,
            'box_title_1_en' => $request->box_title_1_en,
            'box_title_2_en' => $request->box_title_2_en,
            'box_title_3_en' => $request->box_title_3_en,
            'box_title_4_en' => $request->box_title_4_en,
            'box_title_1' => $request->box_title_1,
            'box_title_2' => $request->box_title_2,
            'box_title_3' => $request->box_title_3,
            'box_title_4' => $request->box_title_4,
            'box_counter_1' => $request->box_counter_1,
            'box_counter_2' => $request->box_counter_2,
            'box_counter_3' => $request->box_counter_3,
            'box_counter_4' => $request->box_counter_4,  
        ]);
        return redirect()->route('Whychooseus.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\whychooseus  $whychooseus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id,whychooseus $whychooseus)
    {
        whychooseus::findOrFail($request->id)->delete();
        return redirect()->route('whychooseus.index');
    }
}
