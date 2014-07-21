 <?php
class CommonComponent extends Object{

    //called before Controller::beforeFilter()
    function initialize(&$controller, $settings = array()) {
        // saving the controller reference for later use
        $this->controller =& $controller;
    }

    //called after Controller::beforeFilter()
    function startup(&$controller) {
    }

    //called after Controller::beforeRender()
    function beforeRender(&$controller) {
    }

    //called after Controller::render()
    function shutdown(&$controller) {
    }

    //called before Controller::redirect()
    function beforeRedirect(&$controller, $url, $status=null, $exit=true) {
    }

    function redirectSomewhere($value) {
        // utilizing a controller method
    }
    // Ham chuyen doi tieng viet sang khong dau
    function unicode_convert($str){
              if(!$str) return false;
              $unicode = array(
                'a'=>array('�','�','?','?','?','�','?','?','?','?','?','�','?','?','?','?','?'),
                    'A'=>array('�','�','?','?','?','�','?','?','?','?','?','�','?','?','?','?','?'),
                    'd'=>array('�'),
                    'D'=>array('�'),
                    'e'=>array('�','�','?','?','?','�','?','?','?','?','?'),
                    'E'=>array('�','�','?','?','?','�','?','?','?','?','?'),
                    'i'=>array('�','?','?','?','?'),
                    'I'=>array('�','?','?','?','?'),
                    'o'=>array('�','?','?','?','?','�','?','?','?','?','?','�','?','?','?','?','?'),
                    '0'=>array('�','?','?','?','?','�','?','?','?','?','?','�','?','?','?','?','?'),
                    'u'=>array('�','�','?','?','?','�','?','?','?','?','?'),
                    'U'=>array('�','�','?','?','?','�','?','?','?','?','?'),
                    'y'=>array('?','?','?','?','?'),
                    'Y'=>array('?','?','?','?','?'),             
    );

              foreach($unicode as $nonUnicode=>$uni){
                  foreach($uni as $value)
                $str = str_replace($value,$nonUnicode,$str);
              }
        return $str;
     }
    
    
    
    
}
?> 