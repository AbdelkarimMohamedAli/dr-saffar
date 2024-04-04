<?php

namespace App\Http\Controllers;

use App\Models\menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $menus=menu::paginate(15);
        return view('layouts.menu.index',compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus=menu::all();
        return view('layouts.menu.create',compact('menus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $menu=new menu();

        $menu->label=$request->label	;
        $menu->ar_translate=$request->ar_translate;
        $menu->link=$request->link;
        $menu->parent=$request->parent;
        $menu->sort=$request->sort;

        $menu->save();
        return redirect()->route('Menu.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id,menu $menu)
    {
        //
        $menu=menu::findOrFail($id);
        $name_parent=$menu->parent;
        $menu_name_parent_name=menu::findOrFail($name_parent);
        $menu_name_parent=$menu_name_parent_name->label;
        $menu_name_parent_id=$menu_name_parent_name->id;
        $menus=menu::where('id','!=',$menu_name_parent_name->id)->get();
        

        return view('layouts.menu.edit',compact(['menus','menu','menu_name_parent','menu_name_parent_id']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id, menu $menu)
    {
        $menu=menu::findOrFail($id);
        $menu->update([

           'label'=>$request->label,
           'ar_translate'=>$request->ar_translate,
           'link'=>$request->link,
           'parent'=>$request->parent,
           'sort'=>$request->sort,
        ]);
        return redirect()->route('Menu.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id,menu $menu)
    {
        menu::findOrFail($request->id)->delete();
        return redirect()->route('Menu.index');
    }
}
