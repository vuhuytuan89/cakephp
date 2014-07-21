<?php

class TaocomponentController extends AppController{
    //t?o components
    var $components= array('Common','Session');
    function test(){
        $string="Xin chào! V? Huy Tu?n";
        $data=$this->Common->unicode_convert($string);
        $this->set('data',$data);
    }
    //t?o helper
    var $helpers=array('Test');
    function test_helper(){
        $this->render('test_helper'); // load file helper
    }
    // t?o session
    function test_session(){
        $this->Session->write('username','admin');
        $this->Session->write('name','Tuan');
        // luu dang mang
        $this->Session->write('User.name','HuyTuan');
        $this->Session->write('User.address','BacNinh');
        $this->Session->write('User.age','26');
        pr($this->Session->read('name'));
        pr($this->Session->read('User'));
         echo $this->Session->delete('username');
        echo "<br> check username la admin, xem co ton tai k?";
        echo $this->Session->check('username');
        // xoa sesssion
       
    }
}