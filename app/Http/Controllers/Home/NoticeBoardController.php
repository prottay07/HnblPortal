<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NoticeBoard;
use Image;
use Illuminate\Support\Carbon;

class NoticeBoardController extends Controller
{
    public function viewAllNotice(){
        $allNotice = NoticeBoard::latest()->get();
        return view('admin.notices.notice_view', compact('allNotice'));
    } // End Method

    public function addNotice(){
        return view('admin.notices.add_notice');
    } // End Method

    public function storeNotice(Request $request){

       
        if($request->file('notice_img')){
            $image = $request->file('notice_img');
            $name_genrate = hexdec(uniqid()). '.' .$image->getClientOriginalExtension();
            Image::make($image)->resize(1020,519)->save('upload/notices/'. $name_genrate);
            $save_url = 'upload/notices/'.$name_genrate;

            NoticeBoard::insert([
                'notice_title'=> $request->notice_title,
                'notice_name'=> $request->notice_name,
                'notice_desc'=> $request->notice_desc,
                'notice_time_start'=> $request->notice_time_start,
                'notice_time_end'=> $request->notice_time_end,
                'notice_img'=> $save_url,
               
            ]);

            return redirect()->back()->with('message', "Notice inserted with Image Successfully");
        } else{
            NoticeBoard::insert([
                'notice_title'=> $request->notice_title,
                'notice_name'=> $request->notice_name,
                'notice_desc'=> $request->notice_desc,
                'notice_time_start'=> $request->notice_time_start,
                'notice_time_end'=> $request->notice_time_end,
              
               
            ]);
                
               
           

            return redirect()->back()->with('message', "Notice inserted without Image Successfully");
        } // End else

        
    }  //End Method

    public function editNotice($id){
        $editNotice = NoticeBoard::findOrFail($id);
        return view('admin.notices.edit_notice', compact('editNotice'));

    }

    public function updateNotice(Request $request){

       $noticeId = $request->id;

        if($request->file('notice_img')){
            $image = $request->file('notice_img');
            $name_genrate = hexdec(uniqid()). '.' .$image->getClientOriginalExtension();
            Image::make($image)->resize(1020,519)->save('upload/notices/'. $name_genrate);
            $save_url = 'upload/notices/'.$name_genrate;

            NoticeBoard::findOrFail($noticeId)->update([
                'notice_title'=> $request->notice_title,
                'notice_name'=> $request->notice_name,
                'notice_desc'=> $request->notice_desc,
                'notice_time_start'=> $request->notice_time_start,
                'notice_time_end'=> $request->notice_time_end,
                'notice_img'=> $save_url,
            ]);

            return redirect()->route('all.notices')->with('message', "Notice Updated with Image Successfully");
        } else{
            NoticeBoard::findOrFail($noticeId)->update([
                'notice_title'=> $request->notice_title,
                'notice_name'=> $request->notice_name,
                'notice_desc'=> $request->notice_desc,
                'notice_time_start'=> $request->notice_time_start,
                'notice_time_end'=> $request->notice_time_end,
                
              
               
            ]);              
               
           

            return redirect()->route('all.notices')->with('message', "Notice updated without Image Successfully");
        } // End else

        
    }  //End Method

    public function deleteNotice($id){
        $notice = NoticeBoard::findOrFail($id);
       
        if($notice->notice_img && file_exists($notice->notice_img)){
            unlink( $notice->notice_img);
            $notice->delete();
            return redirect()->back()->with('message', "Notice is deleted Successfully");
        }
        else{
             $notice->delete();
            return redirect()->back()->with('message', "Notice is deleted  Successfully");
        }
    }


    public function detailNotice($id){
        $detailNotice = NoticeBoard::findOrFail($id);
        return view('frontend.home_all.notice_details', compact('detailNotice'));
    }
    


} // ENd Class
