<?php
class DepartmentsController extends AppController{
    var $name="Departments";
    var $helper=array('Html','Form');
    var $components=array('Session');
    function index(){
        
      // $data=$this->getDepartment('US');
       $data=$this->Department->getTuan();
       pr($data);
    }
    function add(){
        if(!empty($this->data)){
            $this->Department->create();
            if($this->Department->save($this->data)){
                
                $this->Session->setFlash(__('Department data has been saved',true));
            }
            else{
                $this->Session->setFlash(__('The partment data could not be saved, Please, try again',true));
            }
        }
    }
    function getDepartment($region=null){ 
      
                        $data = $this->Department-> find('all',array(
                                                         'conditions'=>array(
                                                          'region'=>$region)));
        return $data;
        
    }
}