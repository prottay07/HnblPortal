<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\MultiImage;
use Image;
use Illuminate\Support\Carbon;

class AboutController extends Controller
{
    public function aboutPage(){
       
            $aboutPage = About::find(1);
            return view('admin.about_all.about_page', compact('aboutPage'));

        } //End Method
    
        public function updateAbout(Request $request){
            $about_id = $request->id;
            if($request->file('about_image')){
                $image = $request->file('about_image');
                $name_genrate = hexdec(uniqid()). '.' .$image->getClientOriginalExtension();
                Image::make($image)->resize(523,605)->save('upload/about/'. $name_genrate);
                $save_url = 'upload/about/'.$name_genrate;
    
                About::findOrFail($about_id)->update([
                    'title'=> $request->title,
                    'short_title'=> $request->short_title,
                    'short_desc'=> $request->short_desc,
                    'long_desc'=> $request->long_desc,
                    'about_image'=> $save_url,
                   
                ]);
    
                return redirect()->back()->with('message', "Update Page Updated with Image Successfully");
            } else{
                About::findOrFail($about_id)->update([
                    'title'=> $request->title,
                    'short_title'=> $request->short_title,
                    'short_desc'=> $request->short_desc,
                    'long_desc'=> $request->long_desc,
                    
                    
                   
                ]);
    
                return redirect()->back()->with('message', "Update Page Updated without Image Successfully");
            } // End else
        } // End Method

        public function aboutHome(){

            $aboutPage = About::find(1);

            return view('frontend.home_all.about_page', compact('aboutPage'));
        }

        public function aboutMultiImage(){
            return view('admin.about_all.multiimage');
        }

        
    public function storeMultiImage(Request $request){

        if ($request->hasFile('multi_image')) {
            $images = $request->file('multi_image');
            foreach ($images as $multi_image) {
              $name_genrate = hexdec(uniqid()) . '.' . $multi_image->getClientOriginalExtension();
              Image::make($multi_image)->resize(220,220)->save('upload/about_multi/' . $name_genrate);
              $save_url = 'upload/about_multi/' . $name_genrate;
              MultiImage::insert([
                'multi_image' => $save_url,
                'created_at' => Carbon::now(),
              ]);
            } // End Foreach

            return redirect()->back()->with('message', "Multi Images inserted Successfully");
          }  // End if
          else{
            return redirect()->back()->with('error', "Images has not inserted");
          }
     

    }   // End Method

    public function allMultiImage(){

        $allMultiImage = MultiImage::all();
        return view('admin.about_all.all_multi_image', compact('allMultiImage'));
    }

    public function editMultiImage($id){
        $editMultiImage = MultiImage::findOrFail($id);
        return view('admin.about_all.edit_multi_image', compact('editMultiImage'));
    }



    public function updateMultiImage(Request $request){

        $multi_image_id = $request->id;
        if($request->file('multi_image')){
            $image = $request->file('multi_image');
            $name_genrate = hexdec(uniqid()). '.' .$image->getClientOriginalExtension();
            Image::make($image)->resize(220,220)->save('upload/about_multi/'. $name_genrate);
            $save_url = 'upload/about_multi/'.$name_genrate;

            MultiImage::findOrFail($multi_image_id)->update([
               
                'multi_image'=> $save_url,
               
            ]);

            return redirect()->route('all.multi.image')->with('message', "Multi Image Updated Successfully");
        } 
        else{       

            return redirect()->route('all.multi.image')->with('error', "Multi Image Has Not Updated Successfully");
        } // End else
        
    }


    public function deleteMultiImage($id){

        $multi = MultiImage::findOrFail($id);
        $img= $multi->multi_image;
        unlink($img);

        MultiImage::findOrFail($id)->delete();

        return redirect()->back()->with('error', "Image is deleted Successfully");
        
    }

   
} // End Class
