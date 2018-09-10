<?php

namespace App\Http\Controllers;

use Session;
use App\Image;
use App\Notice;
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
      $notices =  Notice::all();
      $notices->load('images');

      return view('direct.dashboard')->withNotices($notices);
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

           'notice'=>'required|max:255'
        ]);

        $notices = Notice::create([
          
            'notice'=> $request->notice
        ]);

        if($request->hasFile('image'))
        {
            foreach($request->image as $image)
            {
               $img = new  Image();

                    $img->image =  $image->store('public/notice_images');
                    $img->notice_id = $notices->id;

                    $img->save();
            }
        }

        Session::flash('success','تم ارسال بلاغك بنجاح');

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
        //
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
}
