<?php

class Training_Animal_Model_Animal extends Mage_Core_Model_Abstract
{

    protected function _construct()
    {
        //initialize resource model
        $this->_init('training/animal');

        //this is passed to _setResourceModel,
        //which will also set up our collection
        //model by appending _collection
    }

}