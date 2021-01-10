<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use DB;
use App\Models\user;
use Illuminate\Support\Str;
use View;
use App;
use DataTables;

class roleController extends Controller
{

	public function __construct()
	{
		view()->share('users',User::get());
		view()->share('roles',Role::get());
		
	}


    public function roles(Request $request){
		if ($request->ajax()) {
            $data = Role::get(); 
            return Datatables::of($data)
				->addIndexColumn()
				->addColumn('action', function($c){
					$btn = "<form id='delete-form' action='".route('deleteRoles', $c->id)."' method='GET'>
					<input type='hidden' name='_token' value='".@csrf_token()."'>
					<input type='hidden' name='_method' value='DELETE'>
					
					 <a class='btn btn-primary ' href='".route('createRoles', $c->id)."'>
					Create 
					 </a>
					 <a class='btn btn-primary ' href='".route('userRoles', $c->id)."'>
					 Edit to User
					  </a>
						<button class='btn btn-danger '>Delete</button>
					</form>
					";
	
					return $btn;
				})
				->rawColumns(['action'])
                ->make(true);
			}
		
		return view('back.roles.roles');
		
	}



	public function createRoles(Request $request){
	
		return view('back.roles.createRoles');
		
		
	}
	
	public function createRolesPost(Request $request){
	
		DB::table('roles')->insert([
			'name'=>$request->name,
			'guard_name'=>$request->guard_name,
        ]);
        return redirect()->route('roles');
		
		
	}
	
	public function deleteRoles($id){
		Role::find($id)->delete();
		return redirect()->back();
	}




public function userRoles($id){
	$role_id=Role::find($id);
	return view('back.roles.userRoles',compact('role_id'));
}

	public function editRoles(Request $request,$id){
	
		DB::table('model_has_roles')->insert([
			'role_id'=>$id,
			'model_type'=>'App\Models\User',
			'model_id'=>$request->user_id,
        ]);
        return redirect()->route('roles');
		
		
	}
	





    
}
