<?php

class Application_Model_DbTable_Contact extends Zend_Db_Table_Abstract
{

    protected $_name = 'contacts';

    public function create() {
        
        $front   = Zend_Controller_Front::getInstance();
        $request = $front -> getRequest();
        $data = array (
            'name'      => $request->getPost('name'),
            'surname'   => $reuqest->getPost('surnmae'),
            'email'     => $reuqest->getPost('email'),
            'telephone' => $reuqest->getPost('telephone')
        );
        $this->insert($data);
        
    }


}

