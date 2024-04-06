<?php

namespace App\Http\Controllers;

use App\Models\doctor_section;
use Illuminate\Http\Request;

class DoctorSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctor_sections=doctor_section::paginate(15);
        return view('layouts.doctor_section.index',compact('doctor_sections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.doctor_section.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $doctor_section=new doctor_section();
        if($request->section_vector_img){

            $imagesection_vector_img=$request->file('section_vector_img')->getClientOriginalName();
            $pathsection_vector_img=$request->file('section_vector_img')->storeAs('doctor_section',$imagesection_vector_img);
            $doctor_section->section_vector_img=$pathsection_vector_img;
        }
        if($request->section_dr_img){

            $imagesection_dr_img=$request->file('section_dr_img')->getClientOriginalName();
            $pathsection_dr_img=$request->file('section_dr_img')->storeAs('doctor_section',$imagesection_dr_img);
            $doctor_section->section_dr_img=$pathsection_dr_img;
        }
        $doctor_section->section_title_en=$request->section_title_en;
        $doctor_section->section_title=$request->section_title;
        $doctor_section->section_sub_en=$request->section_sub_en;
        $doctor_section->section_sub=$request->section_sub;
        $doctor_section->section_desc_en=$request->section_desc_en;
        $doctor_section->section_desc=$request->section_desc;
        $doctor_section->dr_name_en=$request->dr_name_en;
        $doctor_section->dr_name=$request->dr_name;
        $doctor_section->dr_medical_title_en=$request->dr_medical_title_en;
        $doctor_section->dr_medical_title=$request->dr_medical_title;
        $doctor_section->Qualification_en=$request->Qualification_en;
        $doctor_section->Qualification=$request->Qualification;
        
        $doctor_section->save();
        return redirect()->route('DoctorSection.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\doctor_section  $doctor_section
     * @return \Illuminate\Http\Response
     */
    public function show(doctor_section $doctor_section)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\doctor_section  $doctor_section
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id,doctor_section $doctor_section)
    {
        $doctor_section=doctor_section::findOrFail($id);
        return view('layouts.doctor_section.edit',compact('doctor_section'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\doctor_section  $doctor_section
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id, doctor_section $doctor_section)
    {
        $doctor_section=doctor_section::findOrFail($id);

        if($request->hasFile('section_vector_img')){
            
            $image_path= public_path("\assets\imgs\\") .$doctor_section->section_vector_img; 
            if (file_exists($image_path)) {

                @unlink($image_path);
            }
        
            $imagesection_vector_img=$request->file('section_vector_img')->getClientOriginalName();
            $pathsection_vector_img=$request->file('section_vector_img')->storeAs('doctor_section',$imagesection_vector_img);
            $doctor_section->section_vector_img=$pathsection_vector_img;
        }
        if($request->hasFile('section_dr_img')){
            
            $image_path= public_path("\assets\imgs\\") .$doctor_section->section_dr_img; 
            if (file_exists($image_path)) {

                @unlink($image_path);
            }
        
            $imagesection_dr_img=$request->file('section_dr_img')->getClientOriginalName();
            $pathsection_dr_img=$request->file('section_dr_img')->storeAs('doctor_section',$imagesection_dr_img);
            $doctor_section->section_dr_img=$pathsection_dr_img;
        }

            $doctor_section->update([
                'section_title_en' => $request->section_title_en,
                'section_title' => $request->section_title,
                'section_sub_en' => $request->section_sub_en,
                'section_sub' => $request->section_sub,
                'section_desc_en' => $request->section_desc_en,
                'section_desc' => $request->section_desc,
                'dr_name_en' => $request->dr_name_en,
                'dr_name' => $request->dr_name,
                'dr_medical_title_en' => $request->dr_medical_title_en,
                'dr_medical_title' => $request->dr_medical_title,
                'Qualification_en' => $request->Qualification_en,
                'Qualification' => $request->Qualification,
            ]);
            return redirect()->route('DoctorSection.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\doctor_section  $doctor_section
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id,doctor_section $doctor_section)
    {
        $doctor_section=doctor_section::findOrFail($request->id);


        $image_path= public_path("\assets\imgs\\") .$doctor_section->section_vector_img; 
            if (file_exists($image_path)) {

                @unlink($image_path);
            }
            $image_path_section_dr_img= public_path("\assets\imgs\\") .$doctor_section->section_dr_img; 
            if (file_exists($image_path_section_dr_img)) {

                @unlink($image_path_section_dr_img);
            }
            doctor_section::findOrFail($request->id)->delete();
        return redirect()->route('DoctorSection.index');
    }
}
