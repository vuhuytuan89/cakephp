<?php


    /**
     * @author huytuan
     */

    /** Tìm tất cả các users mà username bắt đầu bằng ký tự 't'  */
    $this->User->find('all',array('conditions'=>array('username LIKE '=>'t'.'%')));
    // kq:  SELECT * FROM users WHERE username LIKE 't%';

    /** tìm tất cả các users có tham số active là 1, hoặc thuộc group có id là 1 */
    $this->User->find('all',array('conditions'=>array('or'=>array('User.active'=>1,'User.group_id'=>1))));
    //kq: SELECT * FROM users WHERE (active = 1) OR (group_id = 1)

    /** mặc định điều kiện ở phần WHERE trong câu lệnh SQL sẽ là AND */
    $this->User->find('all',array('conditions'=>array('User.active'=>1,'User.group_id'=>1)));
    //kq : SELECT * FROM users WHERE active = 1 AND group_id = 1

    /** Tìm các users mà username không phải là 'admin' và group_id không phải là 1 */
    $this->User->find('all',array('conditions'=>array('not'=>array('User.username'=>'admin','User.group_id'=>1))));
    //kq: SELECT *FROM `find_users` WHERE NOT username = 'admin' AND NOT group_id =1


        /** Khai báo Form helper như sau: */
       // var $helpers = 'Form';
        /** Khi sử dụng Form helper, trong view dùng cú pháp: */
        echo $this->Form->method();
        //hoac su dung:
        echo $form->method();


     echo $this->Form->create($model,$option);



?>