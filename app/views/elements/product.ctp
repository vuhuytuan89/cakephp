<?php
    $products = $this->requestAction("/products/list/c:$catId/");
    foreach($products as $product):
    ?>
        <div class="product_containner" style="width: 100%;">
        
            <?php
                if($product['Product']['thumbnail']){
                    $thumbnail = '/img/products' .$product['Product']['thumbnail'];
                }else {
                    $thumbnail = '/img/products/noimages.jpg';
                }
                e($html->link(
                    $html->image($thumbnail,array('border'=>'0')),
                    array('controller' => 'product',
                            'action' => 'view/cat_id:$catId/pd_id:'.$product['Product']['id'],
                    ),
                    array('escape' => false)
                ));
            ?>
            <br />
            <?php echo $html -> link($product['Product']['name'],
            '/products/view/cat_id:$cat_id/pd_id:'.$product['Product']['id']);
            
             ?>
             <br />
             <?php echo "Price: ". $product['Product']['price']; ?>
        </div>
    <?php
    endforeach;
?>