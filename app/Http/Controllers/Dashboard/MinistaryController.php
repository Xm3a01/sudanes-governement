<?php

namespace App\Http\Controllers\Dashboard;

use App\Ministry;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MinistaryController extends Controller
{
    
    public function index()
    {
        $ministaries = Ministry::all();

        return view('admins.ministaries.index' , compact(['ministaries']));
    }

    public function store(Request $request)
    {
        if($request->hasFile('logo')){
            $logo = time().'.'.$request->logo->getClientOriginalExtension();
        }

        $ministaries = Ministry::create([
            'name' => $request->name,
            'logo' => $request->logo->storeAs('public/miniLogo' , $logo)
        ]);
        return redirect()->route('ministaries.index');
        \Session::flash('success','تم التعديل بنجاح') ;
    }

    public function edit($id)
    {
        $ministary = Ministry::findOrFail($id);
        return view('admins.ministaries.edit' , compact(['ministary']));
    }

    public function update(Request $request, $id)
    {
        // return $request->logo;
        $ministary = Ministry::findOrFail($id);

        if($request->hasFile('logo')){ \Storage::delete($ministary->logo); $logo = time().'.'.$request->logo->getClientOriginalExtension(); }

        $ministary->name = $request->name;
        $ministary->logo = $request->logo->storeAs('public/miniLogo' , $logo);

        if($ministary->save()) {
            return redirect()->route('ministaries.index');
            \Session::flash('success','تم التعديل بنجاح') ;
        }
    }

    public function destroy($id)
    {
      $ministary = Ministry::findOrFail($id);
      \Storage::delete($ministary->logo);
      $ministary->delete();
    }
}
