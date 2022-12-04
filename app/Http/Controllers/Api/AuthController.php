<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest;
use Illuminate\Http\Request;
use App\Http\Resources\AdminResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\models\Admin;

class AuthController extends Controller
{
    public function Login(AdminRequest $request){
        if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password])){
            $token = Str::random(60);
            $admin = Admin::where("email",$request->email)->first();
            $admin->update([
                'api_token' => $token,
            ]);
            return responseJson('success','Token Retrived Successfully', $admin->api_token);
        }else{
            return responseJson('failed','Invalid Data', );
        }
    }
}
