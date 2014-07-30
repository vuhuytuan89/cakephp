<?php
class PostsController extends AppController{
    var $name="Posts";
    var $layout="default";
    function index(){
        $post=$this->Post->find('all', array('order'=>'id desc'));
        $this->set('post',$post);// truyền biến sang view
      
    }
    // thêm post
    function add(){
        $actionHeading="Add a Post";
        $actionSlogan="Please fill in all fieds.";
        $this->set(compact('actionheading','actionSlogan'));
        
        if(!empty($this->data)){
            $this->Post->create();
            if($this->Post->save($this->data)){
                $this->Session->setFlash(__('The Post has been saved',true));
                $this->redirect('index');
            }else{
                $this->Session->setFlash(__('The Post could not be saved. Please try again',true));
            }
        }
        
    }
    // edit post
    function edit($id=null){
        
        $actionHeading="Edit a Post";
        $actionSogan = " Please input all fill";
        $this->set(compact('actionHeading','actionSogan'));
        if($id && empty($this->data)){
            $this->Session->setFlash("invalid post");
        }
        if(!empty($this->data)){
           if( $this->Post->save($this->data)){
                $this->Session->setFlash('The Post has been saved');
                $this->redirect(array('action'=>'index'));
            }else{
                $this->Session->setFlash('The post could not saved');
            }
        }
        if(empty($this->data)){
            $this->data = $this->Post->read(null,$id);
        }
        
    }
    //delete post
    function delete($id=null){
        if(!$id){
            $this->Session->setFlash('Id is invalid for post');
        }
        if($this->Post->delete($id)){
            $this->Session->setFlash('The Post deleted');
            $this->redirect('index');
        }
    }
}