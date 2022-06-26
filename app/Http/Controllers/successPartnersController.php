<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\success_partners;
use Illuminate\Support\Facades\File;


class successPartnersController extends Controller
{
    public function index()
    {
        $successPartners = success_partners::all();
        return view('admin.successPartners.index',compact('successPartners'));

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
                $image->move('successPartners',$newName);
                $success_partners = new  success_partners;
                $success_partners->img = $newName;
                $success_partners->save();
            }//end foreach
        }//end if
        return  redirect()->back()->with('add','تم اضافة الصور بنجاح');
    }//end store
    public function update(Request $request,$id)
    {

        $success_partner = success_partners::findOrFail($id);
        if(File::exists('successPartners/'.$success_partner->img)){
            File::delete('successPartners/'.$success_partner->img);
        }//end if

        $image = $request -> file('image');
        $ext = $image->getClientOriginalExtension();
        $img1 = uniqid() . ".$ext";
        $image -> move(public_path('successPartners/') , $img1);
        $success_partner->img = $img1;
        $success_partner->save();
        return  redirect()->back()->with('update','تم تعديل الصور بنجاح');


    }//end update
    public function delete($id)
    {
        $success_partner = success_partners::findOrFail($id);
        if(File::exists('successPartners/'.$success_partner->img)){
            File::delete('successPartners/'.$success_partner->img);
        }//end if
        success_partners::find($id)->delete();
        return  redirect()->back()->with('delete','تم حذف الصور بنجاح');
    }//end delete


}

