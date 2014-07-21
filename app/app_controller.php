<?php

class AppController extends Controller {
    
    

    //var $layout = null; // biến layout

     function beforeFilter() 
      { 
            
            // Cấu hình layout
            //$this->_configLayout();
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