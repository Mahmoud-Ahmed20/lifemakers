<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\about;
use Illuminate\Support\Facades\File;



class Aboutcontroller extends Controller
{
    public function index()
    {
        $abouts = about::all();
        return view('admin.about.index',compact('abouts'));

    }//end index
    public function store(Request $request)
    {
        $About = new about;
        $image = $request -> file('image');
        $ext = $image->getClientOriginalExtension();
        $img = uniqid() . ".$ext";
        $image -> move( public_path('About/') , $img);
        $About->img = $img;
        $About->title = $request->title;
        $About->save();
        return redirect()->back()->with('add','تم الاضافة بنجاح');

    }//end store
    public function update(Request $request,$id)
    {
        $About =  about::find($id);
        if($request->hasFile('image')){
            if(File::exists('About/'.$About->img)){
                File::delete('About/'.$About->img);
            }//end if
            $image = $request -> file('image');
            $ext = $image->getClientOriginalExtension();
            $img = uniqid() . ".$ext";
            $image -> move( public_path('About/') , $img);
            $About->img = $img;
        }

        $About->title = $request->title;
        $About->save();
        return redirect()->back()->with('update','تم التعديل بنجاح');

    }//end update

}//end About controller
