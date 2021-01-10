<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lang;
use DataTables;
class langController extends Controller
{
    public  function langs(Request $request){
        $data=lang::get();

        if($request->ajax()){
            return  DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action',function($c){
                    $btn = "<form id='delete-form' action='".route('deleteLangs', $c->id)."' method='GET'>
                    <input type='hidden' name='_token' value='".@csrf_token()."'>
					<input type='hidden' name='_method' value='DELETE'>
					<a class='btn btn-primary ' href='".route('editLangs', $c->id)."'>
					Edit
					 </a>
						<button class='btn btn-danger '>Delete</button>
					</form>
                    ";
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);

        }
        return view('back.lang.langs');
    }




    public function createLangs(){
        return view('back.lang.createLangs');
    }

    public function createLangsPost(Request $request){
        $lang=new lang;
        $lang->name=$request->name;
        $lang->code=$request->code;
        $lang->status=$request->status;
        $lang->Save();
        return redirect()->back()->with('success','Dil Elave edildi!');
    }





    public function editLangs($id){
        $lang=lang::find($id);
        return view('back.lang.updateLangs',compact('lang'));
    }

    public function editLangsPost(Request $request,$id){
        $lang=lang::find($id);
        $lang->name=$request->name;
        $lang->code=$request->code;
        $lang->status=$request->status;
        $lang->Save();
        return redirect()->back()->with('success','Dil Elave edildi!');
    }

    public function deleteLangs($id){
        $lang=lang::find($id);
        $lang->delete();
        return redirect()->back();
        
    }
}

