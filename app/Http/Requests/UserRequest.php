<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use illuminate\Validation\Rules\Password;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        
            return [
                'name'=>'required|min:5|max:10|nullable',
                'email'=>'email',
                'password'=>'required|confirmed',
                'password_confirmation'=>'required'
                
              
                //
           
        ];
    }



    public function messages()
    {
        return  [
            'name.required'=>"يرجى مل الحقل المطلوب",
            'name.min'=>" يرجى مل الحقل المطلوب باكثر من 5 احرف",
            'name.max'=>" يرجى مل الحقل المطلوب باقل من 10 احرف",
            'email.email'=>"يرجى ادخال عنوان البريد الالكتروني  ",
            'password.confirmed'=>"كلمة المرور غير مطابقة   ",
            'password.min'=>"  غير مطابقة ",
            
        ];
       
    }

}
    

