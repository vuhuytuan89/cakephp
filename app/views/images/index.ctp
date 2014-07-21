<div class="images">
<h2>List Images</h2>

<table cellpadding="0" cellspacing="0" width="1000px" border="1">
<tr>
    <th>Id</th>
    <th>Image String</th>
    <th>Image Display</th>
</tr>
<?php foreach($data as $val): ?>
    <tr>
        <td><?php echo $val['Image']['id']; ?></td>
        <td><?php $hinh= $val['Image']['images'];?>
        </td>
        <td> <img src="<?php echo $this->webroot;?>uploads/<?php echo $hinh; ?>" /></td>
        
    </tr>
<?php  endforeach; ?>
</table>
    <ul class="actions">
        <li><?php echo $this->Html->link('Upload Images', '/images/upload'); ?></li>
    </ul>
</div>