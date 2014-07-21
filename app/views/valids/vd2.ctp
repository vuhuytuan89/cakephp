<?php
    echo $this->Form->create('Valid',array("action"=>"vd2"));
    echo $this->Form->input("username");
    echo $this->Form->input("email");
    echo $this->Form->input("website");
    echo $this->Form->end("Register");
?>