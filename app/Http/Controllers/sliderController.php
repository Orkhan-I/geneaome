<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use DataTables;
use App\Models\Category;
use App\Models\lang;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
class sliderController extends Controller
{
    public function slider(Request $request){
        
        if($request->ajax()){
            $data=Slider::get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action',function($c){
                            $btn = "<form id='delete-form' action='".route('deleteSlider', $c->id)."' method='GET'>
					<input type='hidden' name='_token' value='".@csrf_token()."'>
					<input type='hidden' name='_method' value='DELETE'>
					<a class='btn btn-primary ' href='".route('editSlider', $c->id)."'>
					Edit
					 </a>
						<button class='btn btn-danger '>Delete</button>
					</form>
					";
	
					return $btn;
                        })

                ->addColumn('az',function($data){
                    return $data->setLocale('az')->title;
                })
                ->addColumn('tr',function($data){
                    return $data->setLocale('tr')->title;
                })
                ->addColumn('en',function($data){
                    return $data->setLocale('en')->title;
                })
                
                ->addColumn('ru',function($data){
                    return $data->setLocale('ru')->title;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('back.sliders.slider');
    }

    public function createSlider(){
        $slider=Slider::get();
        $locales=lang::get();
        $categories=Category::get();
        return view('back.sliders.createSlider',compact(['slider','locales','categories']));
    }

    public function createSliderPost(Request $request){
        $slider=new Slider;
        $slider->title=$request->get('name');
        $slider->description=$request->description;
        $slider->author=$request->author;
        if($request->hasFile('image')){
            $imageName=Str::slug($request->image).".".$request->image->getClientOriginalExtension();
            $request->image->move(public_path('tagImages'),$imageName);
            $slider->image='tagImages/'.$imageName;
        }
        $slider->save();
        return redirect()->back()->withSuccess('Slide Elave Edildi !!!');
    }

    public function deleteSlider($id){
        $slider=Slider::find($id);
        $filePath=$slider['image'];
        if(file_exists($filePath)){
            File::delete($filePath);
        }
        $slider->delete();
        return redirect()->back();
    }


    public function editSlider($id){
        $slider=Slider::find($id);
        $locales=lang::all();
        $categories=Category::get();
        return view('back.sliders.updateslider',compact(['slider','locales','categories']));
    }

    public function editSliderPost(Request $request,$id){
        $slider=Slider::find($id);
        $slider->title=$request->get('title');
        $slider->description=$request->get('description');
        $slider->author=$request->author;
        if($request->hasFile('image')){
            $imageName=Str::slug($request->image).".".$request->image->getClientOriginalExtension();
            $request->image->move(public_path('tagImage'),$imageName);
            $slider->image='tagImage/'.$imageName;
        }
        $slider->Save();
        return redirect()->back()->withSuccess('Slide yenilendi !');
    }

}
