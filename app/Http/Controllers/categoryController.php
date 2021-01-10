<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\lang;
use DataTables;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
class categoryController extends Controller
{
    public function categories(Request $request){
        
        if($request->ajax()){
            $data=Category::get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action',function($c){
                            $btn = "<form id='delete-form' action='".route('deleteCategory', $c->id)."' method='GET'>
					<input type='hidden' name='_token' value='".@csrf_token()."'>
					<input type='hidden' name='_method' value='DELETE'>
					<a class='btn btn-primary ' href='".route('editCategory', $c->id)."'>
					Edit
					 </a>
						<button class='btn btn-danger '>Delete</button>
					</form>
					";
	
					return $btn;
                        })

                ->addColumn('az',function($data){
                    return $data->setLocale('az')->name;
                })
                ->addColumn('tr',function($data){
                    return $data->setLocale('tr')->name;
                })
                ->addColumn('en',function($data){
                    return $data->setLocale('en')->name;
                })
                
                ->addColumn('ru',function($data){
                    return $data->setLocale('ru')->name;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('back.category.category');
    }


    public function createCategory(){
        $category=Category::get();
        $locales=lang::get();
        return view('back.category.createCategory',compact(['category','locales']));
    }

    public function createCategoryPost(Request $request){
        $category=new Category;
        $category->name=$request->except('_token','_method','status','image');
        $category->status=$request->status;
        if($request->hasFile('image')){
            $imageName=Str::slug($request->en).".".$request->image->getClientOriginalExtension();
            $request->image->move(public_path('tagImages'),$imageName);
            $category->image='tagImages/'.$imageName;
        }
        $category->save();
        return redirect()->back()->withSuccess('Kateqoriya Elave Edildi !!!');
    }


    public function deleteCategory($id){
        $category=Category::find($id);
        $filePath=$category['image'];
        if(file_exists($filePath)){
            File::delete($filePath);
        }
        $category->delete();
        return redirect()->back();
    }


    public function editCategory($id){
        $category=Category::find($id);
        $locales=lang::all();
        return view('back.category.updateCategory',compact(['category','locales']));
    }

    public function editCategoryPost(Request $request,$id){
        $category=Category::find($id);
        $category->name=$request->except('_token','_method','status','image');
        $category->status=$request->status;
        if($request->hasFile('image')){
            $imageName=Str::slug($request->en).".".$request->image->getClientOriginalExtension();
            $request->image->move(public_path('tagImages'),$imageName);
            $category->image='tagImages/'.$imageName;
        }
        $category->Save();
        return redirect()->back()->withSuccess('Kategoriya yenilendi !');
    }

}
