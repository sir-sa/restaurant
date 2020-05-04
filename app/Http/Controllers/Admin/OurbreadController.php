<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Ourbread;

class OurbreadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ourbreads = Ourbread::all();
        return view('admin.ourbread.index',compact('ourbreads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ourbread.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ourbreads = new Ourbread();
        if ($request->file('image')) {
            $file = $request->file('image');    
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename= time() . '.' . $extension;
            $file ->move('frontend/images/icons',$filename);
            $ourbreads->image =$filename;
        } else {
            return   $request;
            $ourbreads ->image ='image';
        }
        $ourbreads->heading=$request->input('heading');
        $ourbreads->description=$request->input('description');
        $ourbreads->text=$request->input('text');
        $ourbreads->save();
        return redirect()->route("admin.ourbread.index");
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
        $ourbreads= Ourbread::findOrFail($id);
        return view('admin.ourbread.edit',compact('ourbread'));
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
            'description'=>'required',
            'text'=>'required',
             
        ]);

        $ourbreads = Ourbread::find($id);
        if ($request->file('image')) {
            $file = $request->file('image');    
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename= time() . '.' . $extension;
            $file ->move('frontend/images/icons/',$filename);
            $ourbreads->image =$filename;
        }
         
        $ourbreads->heading = $request->input('heading');
        $ourbreads->description = $request->input('description');
        $ourbreads->text = $request->input('text');
         
         
        $ourbreads->save(); //persist the data
        return redirect()->route('admin.ourbread.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ourbreads= Ourbread::findOrFail($id);
        $ourbreads->delete();
        return redirect()->route('admin.ourbread.index');
    }
}
