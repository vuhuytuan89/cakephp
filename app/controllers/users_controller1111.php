<?php 
class UsersController extends AppController{
    
    function beforeFilter(){
        parent::beforeFilter();
        $this->Auth->allow(array('*'));
    }
    var $name="Users";
    function cautruyvan(){
       //$qr=$this->User->query("select *from users");
       
       
        /** L?y t?t c? c�c users */
        $data=$this->User->find("all"); // select *from users
       
        $data= $this->User->find('all',array('conditions'=>array('username LIKE '=>'fram%')));
        // SELECT * FROM `users`  WHERE `username` LIKE 'fram%' 
       
        /** t?m t?t c? c�c users c� tham s? active l� 1, ho?c thu?c group c� id l� 1 */
        $data= $this->User->find('all',array('conditions'=>array('or'=>array(
                                                                    'User.active'=>1,'User.group_id'=>1))));
        //kq: SELECT * FROM users WHERE (active = 1) OR (group_id = 1)
        
        /** m?c �?nh �i?u ki?n ? ph?n WHERE trong c�u l?nh SQL s? l� AND */
        $data=$this->User->find('all',array('conditions'=>array('User.active'=>1,'User.group_id'=>1)));
        //kq : SELECT * FROM users WHERE active = 1 AND group_id = 1
        
        /** T?m c�c users m� username kh�ng ph?i l� 'admin' v� group_id kh�ng ph?i l� 1 */
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