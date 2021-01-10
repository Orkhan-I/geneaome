<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\articles;
use App\Models\Category;
use App\Models\lang;
use DataTables;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
class articleController extends Controller
{
    public function index(Request $request){
        
        if($request->ajax()){
            $data=articles::get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action',function($c){
                            $btn = "<form id='delete-form' action='".route('deleteArticle', $c->id)."' method='GET'>
					<input type='hidden' name='_token' value='".@csrf_token()."'>
					<input type='hidden' name='_method' value='DELETE'>
					<a class='btn btn-primary ' href='".route('editArticle', $c->id)."'>
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
        return view('back.articles.article');
    }

    public function createArticle(){
        $articles=articles::get();
        $locales=lang::get();
        $categories=Category::get();
        return view('back.articles.createArticle',compact(['articles','locales','categories']));
    }

    public function createArticlePost(Request $request){
        $article=new articles;
        $article->title=$request->get('name');
        $article->description=$request->get('description');
        $article->author=$request->author;
        $article->status=$request->status;
        if($request->hasFile('image')){
            $imageName=Str::slug($request->image).".".$request->image->getClientOriginalExtension();
            $request->image->move(public_path('tagImages'),$imageName);
            $article->image='tagImages/'.$imageName;
        }
        $article->category_id=$request->category_id;
        $article->save();
        return redirect()->back()->withSuccess('Article Elave Edildi !!!');
    }


    public function deleteArticle($id){
        $article=articles::find($id);
        $filePath=$article['image'];
        if(file_exists($filePath)){
            File::delete($filePath);
        }
        $article->delete();
        return redirect()->back();
    }


    public function editArticle($id){
        $article=articles::find($id);
        $locales=lang::all();
        $categories=Category::get();
        return view('back.articles.updateArticle',compact(['article','locales','categories']));
    }

    public function editArticlePost(Request $request,$id){
        $article=articles::find($id);
        $article->title=$request->get('title');
        $article->description=$request->get('description');
        $article->category_id=$request->category_id;
        $article->status=$request->status;
        $article->author=$request->author;
        if($request->hasFile('image')){
            $imageName=Str::slug($request->image).".".$request->image->getClientOriginalExtension();
            $request->image->move(public_path('tagImages'),$imageName);
            $article->image='tagImages/'.$imageName;
        }
        $article->Save();
        return redirect()->back()->withSuccess('Kategoriya yenilendi !');
    }
}
