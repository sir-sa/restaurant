<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Dish;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dishes = Dish::all();
        return view('admin.dish.index',compact('dishes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dish.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dishes = new Dish();
         // handle file upload
         if($request->hasFile('image') || $request->hasFile('list1') || $request->hasFile('list2') || $request->hasFile('list3')
         || $request->hasFile('list4') || $request->hasFile('list5') || $request->hasFile('list6') || $request->hasFile('list7')
         || $request->hasFile('list8') || $request->hasFile('list9') || $request->hasFile('list10') || $request->hasFile('list11')){
            // get file with extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filenameWithExt = $request->file('list1')->getClientOriginalName();
            $filenameWithExt = $request->file('list2')->getClientOriginalName();
            $filenameWithExt = $request->file('list3')->getClientOriginalName();
            $filenameWithExt = $request->file('list4')->getClientOriginalName();
            $filenameWithExt = $request->file('list5')->getClientOriginalName();
            $filenameWithExt = $request->file('list6')->getClientOriginalName();
            $filenameWithExt = $request->file('list7')->getClientOriginalName();
            $filenameWithExt = $request->file('list8')->getClientOriginalName();
            $filenameWithExt = $request->file('list9')->getClientOriginalName();
            $filenameWithExt = $request->file('list10')->getClientOriginalName();
            $filenameWithExt = $request->file('list11')->getClientOriginalName();
            // just get filename
            $filename =pathinfo($filenameWithExt,PATHINFO_FILENAME);
            $filename1 =pathinfo($filenameWithExt,PATHINFO_FILENAME);
            $filename2 =pathinfo($filenameWithExt,PATHINFO_FILENAME);
            $filename3 =pathinfo($filenameWithExt,PATHINFO_FILENAME);
            $filename4 =pathinfo($filenameWithExt,PATHINFO_FILENAME);
            $filename5 =pathinfo($filenameWithExt,PATHINFO_FILENAME);
            $filename6 =pathinfo($filenameWithExt,PATHINFO_FILENAME);
            $filename7 =pathinfo($filenameWithExt,PATHINFO_FILENAME);
            $filename8 =pathinfo($filenameWithExt,PATHINFO_FILENAME);
            $filename9 =pathinfo($filenameWithExt,PATHINFO_FILENAME);
            $filename10 =pathinfo($filenameWithExt,PATHINFO_FILENAME);
            $filename11 =pathinfo($filenameWithExt,PATHINFO_FILENAME);
            // get just extension
            $extension = $request->file('image')->getClientOriginalExtension();
            $extension = $request->file('list1')->getClientOriginalExtension();
            $extension = $request->file('list2')->getClientOriginalExtension();
            $extension = $request->file('list3')->getClientOriginalExtension();
            $extension = $request->file('list4')->getClientOriginalExtension();
            $extension = $request->file('list5')->getClientOriginalExtension();
            $extension = $request->file('list6')->getClientOriginalExtension();
            $extension = $request->file('list7')->getClientOriginalExtension();
            $extension = $request->file('list8')->getClientOriginalExtension();
            $extension = $request->file('list9')->getClientOriginalExtension();
            $extension = $request->file('list10')->getClientOriginalExtension();
            $extension = $request->file('list11')->getClientOriginalExtension();
            // filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $fileNameToStore = $filename1.'_'.time().'.'.$extension;
            $fileNameToStore = $filename2.'_'.time().'.'.$extension;
            $fileNameToStore = $filename3.'_'.time().'.'.$extension;
            $fileNameToStore = $filename4.'_'.time().'.'.$extension;
            $fileNameToStore = $filename5.'_'.time().'.'.$extension;
            $fileNameToStore = $filename6.'_'.time().'.'.$extension;
            $fileNameToStore = $filename7.'_'.time().'.'.$extension;
            $fileNameToStore = $filename8.'_'.time().'.'.$extension;
            $fileNameToStore = $filename9.'_'.time().'.'.$extension;
            $fileNameToStore = $filename10.'_'.time().'.'.$extension;
            $fileNameToStore = $filename11.'_'.time().'.'.$extension;
            // upload the image
            $path = $request->file('image')->storeAs('frontend/images/icons/',$fileNameToStore);
            $path = $request->file('list1')->storeAs('frontend/images/menu-gallery/',$fileNameToStore);
            $path = $request->file('list2')->storeAs('frontend/images/menu-gallery/',$fileNameToStore);
            $path = $request->file('list3')->storeAs('frontend/images/menu-gallery/',$fileNameToStore);
            $path = $request->file('list4')->storeAs('frontend/images/menu-gallery/',$fileNameToStore);
            $path = $request->file('list5')->storeAs('frontend/images/menu-gallery/',$fileNameToStore);
            $path = $request->file('list6')->storeAs('frontend/images/menu-gallery/',$fileNameToStore);
            $path = $request->file('list7')->storeAs('frontend/images/menu-gallery/',$fileNameToStore);
            $path = $request->file('list8')->storeAs('frontend/images/menu-gallery/',$fileNameToStore);
            $path = $request->file('list9')->storeAs('frontend/images/menu-gallery/',$fileNameToStore);
            $path = $request->file('list10')->storeAs('frontend/images/menu-gallery/',$fileNameToStore);
            $path = $request->file('list11')->storeAs('frontend/images/menu-gallery/',$fileNameToStore);

        }
        else{
            $fileNameToStore ="noimage.jpg";
        }

        // if ($request->file('image')) {
        //     $file = $request->file('image');
        //     $extension = $file->getClientOriginalExtension(); //getting image extension
        //     $filename= time() . '.' . $extension;
        //     $file ->move('frontend/images/',$filename);
        //     $dishes->image =$filename;
        // } else {
        //     return   $request;
        //     $dishes ->image ='image';
        // }



        $dishes->save();
        return redirect()->route("admin.dish.index");
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
       $dishes = Dish::findOrFail($id);
       return view("admin.dish.edit",compact('dishes'));
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
            'list1'=>'required',
            'list2'=>'required',
            'list3'=>'required',
            'list4'=>'required',
            'list5'=>'required',
            'list6'=>'required',
            'list7'=>'required',
            'list8'=>'required',
            'list9'=>'required',
            'list10'=>'required',
            'list11'=>'required',


        ]);

        $dishes = Dish::find($id);
        if ($request->file('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename= time() . '.' . $extension;
            $file ->move('frontend/images/',$filename);
            $dishes->image =$filename;
        } else {
            return   $request;
            $dishes ->image ='image';
        }
        if ($request->file('list1')) {
            $file = $request->file('list1');
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename= time() . '.' . $extension;
            $file ->move('frontend/images/',$filename);
            $dishes->image =$filename;
        } else {
            return   $request;
            $dishes ->list1 ='image';
        }
        if ($request->file('list2')) {
            $file = $request->file('list2');
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename= time() . '.' . $extension;
            $file ->move('frontend/images/',$filename);
            $dishes->list2 =$filename;
        } else {
            return   $request;
            $dishes ->list2 ='list2';
        }
        if ($request->file('list3')) {
            $file = $request->file('list3');
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename= time() . '.' . $extension;
            $file ->move('frontend/images/',$filename);
            $dishes->list3 =$filename;
        } else {
            return   $request;
            $dishes ->list3 ='list3';
        }
        if ($request->file('list4')) {
            $file = $request->file('list4');
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename= time() . '.' . $extension;
            $file ->move('frontend/images/',$filename);
            $dishes->list4 =$filename;
        } else {
            return   $request;
            $dishes ->list4 ='list4';
        }
        if ($request->file('list5')) {
            $file = $request->file('list5');
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename= time() . '.' . $extension;
            $file ->move('frontend/images/',$filename);
            $dishes->list5 =$filename;
        } else {
            return   $request;
            $dishes ->list5 ='list5';
        }
        if ($request->file('list6')) {
            $file = $request->file('list6');
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename= time() . '.' . $extension;
            $file ->move('frontend/images/',$filename);
            $dishes->list6 =$filename;
        } else {
            return   $request;
            $dishes ->list6 ='list6';
        }
        if ($request->file('list7')) {
            $file = $request->file('list7');
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename= time() . '.' . $extension;
            $file ->move('frontend/images/',$filename);
            $dishes->list7 =$filename;
        } else {
            return   $request;
            $dishes ->list7 ='list7';
        }
        if ($request->file('list8')) {
            $file = $request->file('list8');
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename= time() . '.' . $extension;
            $file ->move('frontend/images/',$filename);
            $dishes->list8=$filename;
        } else {
            return   $request;
            $dishes ->list8 ='list8';
        }
        if ($request->file('list9')) {
            $file = $request->file('list9');
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename= time() . '.' . $extension;
            $file ->move('frontend/images/',$filename);
            $dishes->list9=$filename;
        } else {
            return   $request;
            $dishes ->list8 ='list9';
        }
        if ($request->file('list10')) {
            $file = $request->file('list10');
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename= time() . '.' . $extension;
            $file ->move('frontend/images/',$filename);
            $dishes->list10=$filename;
        } else {
            return   $request;
            $dishes ->list10 ='list10';
        }
        if ($request->file('list11')) {
            $file = $request->file('list11');
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename= time() . '.' . $extension;
            $file ->move('frontend/images/',$filename);
            $dishes->list11=$filename;
        } else {
            return   $request;
            $dishes ->list10 ='list11';
        }

        $dishes->save();
        return redirect()->route("admin.dish.index");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dishes= Dish::findOrFail($id);
        $dishes->delete();
        return redirect()->route('admin.dish.index');
    }
}
