<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\About;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $abouts = About::all();
       return view('admin.about.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.about.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // handle file upload
        if($request->hasFile('image')){
            // get file with extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // just get filename
            $filename =pathinfo($filenameWithExt,PATHINFO_FILENAME);
            // get just extension
            $extension = $request->file('image')->getClientOriginalExtension();
            // filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // upload the image
            $path = $request->file('image')->storeAs('frontend/images/',$fileNameToStore);

        }
        else{
            $fileNameToStore ="noimage.jpg";
        }
        $abouts = new About();
        // if ($request->file('image')) {
        //     $file = $request->file('image');
        //     $extension = $file->getClientOriginalExtension(); //getting image extension
        //     $filename= time() . '.' . $extension;
        //     $file ->move('frontend/images/',$filename);
        //     $abouts->image =$filename;
        // } else {
        //     return   $request;
        //     $abouts ->image ='image';
        // }
        $abouts->image = $fileNameToStore;
        $abouts->heading=$request->input('heading');
        $abouts->description=$request->input('description');
        $abouts->text=$request->input('text');
        $abouts->save();
        return redirect()->route("admin.about.index");
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
        $abouts= About::findOrFail($id);
        return view('admin.about.edit',compact('abouts'));
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

        $abouts = About::find($id);
        if ($request->file('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename= time() . '.' . $extension;
            $file ->move('frontend/images/',$filename);
            $abouts->image =$filename;
        }

        $abouts->heading = $request->input('heading');
        $abouts->description = $request->input('description');
        $abouts->text = $request->input('text');


        $abouts->save(); //persist the data
        return redirect()->route('admin.about.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $abouts = About::findOrFail($id);
        $abouts->delete();
        return redirect()->route('admin.about.index');
    }
}
