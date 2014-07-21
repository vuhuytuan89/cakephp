<?php 
class ValidsController extends AppController{
    
    var $name= "Valids";
    var $helper=array('Html','Form');
    var $components=array('Session');
    
    function vd1(){
        // active validate
        $this->Valid->set($this->data);
        if($this->Valid->valid_01()==TRUE){
            $this->Session->setFlash("Data is avalidate");
        }
        else
        {
            $this->Session->setFlash("Data is not avalidate");
        }
        
    }
    function vd2(){
        $this->Valid->set($this->data);
        if($this->Valid->valid_02()==TRUE){
            $this->Session->setFlash('Data is avaiable');
            
        }
        else{
            $this->Session->setFlash("Data is not Avaiable");
        }
    }
    function vd3(){
        $this->Valid->set($this->data);
        if($this->Valid->valid_03()==TRUE){
            $this->Session->setFlash("Data is avalidate");
        }else {
            $this->Session->setFlash("Data is  not avalidate");
        }
    }
   
}