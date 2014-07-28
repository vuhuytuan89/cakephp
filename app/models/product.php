<?php
class Product extends AppModel{
    var $name = "Product";
    var $belongTo = array('Category');
    
    function lists($catIds = NULL){
        if(iss_array($catIds)){
            $result = $this->find('all', array(
                'conditions' => array('Product.category_id'=>$catIds),
                'order' => 'Product.category_id asc'
            ));
            return $result;
        }
    }
    
}