<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;

class ValidateController extends Controller
{
    public function create(){
        return view('validation');
    }
    public function store(UserRequest $request){
        /*
        $validate=$request->validate([
            'name'=>'required|min:5|max:10|nullable',
            'email'=>'email',
            'password'=>'required|confirmed| min:8',
            'password_confirmation'=>'required'
        ],
    [
        'name.required'=>"يرجى مل الحقل المطلوب",
        'name.min'=>" يرجى مل الحقل المطلوب باكثر من 5 احرف",
        'name.max'=>" يرجى مل الحقل المطلوب باقل من 10 احرف",
        'email.email'=>"يرجى ادخال عنوان البريد الالكتروني  ",
        'password.confirmed'=>"كلمة المرور غير مطابقة   ",
        'password.min'=>"  غير مطابقة   ",

    ]);
    */
    return $request;
    }
}
