<?php


class UsersController extends AppController{
    var $layout=false;
    var $name="Users";
    var $helpers=array("Html","Session");
    var $_sessionUsername="Username";

    function index()
    {
    }
    function view(){
        if(!$this->Session->read($this->_sessionUsername)) // kiem tra session co ton tai hay k
        {
            $this->redirect("login");
        }
        else {
            $this->render("/users/index"); 
        }
    }
    function login(){
       
        $error="";
        if($this->Session->read($this->_sessionUsername)){
            $this->redirect("view");
        }
        if(isset($_POST['ok']))
        {
            $username=$_POST['username'];
            $password=$_POST['password'];
            if($this->User->check_login($username,$password)){
                $this->Session->write($this->_sessionUsername,$username);
                $this->redirect("view");  
            }
            else
            {
                $error="Username & Password Wrong";
            }
        }
        $this->set('error',$error);
        //$this->redirect("users/login");
        $this->render("login");
        
    }
    function logout(){
        $this->Session->delete($this->_sessionUsername);
        $this->redirect('login');
    }
    function add(){
       if(!empty($this->data)){
            $this->User->set($this->data);
            if($this->User->validateUser()){
                $this->User->save($this->data);
                $this->Session->setFlash('You have been add new User !');
                $this->redirect('view');
            }
       }
       else
       {
            echo "aaaaaa";
           // $this->render();
       }
    }
    
}