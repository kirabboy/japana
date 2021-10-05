<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
    public function getHome(){
        return view('admin.index');
    }

    public function getLogin(){
        return view('admin.login');
    }

    public function postLogin(Request $request){
        $username  = $request->username;
        $password = $request->password;
        $user = DB::table('admins')->where('username', $username)->first();
        if($user != null){
            if(Hash::check($password, $user->password)){
                return "Đăng nhập thành công";
            }else{
                return "Sai mật khẩu";

            }
        }else{
            return "Người dùng không tồn tại";

        }
      
    }

    public function getRegister(){
        return view('admin.register');
    }

    public function postRegister(Request $request){
        $username  = $request->username;
        $password = $request->password;
        $hash_password = Hash::make($password);
        DB::table('admins')->insert(['username'=>$username, 'password'=> $hash_password]);
        return redirect('admin/login');
    }
}
