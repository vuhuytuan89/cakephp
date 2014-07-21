<?php
    echo $this->Form->create('Valid',array("action"=>"vd3"));
    echo $this->Form->input("username");
    echo $this->Form->input("email");
 
    echo $this->Form->end("Register");
?>