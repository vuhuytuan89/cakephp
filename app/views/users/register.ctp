<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script>
    $(document).ready(function() {
	    $("#UserUsername").focusout(function() {
	      
	        $(".ajax_status").css('display','inline');
	        $("#username_ajax_result").css('display','none');
	        var $username = $("#UserUsername").val();
            
	        $.post("http://localhost/demo/cakephp/users/check_username/", {data:{User:{username:$username}}}, function(data) {
	            
                $(".ajax_status").css('display', 'none');
	            if (data == 1) {
	                $("#username_ajax_result").attr('class','ajax_success');
	                $("#username_ajax_result").text('Username is available');
	            } else {
	                $("#username_ajax_result").attr('class', 'ajax_error');
	                $("#username_ajax_result").text('Username is already in use');
	            }
	            $("#username_ajax_result").css('display','inline');
	                });
	        });
	});
</script>



<div class="row">
<?php
	    //$this->Html->script('http://localhost/demo/cakephp/users/check_username',array('inline'=>false));
	  
        echo $form->Create('User',array(
	                               'action'=>'register',
	                
	                               ));
	    if (isset($errors)) {
	        $form->error = $errors;
	    }
	    echo '<fieldset>';
	    echo '<legend>Create an Account</legend>';
	    echo '<ol>';
        
	    echo '<li><label for="Username">Username';
	    if ($form->isFieldError('username')) {
        	        echo '<br/><strong>' .  $form->error('username') . '</strong>';
	    }
	    echo '</label>';
	    echo $form->text('username',array('class'=>'form-control'));
	    echo '<span class="ajax_status"><img src="/img/load.gif" alt="Checking..." /></span>';
	    echo '<span id="username_ajax_result"></span>';
	    echo '</li>';
        
        
	    echo '<li><label for="Email">Email';
	    if ($form->isFieldError('email')) {
	        echo '<br/><strong>' . $form->error('email') . '</strong>';
	    }
	    echo '</label>';
	    echo $form->text('email',array('class'=>'form-control'));
	    echo '</li>';
        
        
	    echo '<li><label for="Password">Password';
	    if ($form->isFieldError('password')) {
	        echo '<br/><strong>' . $form->error('password') . '</strong>';
	    }
	    echo '</label>';
	    echo $form->password('password',array('class'=>'form-control'));
	    echo '</li>';
        
        
	    echo '</ol>';
	    echo '</fieldset>';
	    echo $form->end('Submit');

?>
</div>
<style>
.form-control { width: 200px;}
.ajax_status {
	    display: none;
	}
 .ajax_success {
	    color: #036A0D;
	}
 .ajax_error {
	    color: #FF0000;
	}
</style>