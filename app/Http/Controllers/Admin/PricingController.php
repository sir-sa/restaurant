<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pricing;

class PricingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prices = Pricing::all();
        return view('admin.pricing.index',compact('prices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pricing.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prices = new Pricing();
        if ($request->file('image')) {
            $file = $request->file('image');    
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename= time() . '.' . $extension;
            $file ->move('frontend/images/',$filename);
            $prices->image =$filename;
        } else {
            return   $request;
            $prices ->image ='image';
        }
        $prices->heading=$request->input('heading');
        $prices->description=$request->input('description');
        $prices->cash=$request->input('cash');
        $prices->save();
        return redirect()->route("admin.pricing.index");
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
        $prices= Pricing::findOrFail($id);
        return view('admin.pricing.edit',compact('prices'));
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
            'cash'=>'required',
             
        ]);

        $prices = Pricing::find($id);
        if ($request->file('image')) {
            $file = $request->file('image');    
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename= time() . '.' . $extension;
            $file ->move('frontend/images/',$filename);
            $prices->image =$filename;
        }
         
        $prices->heading = $request->input('heading');
        $prices->description = $request->input('description');
        $prices->cash = $request->input('cash');
         
         
        $prices->save(); //persist the data
        return redirect()->route('admin.pricing.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prices= Pricing::findOrFail($id);
        $prices->delete();
        return redirect()->route('admin.pricing.index');
    }
}
