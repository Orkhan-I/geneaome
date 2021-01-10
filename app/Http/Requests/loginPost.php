<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule ;
class loginPost extends FormRequest

{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
      return true;

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    
    {



        $rules=[];

        $rule_email_unique=Rule::unique('users','email');
        if($this->method()!=='POST'){
            $rule_email_unique->ignore($this->route('id'));
            $rules['email']=['required', $rule_email_unique,'max:255'];
        }

        
        $rules['fullname']=['required'];
        $rules['password']=['required','min:6'];
        $rules['passwordconfirmed']=['required_with:password','same:password'];


        return $rules;
    }
 

}
