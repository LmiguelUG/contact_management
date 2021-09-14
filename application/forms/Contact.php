<?php

class Application_Form_Contact extends Zend_Form
{

    public function init()  {

        $this->addElement('text', 'name', array('label' => 'Enter Your Name:','required' => true));
        $this->addElement('text', 'surname', array('label' => 'Enter Your surname:','required' => true));
        $this->addElement('text', 'email', array('label' => 'Enter Your email:','required' => true));
        $this->addElement('text', 'telephone', array('label' => 'Enter Your Contact Number:', 'required' => true));
        $this->addElement('submit','submit',array('label' => 'Add Contact'));
        
    }


}

