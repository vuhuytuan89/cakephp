<?php
class Contact extends AppModel{
    var $name = "Contact";
    var $validate = array(
        'name' => array(
                'rule'=>'notEmpty',
                'message'=> 'Please enter name'
        ),
        'email' => array(
                'rule' => 'email',
                'message' => 'Please enter a valid email address',
        ),
        'telephone' => array (
                'rule' => 'numeric',
                'message' => 'Please enter a numeric telephone number'
        ),
    );
}