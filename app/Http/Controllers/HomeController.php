<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Session;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\LogUser;
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
                
                //insert log
                if(false !== $result) {
                    $result =   LogUser::insert(
                                   ['username' => $request->username,
                                    'login_time' => date('Y-m-d H:i:s'),
                                    'session_id' => Session::getId(),
                                    'ip'  => self::get_client_ip() ]
                                );
                }
                    
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
    
    /**
     * 
     * @param  
     * @return IP
     */
    public function get_client_ip() 
    {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if(getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if(getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if(getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if(getenv('HTTP_FORWARDED'))
           $ipaddress = getenv('HTTP_FORWARDED');
        else if(getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }
    
    /**
     * 
     *
     * @param  
     * @return 
     */
    public function logout(Request $request)
    {
        User::where('session_id', Session::getId())->update(['session_id'=>'']);
        LogUser::where('session_id', Session::getId())->update(['logout_time'=>date('Y-m-d H:i:s')]);
        return Redirect::to('home');
    }


}
