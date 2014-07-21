<div class="messages index">
	<h2><?php __('Quick Messages');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('content');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($messages as $message):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $message['Message']['id']; ?>&nbsp;</td>
		<td><?php echo $message['Message']['name']; ?>&nbsp;</td>
		<td><?php echo $message['Message']['content']; ?>&nbsp;</td>
		<td><?php echo $message['Message']['created']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $message['Message']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $message['Message']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $message['Message']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $message['Message']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>

<div class="messages form">
<?php echo $this->Form->create('Message',array('action'=>'add'));?>
	<fieldset>
 		<legend><?php __('Send Message'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('content');
	?>
	</fieldset>
<?php 
    //echo $this->Form->end(__('Submit', true)); //submit khong su dung ajax
    echo $ajax->submit('Submit', array('url'=> array('controller'=>'messages', 'action'=>'add'), 'update' => 'messages'));

	//echo $ajax->submit('Submit',array('url'=>'/messages/add','update'=>'messages')); 
    echo $this->Form->end();
?> 
</div>