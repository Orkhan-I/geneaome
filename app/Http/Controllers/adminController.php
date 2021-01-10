<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\loginPost;
use App\Models\User;
use App\Models\Contact;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use DB;
use Illuminate\Support\Str;
use View;
use Illuminate\Support\Facades\File;
use DataTables;
use App;
use App\Models\lang;
use Illuminate\Support\Facades\Config;
use Log;

class adminController extends Controller
{
    

	
	public function __construct()
	{
		$this->middleware(['auth']);
		view()->share('roles',Role::get());
		view()->share('locales',lang::get());
	}



	public function dashboard(){
		$userItem=User::findOrFail(auth()->user()->id);
        return view('back.dashboard',compact('userItem'));
	}

	public function logout(){
		Auth::logout();
		return redirect(route('front.home',session('locale')));
	}

	public function createUser(){
		return view('back.admin.createUser');
	}

	public function createUserPost(loginPost $request)
    {
        $validator = $request->validated();
		$user= new User;
		$user->name = $request->fullname;
		$user->email = $request->email;
		$user->password = Hash::make($request->password);
		if($request->hasFile('image')){
			$imageName=Str::slug($request->fullname).".".$request->image->getClientOriginalExtension();
			$request->image->move(public_path('uploads'),$imageName);
			$user->profile_photo_path='uploads/'.$imageName;
			}
	    $user->save();
		return redirect()->route('admin.users.createUser');
        
	}


	public function users(Request $request)
    {
        if ($request->ajax()) {
            $data = User::get(); 
            return Datatables::of($data)
				->addIndexColumn()
				->addColumn('action', function($c){
					$btn = "<form id='delete-form' action='".route('deleteUsers', $c->id)."' method='GET'>
					<input type='hidden' name='_token' value='".@csrf_token()."'>
					<input type='hidden' name='_method' value='DELETE'>
					<a class='btn btn-primary ' href='".route('updateUsers', $c->id)."'>
					Edit
					 </a>
						<button class='btn btn-danger '>Delete</button>
					</form>
					";
					return $btn;
				})
				->addColumn('roles',function($data){
					return $data->userModel();
				 })
				->rawColumns(['action'])
                ->make(true);
		}
		return view('back.admin.users');
    }


	public function updateUsers($id){
		$users = User::find($id);
        return view('back.admin.updateUsers',compact('users'));
	}  


	public function updateUsersPost(loginPost $request,$id){
		$validator = $request->validated();
		$users = User::findOrFail($id);
 	    $users->name=$request->fullname;
	    $users->email=$request->email;
		$users->password= Hash::make($request->password);
		if($request->hasFile('image')){
            $imageName=Str::slug($request->fullname).".".$request->image->getClientOriginalExtension();
			$request->image->move(public_path('uploads'),$imageName);
			$users->profile_photo_path='uploads/'.$imageName;
		
		 }
		 
	    $users->save();
	    return redirect()->back();
	}

	public function deleteUsers($id){
		$user= User::find($id);
		$filePath=$user['profile_photo_path'];
		if(file_exists($filePath)){
			File::delete($filePath);
		}
		$user->delete();
        return redirect()->route('users');
    }

	
	function show($lang){
		$locales= lang::get()->pluck('code');
		$arr=[];
		foreach ($locales as  $code) {
			 $arr[]= $code;
		}
		if (! in_array($lang,$arr)) {
			abort(400);
		}
		App::setLocale($lang);
		$langs=lang::all();
		return view('back.dashboard',compact('langs'));
	}


	public function messages(Request $request){
		$messages = Contact::orderBy('created_at','DESC')->get();
		return view('back.messages.messages',compact('messages'));
	}


	public function deleteMessages(Request $request){
		$checkedIds = $request->voyageId; 
		if(isset($request->voyageId)){
			foreach($checkedIds as $i=>$id){
				$contact = Contact::find($id);
				$contact->delete();
			}
			return response()->json(['success'=>'Silndi !!!']);
		}
		return response()->json(['success'=>'Hecne Silinmedi !!!']);
		
		}
		public function showMessage(Request $request){
			 $messages=Contact::all();
			 $messaj = Contact::find($request->msg);
			 $view=view('back.messages.readMessage',compact('messaj'))->render();
			 $messaj->increment('hit');
			return response()->json(['success'=>$view]);
			}

		




}
