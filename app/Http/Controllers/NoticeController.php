<?php

namespace App\Http\Controllers;

use Session;
use App\User;
use App\Image;
use App\Notice;
use App\Ministry;
use App\Notifications\NewNotice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ministries =  Ministry::all();
        return view('website')->withMinistries($ministries);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request ,[

           'notice'=>'required|max:255',
           'ministry'=> 'required'
        ]);

        $notice = Notice::create([
          
            'notice'=> $request->notice
        ]);

        if($request->hasFile('image'))
        {
            foreach($request->image as $image)
            {
               $img = new  Image();

                    $img->image =  $image->store('public/notice_images');
                    $img->notice_id = $notice->id;

                    $img->save();
            }
        }
        $users = User::findOrfail($request->ministry)->get();  
        \Notification::send( $users , new NewNotice($notice));

        Session::flash('success','تم ارسال بلاغك بنجاح');

        return redirect()->route('welcome');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function delete($id)
    {
         $user = User::findOrfail($id);
        foreach($user->notifications as $noty)
          {
              $noty->markAsRead();
          }
    }
}
