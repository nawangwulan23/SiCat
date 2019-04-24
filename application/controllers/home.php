<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');
classHome extendsCI_Controller
{
   publicfunction__construct()
   {
      parent::__construct();
   }
   publicfunctionindex()
   {
      // set variabel $title
      $this->template->set('title','Welcome user! | MyWebApplication.com');
      // load file view 'index.php' yang ada di folder 'views/admin/' ke dalam 'template.php'
      $this->template->load('template','admin/index');
   }
}
