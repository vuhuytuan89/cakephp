<?php
class Valid extends AppModel{
    var $useTable=false;
    var $validate=array();
    
    function valid_01(){
        $this->validate=array(
            "title"=>array(
                "rule"=>"notEmpty",
                "message"=>"Please enter title !",
            ),
            "info"=>array(
                "rule"=>"notEmpty",
                "message"=>"Please enter info",
            ),
        );
        if($this->validates($this->validate))
        {
            return TRUE;
        }
        else {
            return FALSE;
        }
        
    }
    function valid_02(){
        $this->validate=array(
            "username"=>array(
                "rule1"=>array(
                    "rule"=>"notEmpty",
                    "message"=>"Please enter Username",
                ),
                "rule2"=>array(
                    "rule"=>array("minLength",4),
                    "message"=>"Username must be at least 4 character ",
                ),
                "rule3"=>array(
                    "rule"=>array("maxLength",10),
                    "message"=>"Username must be no larger 10 character long ",
                ),
            ),
            "email"=>array(
            
                "rule1"=>array(
                    "rule"=>"notEmpty",
                    "message"=>"Please enter Email",
                    
                ),
                "rule2"=>array(
                    "rule"=>"email",
                    "message"=>"email is not avaliable",
                    
                ),
            ),
            "website"=>array(
               "rule1"=>array(
                     "rule"=>"notEmpty",
                     "message"=>"Please enter Website",
               ),
               "rule2"=>array(
                    "rule"=>"url",
                    "message"=>"website is not avaliable"
               )
                
            ),
            
        );
        if($this->validates($this->validate))
        {
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
    
    function valid_03(){
        $this->validate=array(
            "username"=>array(
                "rule"=>'/^[a-z0-9]{4,10}$/i',
                "message"=>"Username must be integer and alphabet, between 4-10 characters",
                
            ),
            "email"=>array(
                 "rule"=>"/^[a-z A-Z]{1}[a-z A-Z 0-9_]+\@[a-z A-Z 0-9]{2,}\.[a-z A-Z]{2,}$/i",
                    "message"=>"'email not avaliable",
            ),
         
            
        );
        if($this->validates($this->validate))
        {
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
    
}