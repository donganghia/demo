<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $table = 'user';
    protected $primaryKey = "ID";
    public $timestamps = false;
    
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
    public function updateById($id,$params = null) 
    {
        if(null == $id || !is_array($params)) {
            return false;
        } else {
            return User::where('ID', $id)->update($params);
        }    
    }
}
