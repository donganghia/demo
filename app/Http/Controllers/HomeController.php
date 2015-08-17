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
                        ['ID'],
                        ['username' => $request->username,
                         'password' => $request->password]
                    );
        if(1 === count($arrUser)) {
            $result = $obj->updateById (
                            $arrUser[0]['ID'],
                            ['session_id','login_time'],
                            ['session_id' => '1111',
                             'login_time' => '2015-08-11 15:52:45']    
                        );
        } else {
            return '';
        }
        echo $arrUser[0]['ID'];die;
    }

}
