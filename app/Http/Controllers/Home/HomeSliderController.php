<?php

namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSlider;
use Image;

class HomeSliderController extends Controller
{
    public function homeSlider(){
        $homeSlide = HomeSlider::find(1);
        return view('admin.homeslider.home_slider_all', compact('homeSlide'));
    } //End Method

    public function updateSlider(Request $request){
        $slide_id = $request->id;
        if($request->file('home_slide')){
            $image = $request->file('home_slide');
            $name_genrate = hexdec(uniqid()). '.' .$image->getClientOriginalExtension();
            Image::make($image)->resize(850,970)->save('upload/home_slide/'. $name_genrate);
            $save_url = 'upload/home_slide/'.$name_genrate;

            HomeSlider::findOrFail($slide_id)->update([
                'title'=> $request->title,
                'short_title'=> $request->short_title,
                'video_url'=> $request->video_url,
                'home_slide'=> $save_url,
               
            ]);

            return redirect()->back()->with('message', "Home SLider Updated with Image Successfully");
        } else{
            HomeSlider::findOrFail($slide_id)->update([
                'title'=> $request->title,
                'short_title'=> $request->short_title,
                'video_url'=> $request->video_url,
                
               
            ]);

            return redirect()->back()->with('message', "Home SLider Updated without Image Successfully");
        } // End else
    } // End Method


}


