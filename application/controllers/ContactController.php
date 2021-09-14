<?php

class ContactController extends Zend_Controller_Action
{

    public function init()
    {
        
    }

    public function indexAction()
    {

        $contact_model = new Application_Model_DbTable_Contact(); 
        $contacts = $contact_model->fetchAll();
        $this->view->contacts = $contacts;
    }

    public function createAction()
    {
       $contact_form = new Application_Form_Contact();
       $request     = $this->getRequest();
       if($request->ispost()) {
           if($contact_form->isValid($request->getPost())) {
               $contact_model = new Application_Model_DbTable_Contact();
               $contact_model->create();
               $this->_redirect('contact');
           }
       }
       
       $this->view->contact_form = $contact_form;
    }

    public function editAction()
    {
        
        $request       = $this->getRequest();
        $id            = $request->getParam('id');
        $contact_model = new Application_Model_DbTable_Contact();
        $contact       = $contact_model->fetchRow('id = '.$id);
        $contact_form   = new Application_Form_Contact();
        if ($request->isPost()) {
            $contact_model->edit();
            $this->_redirect('contact');
        }
        $this->view->contact = $contact;
        $this->view->contact_form = $contact_form;
    }


    public function deleteAction()  {

        $contact_model = new Application_Model_DbTable_Contact();
        $contact_model->deleteContact();
        $this->_redirect('contact/edit?id=2');
        
    }


}







