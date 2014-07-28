<?php
class CategoriesController extends AppController{
    var $name = "Categories";
    
    function getAll(){
        $data= $this->Category->getCategories();
        return $data;
    }
    function menu(){
        $categories = $this->getAll();
        $menu = $this->Category->buildCategories($categories,0);   
        return $menu;
    }
    
    
}