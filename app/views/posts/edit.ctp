<fieldset>
    <legend><?php __('Add a Post'); ?></legend>
    Please Fill in all fields.
    <?php 
        echo $form->create('Post');
        echo $form->error('Post.title');
        echo $form->input('Post.title',array(
                                        'id'=>'posttitle',
                                        'label'=>'Title',
                                        'size'=>'50',
                                        'maxlength'=>'255',
                                        'error'=>false));
        
        echo $form->input('Post.content',array(
                                            'id'=>'postcontent',
                                            'type'=>'textarea',
                                            'label'=>'Content',
                                            'rows'=>'10',
                                            'error'=>false));
        
        
        echo $form->end(array('label'=>'submit'));
    ?>
</fieldset>