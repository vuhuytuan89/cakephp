<?php

/**
 * BooksController
 * 
 * @package umx
 * @author huytuan
 * @copyright 2014
 * @version $Id$
 * @access public
 */
class BooksController extends AppController
{

    var $name = "Books";
    function vidu1()
    {
        $data = $this->Book->find('all');
        $this->set('data', $data);
    }
}
