<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $table = 'user';
    public $primaryKey = "ID";
    //public $timestamps = false;
    
    /**
     * get data.
     *
     * @param  $field, $condition
     * @return $result
     **/
    public function getList($field = ['*'],$condition = null) 
    {
        $user = User::select($field);
        
        if(!empty($condition) && is_array($condition)) {
            
            foreach($condition as $field => $value) {
                $user->where($field,$value);
            }
            
        }
        
        return $user->get()->toArray();
    }
    
    
    /**
     * update data.
     *
     * @param  
     * @return boolean
     **/
    public function updateById($id,$field = ['*'],$params = null) 
    {
        if(null == $id || null == $params) 
            return false;
        
        $user = User::find($id,$field);
       
        if(!empty($params) && is_array($params)) {
            
//            foreach($params as $field => $value) {
//                $user -> $field = $value ;
//            }
            $user->session_id = 'xxx';
            
        }
$user->session_id = 'xxx';
         $user -> push();

var_dump($user);die;
    }
}
