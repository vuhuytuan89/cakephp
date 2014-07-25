<?php
class Category extends AppModel{
    var $name="Category";
    var $hasMany=array("Product");
    
    function getCategories($field='Category.id',$direction='DESC'){
        return $this->find('all',array('order'=>$field.' '.$direction));
    }
    function buildCategories($categories,$parent_id){
        $ChildCategories = array();
        $ids = array();
        foreach($categories as $category){
            if($category['Category']['parent_id']==$parent_id){
                $ChildCategories[] = $category['Category'];
            }
            $ids[$category['Category']['id']] = $category['Category'];
        }
        $HoldParentId=$parent_id;
        while($HoldParentId!=0){
            $parent = array($ids[$HoldParentId]);
            $currentId=$parent[0]['id'];
            $HoldParentId = $ids[$HoldParentId]['parent_id'];
            foreach($categories as $category){
                if($category['Category']['parent_id']==$HoldParentId && ! in_array($category['Category'],$parent)){
                    $parent[]= $category['Category'];
                }
            }
            array_multisort($parent);
            $n=count($parent);
            $ChildCategories2 = array();
            for($i=0; $i< $n; $i++){
                $ChildCategories2[] = $parent[$i];
                if($parent[$i]['id']==$currentId){
                    $ChildCategories2 = array_merge($ChildCategories2,$ChildCategories);
                }
            }
            $ChildCategories=$ChildCategories2;
        
            
        }
        return $ChildCategories;
    }
    function getChildCategories($categories, $id , $recursive=true){
        if($categories==NULL){
            $categories= $this->getCategories();
        }
        $n=count($categories);
        $child = array();
        for($i=0; $i< $n;$i++){
            $catId= $categories[$i]['id'];
            $parentId=$categories[$i]['parent_id'];
            if($parentId==$id){
                $child[] = $catId;
                if($recursive){
                    $child = array_merge($child, $this->getChildCategories($categories,$catId));
                }
            }
        }
        return $child;
    }
}