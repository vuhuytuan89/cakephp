<div class="messages form">
<?php echo $this->Form->create('Message');?>
	<fieldset>
 		<legend><?php __('Add Message'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('content');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Messages', true), array('action' => 'index'));?></li>
	</ul>
</div>