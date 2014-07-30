<?php
class Post extends AppModel{
    var $name='Post';
    var $validate=array('title'=>array(
                                    'alphaNumeric'=>array(
                                        'rule'=>'notEmpty',
                                        'message'=>'Enter a title for this post',
                                        )
                                        ),
                        'content'=>array(
                                    'alphaNumeric'=>array(
                                        'rule'=>'notEmpty',
                                        'message'=>'Enter some content for your post',
                                        )
                                        )
                        );
                        
}