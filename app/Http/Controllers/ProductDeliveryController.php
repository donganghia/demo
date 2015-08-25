<?php namespace App\Http\Controllers;


class ProductDeliveryController extends Controller {

    /**
     * Initializer.
     *
     * @return \AdminController
     */
    public function __construct()
    { 
        $this->middleware('permission');
    }
    
}