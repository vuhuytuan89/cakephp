<?php 
 echo "<pre>";
    foreach($data as $val)
    {
      
         print_r($val);
    }
    echo "</pre>";
?>

<?php 

    echo $this->Form->create('Users', array('type' => 'get'));
        echo $this->Form->label('Form');
        echo $this->Form->text('username');
        echo $this->Form->password('password');
        echo $this->Form->textarea('post_title');
        echo $this->Form->input('textarea', array('rows' => '5', 'cols' => '5'));
        echo $this->Form->label('checked');
        echo $this->Form->checkbox('Done', array('checked' => true)); 
        echo $this->Form->label('Unchecked');
        echo $this->Form->checkbox('Done', array('checked' => false));
        
    echo $this->Form->end('Submit');
     
     
      ?>