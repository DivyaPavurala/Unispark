<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	 public function __construct() {
        parent::__construct();
		$this->load->database();
        
    }
public function sub_menu($pid='0') { 

$sq=$this->db->query("select * from menus where status='1' and parent_id=$pid ORDER BY order_by DESC");
$rows=$sq->num_rows();
if($rows > 0){
        $m='<ul class="dropdown-menu">';
		
           foreach($q->result() as $qs){
			   $srows=$this->db->query("select * from menus where status='1' and parent_id=$qs->id ORDER BY order_by ")->num_rows();
			   $cls="";
			   $dcls="";
			   $dscls="";
			   if($id==$qs->id) $cls='active';
			$m.='<li class="'.$cls.'"><a href="'.base_url().$qs->link.'/'.$qs->id.'">'.$qs->name.'</a></li>';
		   //$this->sub_menu($qs->id);
		   }
		   $m.='</ul>';
}
						return $m;
   }
public function Menu($id='') { 
        $m='<ul class="nav navbar-nav">';
		$q=$this->db->query("select * from menus where status='1' and parent_id='0' ORDER BY order_by");
           foreach($q->result() as $qs){
			   $srows=$this->db->query("select * from menus where status='1' and parent_id=$qs->id")->num_rows();
			   $cls="";
			   $dcls="";
			   $dscls="";
			   if($id==$qs->id) $cls='active';
							$m.='<li class="'.$cls.'"><a href="'.base_url().$qs->link.'/'.$qs->id.'">'.$qs->name.'</a></li>';
		   }
			$m.='</ul>';
			return $m;
   }


}

?>
<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="portfolio.html">Projects</a></li>
									<li><a href="404.html">Services</a></li>
                              </ul>
							</li>