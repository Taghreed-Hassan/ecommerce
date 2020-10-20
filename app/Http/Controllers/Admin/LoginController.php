<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\Admin;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function getlogin(){

        return view('admin.Auth.login ');

    }//end of getlogin

    public function login(LoginRequest  $request){

        //make validation in Requests\LoginRequest
//remember mee code
        $remember_me = $request->has('remember_me') ? true : false;

        if (auth()->guard('admin')->
        attempt(['email' => $request->input("email"), 'password' => $request->input("password")], $remember_me)) {
            // notify()->success('تم الدخول بنجاح  ');
            return redirect() -> route('admin.dashboard');
        }
        // notify()->error('خطا في البيانات  برجاء المجاولة مجدا ');
        return redirect()->back()->with(['error' => 'هناك خطا بالبيانات']);




    }//end of login

/*
 * code in tinker
      public function save(){
        $admin=new  App\Models\Admin();
          $admin->name="taghreed";
          $admin->email="admin@admin.com";
          $admin->password=bcrypt("123456789");
          $admin-> save();




       }
*/

}
