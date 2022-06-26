<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\achievements;
use Illuminate\Support\Facades\File;

class Achievementscontroller extends Controller
{

    public function index()
    {
        $Achievements = Achievements::all();
        return view('admin.achievements.index',compact('Achievements'));
    }//end index
    public function store(Request $request)
    {
        $Achievement = new achievements;
        $image = $request -> file('image');
        $ext = $image->getClientOriginalExtension();
        $img = uniqid() . ".$ext";
        $image -> move( public_path('Achievement/') , $img);
        $Achievement->img = $img;
        $Achievement->title = $request->title;
        $Achievement->save();
        return redirect()->back()->with('add','تم الاضافة بنجاح');

    }//end store

    public function update(Request $request,$id)
    {

        $Achievement =  achievements::find($id);
        if($request->hasFile('image')){
            if(File::exists('Achievement/'.$Achievement->img)){
                File::delete('Achievement/'.$Achievement->img);
            }//end if
            $image = $request -> file('image');
            $ext = $image->getClientOriginalExtension();
            $img = uniqid() . ".$ext";
            $image -> move( public_path('Achievement/') , $img);
            $Achievement->img = $img;
        }

        $Achievement->title = $request->title;
        $Achievement->save();
        return redirect()->back()->with('update','تم التعديل بنجاح');
    }//end update
    public function delete($id)
    {
        $Achievement = achievements::findOrFail($id);
        if(File::exists('Achievement/'.$Achievement->img)){
            File::delete('Achievement/'.$Achievement->img);
        }//end if
        achievements::find($id)->delete();
        return  redirect()->back()->with('delete','تم حذف الصور بنجاح');

    }// end delete



}
