<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Image;
use Session;

class ShowController extends Controller
{
   public function delete($id)
   {
       $image = Image::findOrfail($id);
       Storage::delete($image->image);
       $image->delete();
       Session::flash('success','تم الحذف');
       return back();
   }

   public function download($id)
   {
    $image = Image::findOrfail($id);
    
    return Storage::download($image->image);
   }

}
