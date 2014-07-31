<?php
class ContactsController extends AppController{
    var $name = "Contacts";
    var $components = array('RequestHandler');
    var $layout = "ajax";
    
    // load all posted
    function index(){
        if(!empty($this->data))
        {
            $this->Contact->create();
            if($this->Contact->save($this->data)){
                $this->Session->setFlash('Your message has been send, thank you !');
                $this->redirect('index');
            }
            else{
                $this->Session->setFlash('Your message could not send');
            }
            
        }
    }
}