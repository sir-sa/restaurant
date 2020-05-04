<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Bread;

class BreadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $breads= Bread::all();
        return view('admin.bread.index',compact('breads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.bread.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $breads = new Bread();
        if ($request->file('image')) {
            $file = $request->file('image');    
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename= time() . '.' . $extension;
            $file ->move('frontend/images/icons/',$filename);
            $breads->image =$filename;
        } else {
            return   $request;
            $breads ->image ='image';
        }
        $breads->heading=$request->input('heading');
        
        $breads->save();
        return redirect()->route("admin.bread.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $breads= Bread::findOrFail($id);
        return view('admin.bread.edit',compact('breads'));
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
        $request->validate([
            'image'=>'required',
            'heading'=>'required',
           
             
        ]);

        $breads = Bread::find($id);
        if ($request->file('image')) {
            $file = $request->file('image');    
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename= time() . '.' . $extension;
            $file ->move('frontend/images/icons/',$filename);
            $breads->image =$filename;
        }
         
        $breads->heading = $request->input('heading');
      
         
         
        $breads->save(); //persist the data
        return redirect()->route('admin.bread.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $breads= Bread::findOrFail($id);
        $breads->delete();
        return redirect()->route('admin.bread.index');
    }
}
