<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Slider;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function slider(){
        $data=Slider::all();
        
        return view('slider.index')->with('data',$data);
    }
    public function addslider(){
        return view('slider.add');
    }
    public function save(Request $request){
        $slider=new Slider;
        $slider->title1=$request->title1;
        $slider->title2=$request->title2;
        $imageName=Carbon::now()->timestamp.'.'.$request->image->extension();
        $request->image->storeAs('slider',$imageName);
        $slider->image=$imageName;
        $slider->save();
        Session::flash('success_message','Slider Save Success');
        return redirect()->route('slider');
    }
    public function delete($id){
        $slider=Slider::find($id);
        $slider->delete();
        Session::flash('delete_message','Slider Delete Success');
        return redirect()->route('slider');
    }
    public function edit($id){
        $data=Slider::find($id);
        return view('slider.edit')->with('data',$data);
    }
    public function update(Request $request,$id){
        $slider=Slider::find($id);
        $slider->title1=$request->title1;
        $slider->title2=$request->title2;
        if($request->image){
        $imageName=Carbon::now()->timestamp.'.'.$request->image->extension();
        $request->image->storeAs('slider',$imageName);
        $slider->image=$imageName;
        }
        $slider->save();
        Session::flash('success_message','Slider Update Success');
        return redirect()->route('slider');
    }
}
