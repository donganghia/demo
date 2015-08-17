<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        if(1 === count($arrUser) ) {
            if($request->password == $arrUser[0]['password']) {
                
                //update session id
                $result = $obj->updateById (
                                $arrUser[0]['ID'],
                                ['session_id' => Session::getId(),
                                 'login_time' => date('Y-m-d H:i:s')]    
                            );
                $data = (false !== $result)? "Ok" : "Error";
            } else {
                $data = "Wrong password";
            }    
        } else {
            $data =  "User not found";
        }
        
        echo $data;die;
    }

}
