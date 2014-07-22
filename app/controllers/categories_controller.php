<?php
class CategoriesController extends AppController{
    var $name = "Categories";
    
    function getAll(){
        return $this->Category->getCategories();
    }
    function menu(){
        $categories = $this->getAll();
        $menu = $this->Category->buildCategories($categories,$this->passedArgs['c']);
       // debug($categories); 
        return $menu;
    }
    
    
}