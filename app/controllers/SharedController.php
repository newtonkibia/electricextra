<?php 

/**
 * SharedController Controller
 * @category  Controller / Model
 */
class SharedController extends BaseController{
	
	/**
     * users_uusername_value_exist Model Action
     * @return array
     */
	function users_uusername_value_exist($val){
		$db = $this->GetModel();
		$db->where("uusername", $val);
		$exist = $db->has("users");
		return $exist;
	}

	/**
     * users_email_value_exist Model Action
     * @return array
     */
	function users_email_value_exist($val){
		$db = $this->GetModel();
		$db->where("email", $val);
		$exist = $db->has("users");
		return $exist;
	}

	/**
     * performance_title_option_list Model Action
     * @return array
     */
	function performance_title_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT name AS value FROM feature";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * getcount_users Model Action
     * @return Value
     */
	function getcount_users(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM users";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_feature Model Action
     * @return Value
     */
	function getcount_feature(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM feature";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

}
