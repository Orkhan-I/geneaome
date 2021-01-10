<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\lang;
use DataTables;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use DB;
class authController extends Controller
{
    public function authors(Request $request){
        $data=Author::get();
      if($request->ajax()){
        return Datatables::of($data)
             ->addIndexColumn()
             ->addColumn('action',function($c){
                $btn = "<form id='delete-form' action='".route('deleteAuthor', $c->id)."' method='GET'>
        <input type='hidden' name='_token' value='".@csrf_token()."'>
        <input type='hidden' name='_method' value='DELETE'>
        <a class='btn btn-primary ' href='".route('editAuthor', $c->id)."'>
        Edit
         </a>
            <button class='btn btn-danger '>Delete</button>
        </form>
        ";

        return $btn;
            })

    ->addColumn('az',function($data){
        return $data->setLocale('az')->author_duty;
    })
    ->addColumn('tr',function($data){
        return $data->setLocale('tr')->author_duty;
    })
    ->addColumn('en',function($data){
        return $data->setLocale('en')->author_duty;
    })
    
    ->addColumn('ru',function($data){
        return $data->setLocale('ru')->author_duty;
    })
    ->rawColumns(['action'])
    ->make(true);
      }
return view('back.authors.author');

}


    public function createAuthor(){
        $locales=lang::get();
        return view('back.authors.createAuthor',compact('locales'));
    }
    public function createauthorPost(Request $request){
        $author=new Author;
        $author->author_name=$request->name;
        $author->author_duty=$request->get('author_duty');
        $author->title=$request->get('title');
        $author->text=$request->get('text');
        if($request->hasFile('author_image')){
            $imageName=Str::slug($request->name).".".$request->author_image->getClientOriginalExtension();
            $request->author_image->move(public_path('authors'),$imageName);
            $author->author_image='authors/'.$imageName;
        }
        $author->author_bio_image='authors/'.'buble-bg.png';
        $author->Save();

        return redirect()->back()->with('success','Author elave edildi');

    }

    public function editAuthor($id){
        $locales=lang::get();
        $author=Author::find($id);
        return view('back.authors.updateAuthor',compact('locales','author'));
    }
    public function editAuthorPost(Request $request,$id){
        $author=Author::findOrFail($id);
        $author->author_name=$request->author_name;
        $author->author_duty=$request->get('author_duty');
        $author->title=$request->get('title');
        $author->text=$request->get('text');
        if($request->hasFile('author_image')){
            $imageName=Str::slug($request->name).".".$request->auhtor_image->getClientOriginalExtension();
            $request->author_image->move(public_path('authors'),$imageName);
            $author->author_image='authors/'.$imageName;
        }
        $author->save();
        return redirect()->back()->withSuccess('Author Yenilendi!');
    }

    public function deleteAuthor($id){
        $author=Author::find($id);
        $imagePath=$author['author_image'];
        if(file_exists($imagePath)){
            File::delete($imagePath);
        }
        $author->delete();
        return redirect()->back()->withSuccess('Author Silindi!');
    }





}

    
