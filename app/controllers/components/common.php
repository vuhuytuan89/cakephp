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
                'a'=>array('á','à','?','?','?','ã','?','?','?','?','?','â','?','?','?','?','?'),
                    'A'=>array('Á','À','?','?','?','Ã','?','?','?','?','?','Â','?','?','?','?','?'),
                    'd'=>array('ð'),
                    'D'=>array('Ð'),
                    'e'=>array('é','è','?','?','?','ê','?','?','?','?','?'),
                    'E'=>array('É','È','?','?','?','Ê','?','?','?','?','?'),
                    'i'=>array('í','?','?','?','?'),
                    'I'=>array('Í','?','?','?','?'),
                    'o'=>array('ó','?','?','?','?','ô','?','?','?','?','?','õ','?','?','?','?','?'),
                    '0'=>array('Ó','?','?','?','?','Ô','?','?','?','?','?','Õ','?','?','?','?','?'),
                    'u'=>array('ú','ù','?','?','?','ý','?','?','?','?','?'),
                    'U'=>array('Ú','Ù','?','?','?','Ý','?','?','?','?','?'),
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