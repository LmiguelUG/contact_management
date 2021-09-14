<?php

class ContactController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }

    public function createAction()
    {
       $contact_form = new Application_Form_Contact();
       $request     = $this->getRequest();
       if($request->ispost()) {
           if($contact_form->is_valid($request->getPost())) {
               $contact_model = new Application_Model_DbTable_Contact();
               $contact_model->create();
               $this->_redirect('contact');
           }
       }
       
       $this->view->contact_form = $contact_form;
    }
    


}



