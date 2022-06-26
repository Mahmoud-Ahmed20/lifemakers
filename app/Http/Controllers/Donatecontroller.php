<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\donate;

class Donatecontroller extends Controller
{
    public function index()
    {
        $donates = donate::all();
        return view('admin.donate.index',compact('donates'));
    }//end index
    public function store(Request $request)
    {
        // dd($request->all());

        $donates = new donate;
        $donates->donate_amount = $request->donate_amount;
        $donates->quantity = $request->quantity;
        $donates->payment_method = $request->payment_method;
        $donates->name = $request->name;
        $donates->email = $request->email;
        $donates->phone = $request->phone;
        $donates->address =$request->address;
        $donates->Month = $request->Month;
        $donates->save();
         return redirect()->back()->with('add','تم تسجيل التبرع بنجاح');

    }//end store
}
