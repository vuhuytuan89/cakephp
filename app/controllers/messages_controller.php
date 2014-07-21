<?php
class MessagesController extends AppController {

	var $name = 'Messages';
    var $helpers = array('Ajax','Javascript');
    
    
    
	function index() {
		$this->Message->recursive = 0;
		$this->set('messages', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid message', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('message', $this->Message->read(null, $id));
	}

	function add() {
        $this->layout = 'ajax'; //su dung layout ajax thay cho layout mac dinh
        $this->autoRender = false;
        if (!empty($this->data)) {
            $this->Message->create();
            if ($this->Message->save($this->data)) {
                $this->Session->setFlash(__('Your message has been sent', true));
                //$this->redirect(array('action' => 'add'));
                $this->redirect($this->referer());//sau khi nhan submit thi se redirect tai do.
            } else {
                $this->Session->setFlash(__('Your message could not be sent. Please, try again.', true));
            }
        }
    }

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid message', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Message->save($this->data)) {
				$this->Session->setFlash(__('The message has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The message could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Message->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for message', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Message->delete($id)) {
			$this->Session->setFlash(__('Message deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Message was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>