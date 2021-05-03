<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
if(!function_exists('active_link')) {
  function activate_menu($controller) {
    // Getting CI class instance.
    $CI = get_instance();
    // Getting router class to active.
    $class = $CI->router->fetch_class();
    return ($class == $controller) ? 'active' : 'TRUE';
  }
}
function get_routes(){
	$ci = & get_instance();
$ci->load->database();
  $q=$ci->db->query("select * from menus where status='1'");
           foreach($q->result() as $qs){
		$route[$qs->name] =  $qs->controller.'/'.$qs->method.'/'.$qs->id;	   
		   }
}
?>