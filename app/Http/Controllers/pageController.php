<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use DataTables;
use App\Models\Category;
use App\Models\lang;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
class pageController extends Controller
{
    public function pages(Request $request){
        
        if($request->ajax()){
            $data=Page::get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action',function($c){
                            $btn = "<form id='delete-form' action='".route('deletePage', $c->id)."' method='GET'>
					<input type='hidden' name='_token' value='".@csrf_token()."'>
					<input type='hidden' name='_method' value='DELETE'>
					<a class='btn btn-primary ' href='".route('editPage', $c->id)."'>
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
        return view('back.pages.page');
    }

    public function createPage(){
        $pages=Page::get();
        $locales=lang::get();
        $categories=Category::get();
        return view('back.pages.createpage',compact(['pages','locales','categories']));
    }

    public function createpagePost(Request $request){
        $page=new Page;
        $page->title=$request->get('title');
        if($request->hasFile('image')){
            $imageName=Str::slug($request->image).".".$request->image->getClientOriginalExtension();
            $request->image->move(public_path('tagImages'),$imageName);
            $page->image='tagImages/'.$imageName;
        }
        $page->save();
        return redirect()->back()->withSuccess('page Elave Edildi !!!');
    }


    public function deletePage($id){
        $page=Page::find($id);
        $filePath=$page['image'];
        if(file_exists($filePath)){
            File::delete($filePath);
        }
        $page->delete();
        return redirect()->back();
    }


    public function editPage($id){
        $page=Page::find($id);
        $locales=lang::all();
        $categories=Category::get();
        return view('back.pages.updatepage',compact(['page','locales','categories']));
    }

    public function editPagePost(Request $request,$id){
        $page=Page::find($id);
        $page->title=$request->get('title');
        $page->slug=$request->slug;
        if($request->hasFile('image')){
            $imageName=Str::slug($request->image).".".$request->image->getClientOriginalExtension();
            $request->image->move(public_path('tagImages'),$imageName);
            $page->image='tagImages/'.$imageName;
        }
        $page->Save();
        return redirect()->back()->withSuccess('Kategoriya yenilendi !');
    }
}
