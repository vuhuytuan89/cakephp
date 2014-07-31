<?php

class User extends AppModel{
    var $name="User";
    
    
    var $validate = array(
	            'username' => array(
	                'username_not_empty' => array(
	                    'rule' => 'notEmpty',
	                    'message' => 'This field is required',
	                    'last' => true
	                ),
	                'username_alphanumeric' => array(
	                    'rule' => 'alphaNumeric',
	                    'message' => 'Usernames must contain only letters and numbers',
	                    'last' => true
	                ),
	                'username_unique' => array(
	                    'rule' => 'isUnique',
	                    'message' => 'That username is already in use',
	                    'last' => true
	                ),
	            ),
	            'email' => array(
	                'email_not_empty' => array(
	                    'rule' => 'notEmpty',
	                    'message' => 'This field is required',
	                    'last' => true
	                ),
	                'email_unique' => array(
	                    'rule' => 'isUnique',
	                    'message' => 'That email is already in use',
	                    'last' => true
	                )
	            ),
	            'password' => array(
	                'password_not_empty' => array(
	                    'rule' => 'notEmpty',
	                    'message' => 'This field is required',
	                    'last' => true
	                )
	            )
	        );

    
    
    
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