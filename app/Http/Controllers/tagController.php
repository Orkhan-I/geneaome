<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tagModel;
use App\Models\lang;
use Illuminate\Support\Str;
use DataTables;
use App;
use Illuminate\Support\Facades\File;
class tagController extends Controller
{
    

    public function tags(Request $request)
    {
        if ($request->ajax()) {
            $data = tagModel::all(); 
            return Datatables::of($data)
				->addIndexColumn()
				->addColumn('action', function($c){
					$btn = "<form id='delete-form' action='".route('deleteTags', $c->id)."' method='GET'>
					<input type='hidden' name='_token' value='".@csrf_token()."'>
					<input type='hidden' name='_method' value='DELETE'>
					<a class='btn btn-primary ' href='".route('editTags', $c->id)."'>
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
                 ->addColumn('en',function($data){
					return $data->setLocale('en')->name;
                 })
                 ->addColumn('tr',function($data){
					return $data->setLocale('tr')->name;
                 })
                 ->addColumn('ru',function($data){
					return $data->setLocale('ru')->name;
				 })
				->rawColumns(['action'])
                ->make(true);
		}
		
		return view('back.tags.tags');
    }


    //create
    public function index(Request $request){
        $locales=lang::all();
        return view('back.tags.createTags',compact('locales'));

    }

    public function tagPost(Request $request){
        $langs=lang::get();
        $tag=new tagModel;
        $tag->name=$request->except('_method', '_token','tagImage','status');
        $tag->status=$request->status;

        if($request->hasFile('tagImage')){
            $imageName=Str::slug($request->en).".".$request->tagImage->getClientOriginalExtension();
            $request->tagImage->move(public_path('tagImages'),$imageName);
            $tag->image='tagImages/'.$imageName;
         }

        $tag->save();
        return redirect()->back()->withSuccess('Tag Elave olundu !');
    }


    //delete
        public function deleteTags($id){
            $tag= tagModel::find($id);
            
            // $imagePath = User::select('profile_photo_path')->where('id', $id)->first();
            // $filePath = $imagePath->profile_photo_path;
            $filePath=$tag['image_path'];
            if(file_exists($filePath)){
                File::delete($filePath);
            }
            $tag->delete();

            
            return redirect()->back();
        }






        //update

        public function editTags($id){

            $tags = tagModel::find($id);
            $locales=lang::all();
            return view('back.tags.updateTags',compact(['tags','locales']));
        }  


        public function editTagsPost(Request $request,$id){
             $tag = tagModel::find($id);
             $tag->name=$request->except('_method', '_token','tagImage','status');
             $tag->status=$request->status;

           if($request->hasFile('tagImage')){
               $imageName=Str::slug($request->az).".".$request->tagImage->getClientOriginalExtension();
               $request->tagImage->move(public_path('tagImage'),$imageName);
               $tag->image='tagImages/'.$imageName;
           }
           $tag->save();
           return redirect()->back()->withSuccess('Tag yenilendi !');
            
        } 





        public function tagtest(){

            $langs=lang::get()->pluck('code');
            echo $langs;
               
            }
      
      
        }
    
       
       
    