<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PhotoGallery;
use Image;
use Illuminate\Support\Carbon;


class PhotoGalleryController extends Controller
{
    public function showGallery(){
        $allImage = PhotoGallery::orderByDesc('id')->paginate(5);

        return view('frontend.photo.photo_gallery', compact('allImage'));
    } // End Method

    public function addImage(){
        return view('admin.gallery.add_image');
    } // End Method

    public function storeImage(Request $request){

        if ($request->hasFile('images')) {
            $images = $request->file('images');
            foreach ($images as $image) {
              $name_genrate = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
              Image::make($image)->resize(450,550)->save('upload/gallery/' . $name_genrate);
              $save_url = 'upload/gallery/' . $name_genrate;
              PhotoGallery::insert([
                'title'=> $request->title,
                'category'=> $request->category,
                'images' => $save_url,
                'created_at' => Carbon::now(),
              ]);
            } // End Foreach

            return redirect()->route('all.image')->with('message', "Images inserted Successfully");
          }  // End if
          else{
            return redirect()->back()->with('error', "Images has not inserted");
          }
     

    }   // End Method


    public function showAllImage(){
        $allImages = PhotoGallery::all();
        return view('admin.gallery.all_images', compact('allImages'));

    }  // End Method

    public function editImage($id){
        $editImage = PhotoGallery::findOrFail($id);
        return view('admin.gallery.edit_images', compact('editImage'));

    }  // End Method

    public function updateGalleryImage(Request $request){

        $gallery_image_id = $request->id;
        if($request->file('images')){
            $image = $request->file('images');
            $name_genrate = hexdec(uniqid()). '.' .$image->getClientOriginalExtension();
            Image::make($image)->resize(220,220)->save('upload/gallery/'. $name_genrate);
            $save_url = 'upload/gallery/'.$name_genrate;

            PhotoGallery::findOrFail($gallery_image_id)->update([
                'title'=> $request->title,
                'category'=> $request->category,
                'images'=> $save_url,
               
            ]);

            return redirect()->route('all.image')->with('message', "Gallery Image Updated Successfully");
        } 
        else{       

            return redirect()->route('all.image')->with('error', "Gallery Image Has Not Updated Successfully");
        } // End else
        
    } //End Method

    public function deleteGalleryImage($id){

        $image = PhotoGallery::findOrFail($id);
        $img= $image->images;
        unlink($img);

        PhotoGallery::findOrFail($id)->delete();

        return redirect()->back()->with('error', "Image is deleted Successfully");
        
    }

} // End class
