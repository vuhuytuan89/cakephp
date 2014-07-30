<h2>Post listings</h2>
<?php 
    if(isset($post) && is_array($post)){
        ?>
        <table class="table table-hover"><tr>
        
        <td>ID</td><td>Title</td><td>Content</td>
                    <td>Last Modified</td><!--<td>Published</td>--><td colspan="2">Action</td>
        </tr>
        <?php 
            foreach($post as $post):?>
            <tr>
                <td><?php echo $post['Post']['id']; ?></td>
                <td><?php echo $post['Post']['title']; ?></td>
                <td><?php echo $post['Post']['content'];?></td>
                <td><?php echo $post['Post']['modified']; ?></td>
               <!-- <td><?php
                    echo $html->link(ife($post['Post']['published']==1,'Published','unpublished'),
                                        '/post/'.ife($post['Post']['published']==1,'disable','enable').'/'.$post['Post']['id']);
                    
                 ?></td>
                 -->
                 <td>
                    <?php
                        echo $html->link('Edit','edit/'.$post['Post']['id']);
                     ?>
                 </td>
                 <td>
                    <?php
                        echo $html->link('Del','delete/'.$post['Post']['id']);
                     ?>
                 </td>
            </tr>
            <?php endforeach;
            
            if(sizeof($post)==0) echo "not post found";
        ?>
        </table>
        <?php
    }
?>