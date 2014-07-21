<?php

class User extends AppModel{
    var $name="User";
    function check_login($username,$password){
        $pass=md5($password);
        $sql="select *from users where username='$username' and password='$pass'";
        $this->query($sql);
        if($this->getNumRows()==0)
            return false;
        else
            return true;
    }
}