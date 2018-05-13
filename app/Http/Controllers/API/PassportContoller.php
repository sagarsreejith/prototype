<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;


class PassportContoller extends Controller
{
    //Defining status code 
    public $successStatus = 200;

    public function login(Request $request){
        //return response()->json(['success' => 'Njan Kidilam Thanne'], 200);
        if(Auth::attempt(['email' => $request('email'),
        'password' => request('password')])){
            $user = Auth::user();
            $user['success_token'] = $user->createToken('API_client')->accessToken;
            return response()->json(['success' => $user], $this->successStatus);
        } else {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }

    /*
     * Insert email
     * 
     * @return \Illumiante\Http\Response
     */
     public function insertEmail() {
         $user = Auth::user();
         if($user){
            return response()->json(['success' => $user], $this->successStatus);
        }else {
            return response()->json(['error' => 'Token Expired'], $this->successStatus);
        }
     }

}
