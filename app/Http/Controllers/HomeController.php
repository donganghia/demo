<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function login(Request $request)
    {
        $obj = new User;
        $arrUser = $obj->getList (
                        ['ID','password'],
                        ['username' => $request->username]
                    );
        
        $success = false;
        if(1 === count($arrUser) ) {
            if($request->password == $arrUser[0]['password']) {
                
                //update session id
                $result = $obj->updateById (
                                $arrUser[0]['ID'],
                                ['session_id' => Session::getId(),
                                 'login_time' => date('Y-m-d H:i:s')]    
                            );
                $message = (false !== $result)? "Ok" : "Error";
                $success  = (false !== $result)? true : false;
            } else {
                $message = "Wrong password";
            }    
        } else {
            $message =  "User not found";
        }
       
         return response()->json(
                    [ 'success' => $success,
                      'data'    => $message ]
                ); 
    }

}
