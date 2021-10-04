<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Models\User;

class UserController extends Controller
{
    public function showPage(){
        return view('account.account');
    }
    public function store(Request $request){
        
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email','unique:users,email', 'max:255'], 
            'phone' => ['required', 'regex:/((09|03|07|08|05)+([0-9]{8})\b)/'], 
            'password' => 'required',
	        're-password' => 'required|same:password',
        ]);
            $newUser = new User(); 
            $newUser->name = $request->name;
            $newUser->email = $request->email;
            $newUser->phone = $request->phone;
            $newUser->password = Hash::make($request->password);
            $newUser->save();
            return redirect()->route('auth.showlogin');
    }
    public function showLogin(){
        return view('account.account');
    }
    public function login(Request $request){

        
        if(Auth::attempt(['email' => $request->email,'password' => $request->password])){

            
            return redirect()->route('lien-he');
        }
        else{
            $this->validate($request, [
                
                'email' => ['required', 'email','exists:users,email'], // kiểm tra mail đã đăng kí hay chưa
                'password' => 'password',
            ]);
        }
    }
    public function showdashboard(){
        return view('/theo-doi-don-hang');
    }
}
