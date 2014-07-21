<?php 
class UsersController extends AppController{
    
    function beforeFilter(){
        parent::beforeFilter();
        $this->Auth->allow(array('*'));
    }
    var $name="Users";
    function cautruyvan(){
       //$qr=$this->User->query("select *from users");
       
       
        /** L?y t?t c? các users */
        $data=$this->User->find("all"); // select *from users
       
        $data= $this->User->find('all',array('conditions'=>array('username LIKE '=>'fram%')));
        // SELECT * FROM `users`  WHERE `username` LIKE 'fram%' 
       
        /** t?m t?t c? các users có tham s? active là 1, ho?c thu?c group có id là 1 */
        $data= $this->User->find('all',array('conditions'=>array('or'=>array(
                                                                    'User.active'=>1,'User.group_id'=>1))));
        //kq: SELECT * FROM users WHERE (active = 1) OR (group_id = 1)
        
        /** m?c ð?nh ði?u ki?n ? ph?n WHERE trong câu l?nh SQL s? là AND */
        $data=$this->User->find('all',array('conditions'=>array('User.active'=>1,'User.group_id'=>1)));
        //kq : SELECT * FROM users WHERE active = 1 AND group_id = 1
        
        /** T?m các users mà username không ph?i là 'admin' và group_id không ph?i là 1 */
        $data= $this->User->find('all',array(
                                        'conditions'=>array(
                                                        'not'=>array(
                                                        'User.username'=>'admin','User.group_id'=>1))));
        //kq: SELECT *FROM `find_users` WHERE NOT username = 'admin' AND NOT group_id =1
       
       
       
       $this->set('data',$data);
    }
    function login(){
        
    }
    function logout(){
        
    }
}