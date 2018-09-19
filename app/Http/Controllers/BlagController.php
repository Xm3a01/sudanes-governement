<?php

namespace App\Http\Controllers;
use Notification;
use Session;
use App\User;
use App\Image;
use App\Notice;
use App\Ministry;
use App\Notifications\NewNotice;
use Illuminate\Http\Request;

class BlagController extends Controller
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

    public function delete($id)
    {
         $user = User::findOrfail($id);
        foreach($user->notifications as $noty)
          {
              $noty->markAsRead();
          }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messsages = array(
            'notice.required'=>'يجب ملأ خانة البلاغ',
            'ministry.required'=>'يجب اختيار جهة البلاغ',
            'notice.max'=>'تجاوزة الحد المسموح من الحورف',
        );
        $this->validate($request ,[

            'notice'=>'required|max:950',
            'ministry'=> 'required'
        ],$messsages);
 
         $notice =  Notice::create([
            'notice' => $request->notice
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
         $users = User::where('ministry_id' , $request->ministry)->get();  

         Notification::send( $users , new NewNotice($notice));


         if($notice->save()){
             // $notfy = array(
                // 'message' => 'تم ارسال بلاغك بنجاح',
                // 'alert-type' => 'success'
           //  );
           Session::flash('success','تم ارسال بلاغك بنجاح');
         }
         else
         {
            //$notfy = array(
            //'message' => 'لم يتم ارسال بلاغك بنجاح',
            //'alert-type' => 'error'
            //);
           Session::flash('error','لم يتم ارسال بلاغك بنجاح');
         }
       //  Session::has('noty',$notfy);
       // session()->put('noty',$notfy);
         return redirect()->back();
 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $not = Notice::findOrfail($id);
       return view('show')->withNot($not);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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

    public function data()
    {
        $user = \Auth::user()->notifications;

        return response()->json($user);
    }
}
