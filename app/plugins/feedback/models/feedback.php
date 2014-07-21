<?php
class Feedback extends FeedbackAppModel{
    var $name="Feedback";
    var $useTable=false;
    function sendEmail($toEmail){
        if(mail($toEmail,'Title Email','This is Content email test','From:vuhuytuan89@gmail.com')){
            return true;
        }else {
            return false;
        }
    }
}