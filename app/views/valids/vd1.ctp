<h1>Form</h1>
<?php
    echo $this->Form->create('Valid', array('action' => 'vd1'));
    echo $this->Form->input('title');
    echo $this->Form->input('info');
    echo $this->Form->end('Resgister');
?>
