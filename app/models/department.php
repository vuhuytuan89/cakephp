<?php
class Department extends AppModel{
    var $name = "Department";
   
    var $validate=array();
   
    function saveMessage($data){
        if($this->save($data)){
            return true;
        }else {
            return false;
        }
        
    }
    function vali_department(){
        $this->validate=array(
        'name'=>array('rule'=>'notEmpty',
                        'message'=>'Please enter Name'));
        if($this->validates($this->validate))
        {
            return true;
        }
        else {
            return false;
        }
    }
    function getTuan(){ 
      
        return $this->query("select *from departments");
        
    }
}