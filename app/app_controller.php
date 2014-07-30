<?php

class AppController extends Controller {
    
    

    //var $layout = null; // biến layout

     function beforeFilter() 
      { 
            
            // Cấu hình layout
            //$this->_configLayout();
               // Set the folder for default theme
           $this->theme = 'default';

           if (isset($this->params['admin'])) {
                        // Set the default layout
                        $this->layout = 'admin';
           } else {
                        $this->layout = 'default';
           }

      
      }  
    
    // Hàm chọn layout thích hợp
    function _configLayout(){

            if(isset($this->params['users']) && $this->params['users']){
                $this->layout = "admin";
            }else{
                $this->layout = "default";
            }
            
        }  
    
}