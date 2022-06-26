<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\models\slider;
class Slidercontroller extends Controller
{
    public function index()
    {
        $images = slider::all();
        return view('admin.slider.index',compact('images'));
    }//end index
    public function store(Request $request)
    {
        $request->validate([
            'image'=>'required'
        ]);

        if($request->hasFile('image'))
        {
            foreach($request->image as $image)
            {
                $imageName = $image->getClientOriginalName();
                $imageExt = $image->getClientOriginalExtension();
                $newName = uniqid('',true).".".$imageExt;
                $image->move('Slider',$newName);
                $image = new  slider;
                $image->img = $newName;
                $image->save();
            }//end foreach
        }//end if
        return  redirect()->back()->with('add','تم اضافة الصور بنجاح');
    }//end store


    public function update(Request $request,$id)
    {
        $img = slider::findOrFail($id);
        if(File::exists('Slider/'.$img->img)){
            File::delete('Slider/'.$img->img);
        }//end if

        $image = $request -> file('image');
        $ext = $image->getClientOriginalExtension();
        $img1 = uniqid() . ".$ext";
        $image -> move(public_path('Slider/') , $img1);
        $img->img = $img1;
        $img->save();
        return  redirect()->back()->with('update','تم تعديل الصور بنجاح');

    }
    public function delete($id)
    {
        $image = slider::findOrFail($id);
        if(File::exists('Slider/'.$image->img)){
            File::delete('Slider/'.$image->img);
        }//end if
        slider::find($id)->delete();
        return  redirect()->back()->with('delete','تم حذف الصور بنجاح');

    }//end delete


}//end Slider controller
