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

}
