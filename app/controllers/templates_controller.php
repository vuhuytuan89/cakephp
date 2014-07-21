<?php
class TemplatesController extends AppController{
    var $uses=array();
    var $layout="template"; //load file chua noi dung layout: view/layout/template.ctp
    var $helpers = array("html","Test");// thanh phan helper common dc goi de tao menu,header , footer trong view
    function index(){
        $this->set("title", "Demo cach su dung layout");
        $this->set("content","Noi dung o day");
    }
    function view($id=null){
        switch($id)
        {
            case '1':
            {
                $this->set("title","Noi dung 1");
                $this->set("content","Noi dung 1");
                break;
            }
            case '2':
            {
                $this->set("title","Noi dung 2");
                $this->set("content","Noi dung 2");
                break;
            }
             case '3':
            {
                $this->set("title","Noi dung 3");
                $this->set("content","Noi dung 3");
                break;
            }
            case '4':
            {
                $this->set("title","Noi dung 4");
                $this->set("content","Noi dung 4");
                break;
            }
            default:
            {
                $this->set("title","Defaul 1");
                $this->set("content","Noi dung Default");
                break;
            }
            
        }
    }
}