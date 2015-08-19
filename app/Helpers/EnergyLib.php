<?php

namespace App\Helpers;

use Session;
use App\Models\User;

class EnergyLib {
    
    public $C_ID_PHASE_OIL=1;
    public $C_ID_PHASE_GAS=2;
    public $C_ID_PHASE_WATER=3;
    public $C_ID_PHASE_GASLIFT=21;

    public function upload_to_server( $path, $name, $old='')
    {
	if( $old!=''){
		@unlink( $path.$old);
	}
	if( preg_match('/\.jpg|\.gif|\.jpeg|\.png$/i', $_FILES[$name]['name'])){
		$des_file = $_FILES[$name]['name'];
		copy( $_FILES[$name]['tmp_name'], $path.$des_file) or die("Couldn't copy file.");
		return $des_file;
	}
    }

    public static function isLoggedIn()
    {
            global $current_user_id,$DATA_SCOPE_PU,$DATA_SCOPE_AREA,$DATA_SCOPE_FACILITY;
            $sid = (null == Session::getId()) ? Session::start()  : Session::getId();

            $result = User::leftjoin('user_data_scope', 'user_data_scope.ID', '=', 'user_data_scope.USER_ID')
            ->select(array('user.username','user.ID','user_data_scope.AREA_ID','user_data_scope.PU_ID','user_data_scope.FACILITY_ID'))
            ->where('user.session_id',$sid)->get()->toArray();
           
            $b_logged_in=false;
            if(!empty($result))
            {
                    Session::set('current_username',$result[0]['username']);
                    $current_user_id=$result[0]['ID'];

                    $DATA_SCOPE_PU=$result[0]['PU_ID'];
                    $DATA_SCOPE_AREA=$result[0]['AREA_ID'];
                    $DATA_SCOPE_FACILITY=$result[0]['FACILITY_ID'];

                    $b_logged_in=true;
            }
            return $b_logged_in;
    }

    public function hasRight($rightCode)
    {
            global $USER_RIGHTS;
            loadRights();
            return in_array($rightCode, $USER_RIGHTS);
    }
    public function loadRights()
    {
            global $USER_RIGHTS, $current_user_id;
            if(!$USER_RIGHTS)
            {
                    $USER_RIGHTS=array();
                    if($current_user_id)
                    {
                            $sSQL="select distinct c.CODE from user_user_role a, user_role_right b, user_right c where a.user_id=$current_user_id and a.role_id=b.role_id and b.right_id=c.id";
                            $result=mysql_query($sSQL) or die (mysql_error());
                            while($row=mysql_fetch_array($result))
                            {
                                    array_push($USER_RIGHTS, $row[CODE]);
                            }
                    }
            }
    }
    public function checkRight($rightCode)
    {
            global $USER_RIGHTS;
            loadRights();
            if(in_array("_ALL_", $USER_RIGHTS))
            {
                    return;
            }
            if(!in_array($rightCode, $USER_RIGHTS))
            {
                    header('Location: ../home/error.php');
                    exit();
            }
    }
}
