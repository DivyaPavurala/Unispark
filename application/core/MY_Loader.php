<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Loader extends CI_Loader {

public function template($template_name, $vars = array(), $return = FALSE) {
        if ($return):
            $content = $this->view('header', $vars, $return);
            $content .= $this->view($template_name, $vars, $return);
            $content .= $this->view('footer', $vars, $return);
            return $content;
        else:
            $this->view('header', $vars);
            $this->view($template_name, $vars);
            $this->view('footer', $vars);
        endif;
    }

    public function logintemplate($template_name, $vars = array(), $return = FALSE) {
        if ($return):
            $content = $this->view('login-headerlinks', $vars, $return);
            $content .= $this->view($template_name, $vars, $return);
            $content .= $this->view('login-footerlinks', $vars, $return);
            return $content;
        else:
            $this->view('login-headerlinks', $vars);
            $this->view($template_name, $vars);
            $this->view('login-footerlinks', $vars);
        endif;
    }

}

?>