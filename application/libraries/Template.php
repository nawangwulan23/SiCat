<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');
classTemplate {
      var$template_data= array();
       functionset($name, $value)
      {
         $this->template_data[$name] = $value;
      }
       functionload($template= '', $view= '', $view_data= array(), $return= FALSE)
      {
         $this->CI =& get_instance();
         $this->set('contents', $this->CI->load->view($view, $view_data, TRUE));
         return$this->CI->load->view($template, $this->template_data, $return);
      }
}
