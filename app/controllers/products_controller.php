<?php
class ProductsController extends AppController{
    var $name = "Products";
   
    function lists(){
        $categories = $this->Category->find('all',array(
                                            'order' => 'Category.id ASC'
        ));
        $categories = $this ->Category->buildCategories($categories,$this->passedArgs['c']);
        $children_ids = $this->Category -> getChildCategories($categories,$this->passedArgs['c'],true);
        $allCatIds = array_merge(array($this->passedArgs['c']),$children_ids);
        return $this->Product->lists($allCatIds);
    }
   function view(){
        $result = $this -> Product -> find('all',array('condition' => array('Product.id'=> $this->passedArgs['pd_id'])));
        if(empty($result)){
            $this->redirect(array('controller'=>'ecommerce','action'=>'index'));
        }
        $this->set('product',$result);
   }
}