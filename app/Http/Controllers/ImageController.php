<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function uploadForm()
    {
        return view('upload-image');
    }

    public function upload(Request $request)
    {
        // dd($request->all());
               $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $filename=time()."_".$request->image->getClientOriginalName();
        $t =$request->image->storeAs("songs",$filename);

        // $t =$request->image->getClientOriginalExtension();
        // dd($t);

        return \redirect()->back()->with("success","Image uploaded successfully");
        
        // $request->validate([
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);

        // $imageName = time().'.'.$request->image->extension();  

        // // $request->image->move(public_path('images'), $imageName);
        // $request->image->storeAs('images', $imageName, 'public');

        // return back()
        //     ->with('success','You have successfully upload image.')
        //     ->with('image',$imageName);
    }

    public function delete(Request $request)
    {
        // Storage::disk('public')->delete('images/'.$request->image);
        Storage::delete('songs/'.$request->image);
        dd("Deleted");
        // return \redirect()->back()->with("success","Image deleted successfully");
    }
}
