<ul>
    <li><?php echo $html->link('All Category','/') ?></li>
    <?php
        $categories = $this-> requestAction('/categories/menu/c:$catId/p:$pdId/');
        //debug($categories);
        foreach($categories as $category){
            extract($categories);
            $level = ($parent_id == 0 ) ? 1 : 2;
            $url = "/carts/index/cat_id:" . $id;
            if($level==2){
                $name = "~~~" . $name;
            }
            $listId = "";
            if($id == $catId) {
                $listId = 'id = "current" ';
            }
            ?>
            <li <?php echo $listId; ?>><?php echo $html->link($name,$url); ?></li>
            <?php 
        }
    ?>

</ul>