<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Ourbeer;

class OurbeerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ourbeers = Ourbeer::all();
        return view('admin.ourbeer.index',compact('ourbeers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ourbeer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ourbeers = new Ourbeer();
        if ($request->file('image')) {
            $file = $request->file('image');    
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename= time() . '.' . $extension;
            $file ->move('frontend/images/icons',$filename);
            $ourbeers->image =$filename;
        } else {
            return   $request;
            $ourbeers ->image ='image';
        }
        $ourbeers->heading=$request->input('heading');
        $ourbeers->description=$request->input('description');
        $ourbeers->text=$request->input('text');
        $ourbeers->save();
        return redirect()->route("admin.ourbeer.index");
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
        $ourbeers= Ourbeer::findOrFail($id);
        return view('admin.ourbeer.edit',compact('ourbeers'));
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

        $ourbeers = Ourbeer::find($id);
        if ($request->file('image')) {
            $file = $request->file('image');    
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename= time() . '.' . $extension;
            $file ->move('frontend/images/icons/',$filename);
            $ourbeers->image =$filename;
        }
         
        $ourbeers->heading = $request->input('heading');
        $ourbeers->description = $request->input('description');
        $ourbeers->text = $request->input('text');
         
         
        $ourbeers->save(); //persist the data
        return redirect()->route('admin.ourbeer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ourbeers= Ourbeer::findOrFail($id);
        $ourbeers->delete();
        return redirect()->route('admin.ourbeer.index');
    }
}
