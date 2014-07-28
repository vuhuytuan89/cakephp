<?php
    if($product[0]['Product']['image']){
        $pd_thumbnail = '/img/products/'.$product[0]['Product']['image'];
        
    }else{
        $pd_thumbnail = '/img/products/noimages.jpg';
        
    }
    e($html->image($pd_thumbnail,array(
                                        'border'=>'0',
                                        'width'=>'150',
                                        'height'=>'150',)));
    
?>
<strong><?php echo $product[0]['Product']['name']; ?></strong>
<br />
Price : <?php echo Configure::read('Shop.currency'); echo $product[0]['Product']['price']; ?>
<br />
