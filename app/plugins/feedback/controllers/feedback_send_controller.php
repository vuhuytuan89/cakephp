<?php 
class FeedbackSendController extends FeedbackAppController{
   
    var $name="Feedback";
    //http://localhost/demo/cakephp/feedback/feedbackSend/send
    // ten plugin/ten controller/ action
    function send($toEmail){ 
       
        $this->set('result',false);
        if($this->Feedback->sendEmail($toEmail)){
            return $this->set('result',true);
        }
        
    }
}