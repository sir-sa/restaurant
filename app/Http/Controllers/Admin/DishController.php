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
