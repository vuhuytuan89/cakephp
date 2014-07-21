<?php 
class TestHelper extends AppHelper{
    
    // t?o 1 chu?i ng?u nhiên
    function create_random_string1($num) {
    //Tao du lieu cho hinh ngau nhien
    $chars = array( 'a', 'A', 'b', 'B', 'c', 'C', 'd', 'D', 'e', 'E', 'f', 'F', 'g', 'G', 'h', 'H', 'i', 'I', 'j', 'J',  'k', 'K', 'l', 'L', 'm', 'M', 'n', 'N', 'o', 'p', 'P', 'q', 'Q', 'r', 'R', 's', 'S', 't', 'T',  'u', 'U', 'v', 'V', 'w', 'W', 'x', 'X', 'y', 'Y', 'z', 'Z', '1', '2', '3', '4', '5', '6', '7', '8', '9');
    $max_chars = count($chars) - 1;
    for($i = 0; $i < $num; $i++) {
      $code = ( $i == 0 ) ? $chars[rand(0, $max_chars)] : $code . $chars[rand(0, $max_chars)];
    }
    return $code;
  }
  
  function create_random_string($sum){
    //t?o d? li?u cho h?nh ng?u nhiên
    $chars= array('a','A','b','B');
    $max_chars=count($chars)-1;
    for($i=0;$i<$sum;$i++){
        $code = ( $i == 0 ) ? $chars[rand(0, $max_chars)] : $code . $chars[rand(0, $max_chars)];
    }
     return $code;
  }
   
     // Hàm t?o menu
    function create_menu(){
        $menu  = "<ul>";
        $menu .= "<li>".$this->link("CodeIgniter",array("controller"=>"templates","action"=>"view",1))."</li>";
        $menu .= "<li>".$this->link("CakePHP",array("controller"=>"templates","action"=>"view",2))."</li>";
        $menu .= "<li>".$this->link("Zend",array("controller"=>"templates","action"=>"view",3))."</li>";   
        $menu .= "</ul>";
        return $menu;
      }
    //Hàm t?o các thành ph?n cho header và footer
    function general(){
    $data = array(
                    "header" => "Framgia.com",
                    "footer" => "Copyright 2014 © | HuyTuan",
                );
    return $data;
    }
}
?>