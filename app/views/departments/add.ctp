<h1>Add department</h1>
<?php echo $form->create('department',array('action'=>'add'));
    echo $form->label('Name');
    echo $form->input('Department.name',array('size'=>'120'));
    echo $form->error('name');
    echo $form->label('Region');
    echo $form->input('Department.region',array('size'=>'40'));
    echo $form->error('region');
    echo $form->end('Save');
 ?>