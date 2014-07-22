<ul>
    <li><?php echo $html->link('All Category','/') ?></li>
    <?php
        $categories = $this-> requestAction('/categories/menu/c:$catId/p:$pdId/');
        foreach($categories as $category){
            extract($categories);
            $lavel = ($parent_id == 0 ) ? 1 : 2;
            $url = "/carts/index/cat_id:" . $id;
            if($lavel==2){
                $name = "~~~" . $name;
            }
            $listId = "";
            if($listI == $catId) {
                $listId = 'id = "current" ';
            }
            ?>
            <li <?php echo $listId; ?>><?php echo $html->link($name,$url); ?></li>
            <?php 
        }
    ?>

</ul>