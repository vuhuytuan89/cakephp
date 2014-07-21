<?php
class PostsController extends AppController{
    var $name="Posts";
    function index(){
        $post=$this->Post->find('all');
        $this->set('post',$post);
       // $this->set(compact($post));
    }
    function add(){
        $actionHeading="Add a Post";
        $actionSlogan="Please fill in all fieds.";
        $this->set(compact('actionheading','actionSlogan'));
        
        if(!empty($this->data)){
            $this->Post->create();
            if($this->Post->save($this->data)){
                $this->Session->setFlash(__('The Post has been saved',true));
            }else{
                $this->Session->setFlash(__('The Post could not be saved. Please try again',true));
            }
        }
        
    }
}